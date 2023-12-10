function functionMDP() {
    var x = document.getElementById("MotDePasse");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function checkSavedUser() {
    var savedUser = localStorage.getItem("user");
    if (savedUser !== null) {
        document.getElementById("message").innerText = "Un compte est déjà enregistré, mais pour éviter de donner vos informations à tout le monde (si vous avez laissé votre session d'ouverte), nous ne vous amenons pas directement à la page des informations.";
    }
}

function saveUser() {
    if (document.getElementById("souvenir").checked) {
        var email = document.getElementById("Email").value;
        var identifiant = document.getElementById("Identifiant").value;
        var motdepasse = document.getElementById("MotDePasse").value;

        var user = {
            email: email,
            identifiant: identifiant,
            motdepasse: motdepasse
        };
        localStorage.setItem("user", JSON.stringify(user));
    }
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("monFormulaire").addEventListener("submit", saveUser);

    checkSavedUser();
});


document.addEventListener("DOMContentLoaded", function () {
    const motdepasseInput = document.getElementById('MotDePasse');
    const motdepasseError = document.getElementById('motdepasse-error');

    motdepasseInput.addEventListener('invalid', function (event) {
        event.preventDefault();
        motdepasseError.style.display = 'block';
    });

    motdepasseInput.addEventListener('input', function () {
        if (motdepasseInput.validity.valid) {
            motdepasseError.style.display = 'none';
        }
    });

});