document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("loginForm");
  const usuarioInput = document.getElementById("usuario");
  const passwordInput = document.getElementById("password");
  const usuarioError = document.getElementById("usuarioError");
  const passwordError = document.getElementById("passwordError");

  form.addEventListener("submit", function(event) {
      // Evitar el envío del formulario si hay errores
      event.preventDefault();

      // Limpiar mensajes de error anteriores
      usuarioError.textContent = "";
      passwordError.textContent = "";

      let hasError = false;

      // Validar campo de usuario
      if (usuarioInput.value.trim() === "") {
          usuarioError.textContent = "El usuario es requerido.";
          hasError = true;
      }

      // Validar campo de contraseña
      if (passwordInput.value.trim() === "") {
          passwordError.textContent = "La contraseña es requerida.";
          hasError = true;
      }

      // Si no hay errores, enviar el formulario
      if (!hasError) {
          form.submit();
      }
  });
});
