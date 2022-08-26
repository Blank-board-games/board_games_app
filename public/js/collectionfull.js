function FetchThing() {
    fetch("http://127.0.0.1:8000/api/products/desc")
        .then((response) => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error("error");
            }
        })
        .then((data) => {
            const select = document.querySelector(".price").value;
            const games = document.querySelector(".games");

            const image = document.querySelector(".image");
            const price = document.querySelector(".item_card__price");
            const discount = document.querySelector(".item_card__discount");

            image.src = data[0].image_path;
            price.textContent = data[0][0].price;
            title.textContent = data[0].title;
            console.log(data[0].image_path);
            console.log(data[0]);
        });
}

//FetchThing();

function handleSelectChange(event) {
    //FetchThing();
    const selectElement = event.target;
    const value = selectElement.value;
    const title = document.querySelector(".item_card__title");

    if (selectElement.value == "high") {
        fetch("http://127.0.0.1:8000/api/products/desc")
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
    } else if (selectElement.value == "low") {
        fetch("http://127.0.0.1:8000/api/products/asc")
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

                    console.log(data);
                }
            });
    } else if (selectElement.value == "instock") {
        fetch("http://127.0.0.1:8000/api/products/in")
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

                    console.log(data);
                }
            });
    } else if (selectElement.value == "strategy_games") {
        fetch("http://127.0.0.1:8000/api/products/strategy_games")
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

                    console.log(data);
                }
            });
    }
}
