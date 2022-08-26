document.body.onload = function (event) {
    fetchApi("default");
};

function fetchApi(param) {
    fetch("http://127.0.0.1:8000/api/products/" + param)
        .then((response) => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error("error");
            }
        })
        .then((data) => {
            var newData = JSON.stringify(data);
            var index;
            var obj = JSON.parse(newData);

            const display = document.querySelector(".catalog");
            display.innerHTML = " ";
            for (let index = 0; index < obj.length; index++) {
                const title = document.querySelector(".item_card__title");
                const price = document.querySelector(".item_card__price");
                const display = document.querySelector(".catalog");

                display.innerHTML +=
                    `<div class="item_card">
                        <a href="">
                        <div class="item_card__image">
                            <img class="image" src="img/` +
                    obj[index]["image_path"] +
                    `" alt="">
                            <div class="item_card__sale">Sale</div>
                        </div>
                        <p class="item_card__title">` +
                    obj[index]["title"] +
                    `</p>
                        <div class="item_card__prices">
                            <p class="item_card__discount"> </p>
                            <p class="item_card__price">` +
                    obj[index]["price"] +
                    `</p>
                            <p class="item_card__price"></p>
                        </div>
                        </a>
                        </div>`;
            }
        });
}

function handleSelectChange(event) {
    const selectElement = event.target;
    const value = selectElement.value;

    if (selectElement.value == "high") {
        fetchApi("price/desc");
    } else if (selectElement.value == "low") {
        fetchApi("price/asc");
    } else if (selectElement.value == "instock") {
        fetchApi("stock/in");
    } else if (selectElement.value == "comingsoon") {
        fetchApi("stock/out");
    } else if (selectElement.value == "strategy_games") {
        fetchApi("categories/" + selectElement.value);
    }
}
