// Quantity counter

// const btns = document.querySelectorAll(".cart__item");
var abbrs = document.querySelectorAll(".cart__item");

for (index = 0; index < abbrs.length; ++index) {
    console.log(abbrs[index]);

    abbrs[index].querySelector(".cart__btn-add").onclick = function (event) {
        event.preventDefault();
        var quantityNumber = this.parentElement.querySelector(".cart-quantity");
        currentValue = parseInt(quantityNumber.value);
        if (currentValue < quantityNumber.max) {
            currentValue += 1;
            quantityNumber.value = currentValue;
            sendDataToDb(quantityNumber);
        }
    };

    abbrs[index].querySelector(".cart__btn-subtract").onclick = function (
        event
    ) {
        event.preventDefault();
        var quantityNumber = this.parentElement.querySelector(".cart-quantity");
        currentValue = parseInt(quantityNumber.value);
        if (currentValue < quantityNumber.max) {
            currentValue += 1;
            quantityNumber.value = currentValue;
            sendDataToDb(quantityNumber);
        }
    };
}

function sendDataToDb(quantityNumber) {
    let options = {
        method: "PUT",
        body: JSON.stringify({
            quantity: quantityNumber.value,
            id: quantityNumber.dataset.id,
        }),
        headers: {
            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]')
                .value,
            "Content-Type": "application/json",
        },
    };

    fetch("/cart/update", options)
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            location.reload();
        });
}

//
