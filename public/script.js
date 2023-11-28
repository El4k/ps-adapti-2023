const darkModeToggle = document.getElementById("dark-mode-toggle");
const body = document.body;

darkModeToggle.addEventListener("click", () => {
    // Add the dark mode class immediately
    body.classList.toggle("dark-mode");

    // Assuming trocarVar is your AJAX function
    trocarVar();

    // Add the dark mode class after a short delay to allow the transition to take effect
    setTimeout(() => {
        body.classList.toggle("dark-mode");
    }, 100);
});

function filterCursos() {
    var searchInput = document.getElementById("search-input");
    var filter = searchInput.value.toUpperCase();
    var cards = document.getElementsByClassName("card");

    for (var i = 0; i < cards.length; i++) {
        var cursoText = cards[i].querySelector("h6").textContent.toUpperCase();
        var nameText = cards[i].querySelector("h4").textContent.toUpperCase();

        if (cursoText.includes(filter) || nameText.includes(filter)) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }
    }
}
