<?php
namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class DateToStringTransformer implements DataTransformerInterface
{

    const FORMAT_DATE = "d/m/Y";

    public function transform($datetime)
    {
       if ($datetime == null) {
           return null;
       }
       if (!is_object($datetime)) {
           throw new TransformationFailedException('Expected datetime object');
       }
       return $datetime->format(self::FORMAT_DATE);
    }

    /**
     * @inheritDoc
     */
    public function reverseTransform($value)
    {
        if ($value == null) {
            return null;
        }
        if (!is_string($value)) {
            throw new TransformationFailedException('Expected a string');
        }
        return \DateTime::createFromFormat(self::FORMAT_DATE, $value);
    }
}