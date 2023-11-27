document.getElementById('uploadForm').addEventListener('submit', function(e) {
    e.preventDefault();

    var statusDiv = document.getElementById('uploadStatus');
    statusDiv.innerHTML = 'Cargando...';

    var formData = new FormData(this);

    fetch('subir.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        statusDiv.innerHTML = 'Respuesta del servidor: ' + data;
    })
    .catch(error => {
        statusDiv.innerHTML = 'Error al cargar el archivo: ' + error;
    });
});
