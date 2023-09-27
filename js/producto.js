/*PARA LA PAGINA DEL PRODUCTO==========================*/
const inputQuantity = document.querySelector('.input-quantity')
const btnIncrement = document.querySelector('#increment')
const btnDecrement = document.querySelector('#decrement')

let valueByDefault = parseInt(inputQuantity.value)

//click
btnIncrement.addEventListener('click', ()=>{
  valueByDefault +=1
  inputQuantity.value = valueByDefault
})
btnDecrement.addEventListener('click', ()=>{
    if (valueByDefault ===  1){
        return
    }
  valueByDefault -=1
  inputQuantity.value = valueByDefault
})
//toggle
//title
const toggleDescription = document.querySelector('.title-description')
const toggleAdditionalInformation = document.querySelector('.title-aditional-information')
const toggleReviews = document.querySelector('.title-reviews')

//texto
const contentDescription = document.querySelector('.text-description')
const contentAdditionalInformation = document.querySelector('.text-aditional-information')
const contentReviews = document.querySelector('.text-reviews')

//funcion

toggleDescription.addEventListener('click',()=>{
    contentDescription.classList.toggle('hidden')
})
toggleAdditionalInformation.addEventListener('click',()=>{
    contentAdditionalInformation.classList.toggle('hidden')
})
toggleReviews.addEventListener('click',()=>{
    contentReviews.classList.toggle('hidden')
})