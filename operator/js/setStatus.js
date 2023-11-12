document.getElementById('statusForm').addEventListener('input', function() {
    var submitButton = document.querySelector('button[type="submit"]');
    submitButton.disabled = !document.getElementById('status').value;
});