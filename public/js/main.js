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

var noResultsMsg = document.getElementById("noResultsMsg");
var noResultsCategoryMsg = document.getElementById("noResultsCategoryMsg");
var noResultsPriceMsg = document.getElementById("noResultsPriceMsg");

function filterCards() {
    var selectedCategory = categorySelect.value;
    var selectedPrice = priceSelect.value;

    var foundResults = false;

    cards.forEach(function (card) {
        var cardCategory = card.querySelector(".descr p:first-child").textContent.toLowerCase();
        var cardPrice = card.querySelector(".descr p:last-child").textContent;

        var categoryMatch = selectedCategory === "" || cardCategory === selectedCategory.toLowerCase();
        var priceMatch = selectedPrice === "" || checkPriceMatch(cardPrice, selectedPrice);

        if (categoryMatch && priceMatch) {
            card.style.display = "block";
            foundResults = true;
        } else {
            card.style.display = "none";
        }
    });

    noResultsMsg.style.display = foundResults ? "none" : "block";
    noResultsCategoryMsg.style.display = foundResults || selectedCategory === "" ? "none" : "block";
    noResultsPriceMsg.style.display = foundResults || selectedPrice === "" ? "none" : "block";
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
    else {

    }
    return true;
}
function searchCards() {
    var input, filter, cards, card, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    cards = document.getElementsByClassName("card");
    var noResultsMsg = document.getElementById("noResultsMsg");

    var foundResults = false;

    for (var i = 0; i < cards.length; i++) {
        card = cards[i];
        txtValue = card.textContent || card.innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            card.style.display = "";
            foundResults = true;
        } else {
            card.style.display = "none";
        }
    }

    noResultsMsg.style.display = foundResults ? "none" : "block";
}



