document.addEventListener("DOMContentLoaded", function () {
    var img1 = document.querySelector(".img1");
    var img2Elements = document.querySelectorAll(".img2");

    img2Elements.forEach(function (img2) {
        img2.addEventListener("click", function () {
            img1.src = img2.src;
        });
    });
});


var searchInput = document.querySelector(".search");
var categorySelect = document.getElementById("city");
var priceSelect = document.getElementById("price");
var cards = document.querySelectorAll(".card");

searchInput.addEventListener("input", function () {
    var searchTerm = searchInput.value.toLowerCase();

    cards.forEach(function (card) {
        var cardText = card.textContent.toLowerCase();
        if (cardText.includes(searchTerm)) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
});

categorySelect.addEventListener("change", filterCards);
priceSelect.addEventListener("change", filterCards);

function filterCards() {
    var selectedCategory = categorySelect.value;
    var selectedPrice = priceSelect.value;

    cards.forEach(function (card) {
        var cardCategory = card.querySelector(".descr p:first-child").textContent.toLowerCase();
        var cardPrice = card.querySelector(".descr p:last-child").textContent;

        var categoryMatch = selectedCategory === "" || cardCategory === selectedCategory.toLowerCase();
        var priceMatch = selectedPrice === "" || checkPriceMatch(cardPrice, selectedPrice);

        if (categoryMatch && priceMatch) {
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
}
function checkPriceMatch(cardPrice, selectedPrice) {
    var numericCardPrice = parseInt(cardPrice.replace(/\$|,/g, ''), 10);
    console.log("Numeric Card Price: ", numericCardPrice);
    if (selectedPrice === "-$500.000") {
        return numericCardPrice <= 500000;
    } else if (selectedPrice === "-$400.000") {
        return numericCardPrice <= 400000;
    } else if (selectedPrice === "-$300.000") {
        return numericCardPrice <= 300000;
    } else if (selectedPrice === "+$500.000") {
        return numericCardPrice >= 500000;
    }
    else{

    }
    return true;
}
