document.addEventListener('DOMContentLoaded', function(){

    // Menu Mobile
    var toggleMenu = document.getElementById('toggle-menu');
    var untoggleMenu = document.getElementById('untoggle-menu');
    var menuMobile =  document.getElementById('overlay-mobile');
    if(toggleMenu){
        toggleMenu.addEventListener('click', function(){
            menuMobile.classList.add('open');
        });
        untoggleMenu.addEventListener('click', function(){
            menuMobile.classList.remove('open');
        });
    }

    // Subir ao topo
    var subirButton = document.getElementById('subir');
    if(subirButton){
        subirButton.addEventListener('click', function(){
            window.scrollTo({top: 0, behavior: 'smooth'});
        });
    }
});