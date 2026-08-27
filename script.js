const form = document.getElementById("signupForm");

form.addEventListener("submit", function (event) {

    const username = document.getElementById("username").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();

    if (username === "" || email === "" || password === "") {
        event.preventDefault();

        document.getElementById("message").textContent =
            "Please fill all fields.";
    }

});