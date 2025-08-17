$(document).ready(() => {
    //MENU MOBILE
    $('.menu-mobile i').click(() => {
        //console.log($('.sidebar').width());
        if ($('.sidebar').width() == 0) {
            $('.sidebar').css({ 'width': '300px', 'overflow': 'visible' });
            $('.main-content').css({ 'width': $('.main-content').width() - $('.sidebar').width() });
            $('.main-content').css({ 'overflow': 'hidden' });
        } else {
            $('.sidebar').css({ 'width': '0px', 'overflow': 'hidden' });
            $('.main-content').css({ 'overflow': 'hidden' });
            $('.main-content').css({ 'width': $('.main-content').width() + 250 })

        }

    })


    //SUBMENUS DA ASIDE
    function submenu(el) {
        $.each(el, (key, element) => {
            $(element).click(() => {              
                //posteriormente troca por addClass()
                if ($(element).find('.submenu').height() == 0) {
                    $(element).find('.submenu').css({ 'height': 'auto' });
                    $(element).find('.submenu-icon').css({ 'transform': 'rotate(-180deg)' });
                    $(element).find('.submenu-icon').css({ 'transition': 'transform 0.3s ease-in-out'});
                } else {
                    $(element).find('.submenu').css({ 'height': '0' });
                    $(element).find('.submenu-icon').css({ 'transform': 'rotate(0deg)' });
                    $(element).find('.submenu-icon').css({ 'transition': 'transform 0.3s ease-in-out'});
                }
                return false;
            })
        })

    }
    submenu($('.has-submenu'));

    
})