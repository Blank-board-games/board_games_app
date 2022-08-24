const availability = document.querySelector(".av");
const price = document.querySelector(".pr");
const age = document.querySelector(".ag");

const mainSorting = document.querySelector(".main-sort");

const availabilitySorting = document.querySelector(".availability-sort");
const priceSorting = document.querySelector(".price-sort");
const ageSorting = document.querySelector(".age-sorts");

const priceBack = document.querySelector(".pr-back");
const ageBack = document.querySelector(".age-back");
const availabilityBack = document.querySelector(".availability-back");

availability.addEventListener("click", function () {
    mainSorting.classList.add("hide");
    availabilitySorting.classList.remove("hide");
});

price.onclick = function () {
    mainSorting.classList.add("hide");
    priceSorting.classList.remove("hide");
};

age.addEventListener("click", function () {
    mainSorting.classList.add("hide");
    ageSorting.classList.remove("hide");
});

priceBack.addEventListener("click", function () {
    priceSorting.classList.add("hide");
    mainSorting.classList.remove("hide");
});

ageBack.addEventListener("click", function () {
    ageSorting.classList.add("hide");
    mainSorting.classList.remove("hide");
});

availabilityBack.addEventListener("click", function () {
    availabilitySorting.classList.add("hide");
    mainSorting.classList.remove("hide");
});
