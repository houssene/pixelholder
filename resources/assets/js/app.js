
window.$ = window.jQuery = require('jquery');

require('masonry-layout/dist/masonry.pkgd');

$('#grid').masonry({
    itemSelector: '.grid-item',
    fitWidth: true,
    transitionDuration: '0.6s'
});


$('.grid-item').each(function(e) {
    var $this = $(this);

    $this.click(function(e) {
        e.preventDefault();
        // Variables $temp, $val
        var $temp = $("<input>"),
            $val = $this.children('.grid-img').attr('src'),
            $copied = $('.copied'),
            $copiedContent = $('.copied .content .title');

        // Append input and selected input
        $("body").append($temp);
        $temp.val($val).select();

        $copied.show().addClass('fadeIn');
        $copiedContent.addClass('zoomIn');

        //Copied a value and remove dom input create
        document.execCommand("copy");
        setTimeout(function() {
            $copied.removeClass('fadeIn').fadeOut();
            $copiedContent.removeClass('zoomIn');
        }, 2000)
        $temp.remove();
    })
});


$('.js-scrollTo').on('click', function(e) { // Au clic sur un élément
    e.preventDefault();
    var page = $(this).attr('href'); // Page cible
    var speed = 750; // Durée de l'animation (en ms)
    $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
    return false;
});
