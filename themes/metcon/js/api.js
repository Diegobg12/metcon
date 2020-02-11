$('#nav-bar').on('click', function(event) {

    event.preventDefault()
    let menuBar = $('.menu-main-navigation-container');
    menuBar.slideToggle()
});


var navBar = $(".header-navigation")[0];
var num = $(".hentry")[0].id;
var idPage = "page-item-" + num.replace(/[^0-9]/g, ''); 

console.log(idPage);
console.log(navBar);

$(navBar).each(function(){ 

    $(this).find('li').each(function(){
        var classType = $(this).hasClass(idPage);
        console.log(classType);
        console.log(idPage);
        if($(this).hasClass(idPage)){
            $(this).addClass("tab_selected");
        }
    });


});



