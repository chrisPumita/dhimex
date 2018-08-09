/*SCRIPTS DE RULETA*/
var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    effect: 'coverflow',
    speed: 3800,
    autoplay:4500,
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflow: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows : true

    }
});


// Add active class to the current button (highlight it)
var btnContainerF = document.getElementById("myBtnFilContainer");
var btns = btnContainerF.getElementsByClassName("fbtn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var currentF = document.getElementsByClassName("active");
    currentF[0].className = currentF[0].className.replace(" active", "");
    this.className += " active";
  });
}
