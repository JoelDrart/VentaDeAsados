//FUNCIONES DEL LOGIN Y REGISTRAR

function openModal() {
    document.getElementById('modal-container').style.display = 'flex';
}

function showModal() {
    var contraseña = document.getElementById('register-password').value;
    var confirmarContraseña = document.getElementById('confirm-password').value;

    if (contraseña === confirmarContraseña) {
        document.getElementById('modal-container').style.display = 'flex';
    } else {
        alert("Las contraseñas no coinciden. Por favor, inténtalo de nuevo.");
    }
}

function closeModal() {
    document.getElementById('modal-container').style.display = 'none';
}

function toggleForms() {
    document.getElementById('login-container').style.display = 'none';
    document.getElementById('register-container').style.display = 'block';
}

function VolverLogin() {
    closeModal();
    document.getElementById('login-container').style.display = 'block';
    document.getElementById('register-container').style.display = 'none';
}

function acceptAndReturn() {
    closeModal();
    document.getElementById('login-container').style.display = 'block';
    document.getElementById('register-container').style.display = 'none';
}

// Mostrar mensaje de error en la ventana modal
function showError(errorMessage) {
    document.getElementById('error-message').innerText = errorMessage;
    openModal();
}

// Función para mostrar ventana modal de éxito
function showSuccess(successMessage) {
    alert(successMessage);
}


