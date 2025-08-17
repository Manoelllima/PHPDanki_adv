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
            $(element).click((e) => { 
                if ($(element).find('.submenu').height() == 0) {
                    $(element).find('.submenu').css({ 'height': 'auto' });
                    $(element).find('.submenu-icon').addClass('rotate');
                } else {
                    $(element).find('.submenu').css({ 'height': '0' });
                    $(element).find('.submenu-icon').removeClass('rotate');
                }
                return false;
            })
        })

    }
    submenu($('.has-submenu'));
    

    $('.submenu a').click((e)=>{
        //return false;
        e.stopPropagation();
    })
    
})