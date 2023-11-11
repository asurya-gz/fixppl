document.addEventListener("DOMContentLoaded", function () {

  var loginForm = document.getElementById("loginForm");

  loginForm.addEventListener("submit", function (event) {
    event.preventDefault();

    var email = document.getElementById("exampleInputEmail1").value;
    var password = document.getElementById("exampleInputPassword1").value;
    var validationMessage = validateLogin(email, password);

    document.getElementById("emailWarning").innerText =
      validationMessage.emailWarning;
    document.getElementById("passwordWarning").innerText =
      validationMessage.passwordWarning;

    if (validationMessage.success) {
      alert("Login berhasil!");
    }
  });

  // Fungsi validasi login
  function validateLogin(email, password) {
    var result = {
      success: false,
      emailWarning: "",
      passwordWarning: "",
    };

    if (email.trim() === "") {
      result.emailWarning = "Email tidak boleh kosong";
    }

    if (password.trim() === "") {
      result.passwordWarning = "Password tidak boleh kosong";
    }

    return result;
  }
});
