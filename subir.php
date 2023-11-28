<?php 
// header('Access-Control-Allow-Origin: *'); // O restringe a tu dominio específico
// header('Access-Control-Allow-Methods: POST');
// header('Access-Control-Allow-Headers: Content-Type');

/*
require_once 'vendor/autoload.php';

use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Blob\Models\CreateBlockBlobOptions;
use Ramsey\Uuid\Uuid;

// Credenciales de Azure
$connectionString = "DefaultEndpointsProtocol=https;AccountName=almacenamientodea;AccountKey=16KOuMsodDL/YHCcwhckZqH9ChW+3MsJl1LiTXq2LcvtTkqVvM/PlSSdA1jToVvMI1Rn39a89tWM+AStkbX0sg==";
$blobClient = BlobRestProxy::createBlobService($connectionString);

// Asegúrate de tener el archivo cargado disponible en $_FILES['file']
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];

    // Generar un identificador único para el archivo
    $uniqueId = Uuid::uuid4()->toString();
    $blobName = $uniqueId . '-' . basename($file['name']);

    // Obtener el contenido del archivo
    $content = fopen($file['tmp_name'], "r");

    // Opciones adicionales, como metadata, pueden ser definidas aquí
    $options = new CreateBlockBlobOptions();

    try {
        // Subir archivo
        $blobClient->createBlockBlob("fotosdea", $blobName, $content, $options);

        // Guardar el identificador en la base de datos (pseudocódigo)
        // database.saveFileRecord($uniqueId, ...);

        echo "Archivo subido con éxito. ID: " . $uniqueId;
    } catch (Exception $e) {
        echo "Error al subir el archivo: " . $e->getMessage();
    }
}
*/

echo "Prueba";

?>