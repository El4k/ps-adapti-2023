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

function trocarVar() {
    $.ajax({
        type: "POST",
        url: "/aluno/toggleContratar/" + alunoId,
        data: {
            _token: token,
            contratado: contratadoValue,
        },
        success: function (data) {
            // Update the button text or perform any other dynamic changes
            console.log("Toggle successful");
        },
        error: function (data) {
            console.log("Toggle failed");
        },
    });
}
