<?php

namespace App\Controller;

use App\Entity\News;
use App\Entity\NewsPieceJointe;
use App\Entity\Referentiel;
use App\Form\NewsType;
use App\Repository\NewsRepository;
use App\Service\File\FileDownloaderService;
use App\Service\File\FileUploaderService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/news")
 */
class NewsController extends AbstractController
{
    const IFRAME_MEDIUM = "medium";
    const IFRAME_LARGE = "large";

    /**
     * @Route("/", name="news_index", methods={"GET"})
     */
    public function index(NewsRepository $newsRepository): Response
    {
        return $this->render('news/index.html.twig', [
            'news' => $newsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="news_new", methods={"GET","POST"})
     */
    public function new(Request $request,  FileUploaderService $fileUploader): Response
    {
        $news = new News();
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $pj1 = $form->get('newsPieceJointe1')->getData();
            $newsUplaodDir = $this->getParameter('newsDirectory');
            if ($pj1) {

                $storageName = $fileUploader->upload($newsUplaodDir, $pj1);
                $pj = new NewsPieceJointe();
                $pj->setNpjNomReel($pj1->getClientOriginalName());
                $pj->setNpjNomStockage($storageName);
                $news->addNewsPieceJointe($pj);
            }
            $pj2 = $form->get('newsPieceJointe2')->getData();
            if ($pj2) {
                $storageName = $fileUploader->upload($newsUplaodDir, $pj2);
                $pj = new NewsPieceJointe();
                $pj->setNpjNomReel($pj2->getClientOriginalName());
                $pj->setNpjNomStockage($storageName);
                $news->addNewsPieceJointe($pj);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($news);
            $entityManager->flush();
            return $this->redirectToRoute('news_index');
        }

        return $this->render('news/new.html.twig', [
            'news' => $news,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/display/{size}", name="news_diplay", methods={"GET"})
     */
    public function show($size, NewsRepository $newsRepository): Response
    {
        $visibilite = $this->getDoctrine()->getRepository(Referentiel::class)->findOneBy(['trfCode' => 'NEWS_VISIBILITE', 'refCode' => 'VFO']);
        $visibiliteAll = $this->getDoctrine()->getRepository(Referentiel::class)->findOneBy(['trfCode' => 'NEWS_VISIBILITE', 'refCode' => 'VALL']);
        $news = $newsRepository->findForDisplay($visibilite, $visibiliteAll);
        switch ($size) {
            case self::IFRAME_LARGE:
                $template = 'news/iframe/large.html.twig';
                break;
            default:
                $template = 'news/iframe/medium.html.twig';
                break;
        }
        return $this->render($template, [
            'newsEntity' => $news,
        ]);
    }

    /**
     * @Route("/admin/{id}", name="news_show", methods={"GET"})
     */
    public function showAdmin(News $news): Response
    {
        return $this->render('news/show.html.twig', [
            'news' => $news,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="news_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, News $news): Response
    {
        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('news_index');
        }

        return $this->render('news/edit.html.twig', [
            'news' => $news,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="news_delete", methods={"DELETE"})
     */
    public function delete(Request $request, News $news): Response
    {
        if ($this->isCsrfTokenValid('delete'.$news->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($news);
            $entityManager->flush();
        }

        return $this->redirectToRoute('news_index');
    }

    /**
     * @Route("/{id}/download/{file}", name="news_download", methods={"GET"})
     */
    public function download(Request $request, News $news, String $file, FileDownloaderService $fileDownloaderService): Response
    {
        $npj = $this->getDoctrine()->getRepository(NewsPieceJointe::class)->findOneBy(['npjNomStockage' => $file, 'news' => $news]);
        if ($npj) {
            try {
                $file = new File(sprintf('%s/%s', $this->getParameter('newsDirectory'), $file));
                return  $this->file($file, $npj->getNpjNomReel());
            } catch (FileNotFoundException $e) {
                $this->addFlash('error', "Le fichier n'existe pas");
            } catch (Exception $e) {
                $this->addFlash('error', "Erreur lors du téléchargement");
            }
        }
        $referer = $request->headers->get('referer');
        return new RedirectResponse($referer);
    }
}
