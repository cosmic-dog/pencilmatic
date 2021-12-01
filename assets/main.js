let hasError = false;

function updateField(input) {
    input.setAttribute('value', input.value);
}

function setError(label) {
    label.style.color = 'red';
    label.innerHTML = label.getAttribute('data-invalid');
    hasError = true;
}

function removeError(label) {
    label.style.color = '#444';
    label.innerHTML = label.getAttribute('data-valid');
    hasError = false;
}

function resizeTextarea(teaxtarea) {
    teaxtarea.setAttribute("style", "height:" + (teaxtarea.scrollHeight) + "px;overflow-y:hidden;");
}

function formSubmit(e) {
    let email = document.getElementById('email-field'),
        emailLabel = document.getElementById('email-label'),
        message = document.getElementById('message-field'),
        messageLabel = document.getElementById('message-label');
    
    if (!email.value)
        setError(emailLabel);
    else 
        removeError(emailLabel);

    if (!message.value)
        setError(messageLabel);
    else 
        removeError(messageLabel);

    if (!hasError)
        document.getElementById('cuform').submit();
}