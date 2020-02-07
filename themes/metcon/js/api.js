$('#nav-bar').on('click', function(event) {

    event.preventDefault()
    let menuBar = $('.menu-main-navigation-container');
    menuBar.slideToggle()
});


