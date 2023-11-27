<!DOCTYPE html>
<html>
<head>
    <title>Carga de Archivos a Azure Storage</title>
</head>
<body>
    <form id="uploadForm" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <button type="submit">Subir Archivo</button>
    </form>

    <div id="uploadStatus"></div>

    <script src="upload.js"></script>
</body>
</html>
