// Quantity counter
var minus = document.querySelector(".product__btn-subtract")
var add = document.querySelector(".product__btn-add");
var quantityNumber = document.querySelector(".product-quantity");
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
