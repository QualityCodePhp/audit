$(document).ready(function () {
    $('#carouselNews').on('slide.bs.carousel', function () {
        $holder = $( ".carousel-indicators li.active" );
        $holder.next( "li" ).addClass("active");
        if($holder.is(':last-child'))
        {
            $holder.removeClass("active");
            $(".carousel-indicators li:first").addClass("active");
        }
        $holder.removeClass("active");
    });
});