/*JS PARA LA PAGINA DE LAS CATEGORIAS========== */
$(document).ready(function(){
  
  //AGREGANDO CLASE ACTIVE AL PRIMER ENLACE==========
  $().addClass('ct_item-active');
  //FILTRO DE PRODUCTOS==========================================
  $('.category-item').click(function(){
    var catProduct = $(this).attr('category');
    console.log(catProduct);

    //AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
    $('.category-item').removeClass('ct_item-active');
    $(this).addClass('ct_item-active');

    //OCULTANDO PRODUCTOS==================
    $('.product-item').css('transform','scale(0)')
    function hideProduct(){
    $('.product-item').hide();
    } setTimeout(hideProduct,400);

    //MOSTRANDO PRODUCTOS==================
    function showProduct(){
      $('.product-item[category="'+catProduct+'"]').show();
      $('.product-item[category="'+catProduct+'"]').css('transform','scale(1)');  
    } setTimeout(showProduct,400);
    
  });
  //MOSTRANDO TODOS LOS PRODUCTOS======================
  $('.category-item[category="all"]').click(function(){
    function showAll(){
      $('.product-item').show();
      $('.product-item').css('transform','scale(1)');
    }setTimeout(showAll,400);
  });
});

/*
-------Aqui Empieza el JS del BURGER MENU-------

const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav');

burger.addEventListener('click', function() {
  burger.classList.toggle('is-active');
  nav.classList.toggle('is-active');
});

-------Aqui Empieza el JS del SLIDER de 3 imagenes-------

const btnLeft = document.querySelector(".btn-left"),
      btnRight = document.querySelector(".btn-right"),
      slider = document.querySelector("#slider"),
      sliderSection = document.querySelectorAll(".slider-section");

btnLeft.addEventListener('click',e=>moveToLeft())
btnRight.addEventListener('click',e=>moveToRight())

setInterval(()=>{
  moveToRight()
},6000);

let operacion = 0;
    counter = 0;
    widthImg = 100 / sliderSection.length; 

function moveToRight(){
  if (counter >= sliderSection.length-1){
    counter=0;
    operacion = 0;
    slider.style.transform = `translate(-${operacion}%)`;
    slider.style.transition="all ease.6s"
    return;
  }
  counter++;
  operacion = operacion + widthImg;
  slider.style.transform = `translate(-${operacion}%)`;
  slider.style.transition = "all ease.6s"

}

function moveToLeft(){
  counter--;
  if(counter<0){
    counter = sliderSection.length-1;
    operacion = widthImg * (sliderSection.length-1)
    slider.style.transform = `translate(-${operacion}%)`;
    slider.style.transition="all ease.6s"
    return;
  } 
  operacion = operacion - widthImg;
  slider.style.transform = `translate(-${operacion}%)`;
  slider.style.transition = "all ease.6s"
}
*/