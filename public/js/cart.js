// Quantity counter
var minus = document.querySelector(".cart__btn-subtract")
var add = document.querySelector(".cart__btn-add");
var quantityNumber = document.querySelector(".cart-quantity");
var currentValue;

minus.onclick =  function(){
    currentValue = parseInt(quantityNumber.value);
    if(currentValue>1){
        currentValue -= 1;
        quantityNumber.value = currentValue;
    }
};

add.onclick =  function() {
    currentValue = parseInt(quantityNumber.value);
    if(currentValue<quantityNumber.max){ 
        currentValue += 1;
        quantityNumber.value = currentValue;
    }
};
//
