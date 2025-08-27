<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDir = "../uploads/";
    // Verifica e cria o diretório de uploads, se necessário
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    $fileName = preg_replace("/[^a-zA-Z0-9\.\_\-]/", "", basename($_FILES["file"]["name"]));
    $targetFile = $targetDir . $fileName;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Verifica se o arquivo é uma imagem real
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "O arquivo não é uma imagem.";
            $uploadOk = 0;
        }
    }

    // Verifica se o arquivo já existe
    if (file_exists($targetFile)) {
        echo "Desculpe, o arquivo já existe.";
        $uploadOk = 0;
    }

    // Verifica o tamanho do arquivo (limite de 5MB)
    if ($_FILES["file"]["size"] > 5000000) {
        echo "Desculpe, seu arquivo é muito grande.";
        $uploadOk = 0;
    }

    // Permite apenas alguns formatos
    if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
        echo "Apenas arquivos JPG, JPEG, PNG e GIF são permitidos.";
        $uploadOk = 0;
    }

    // Finaliza o upload se todas as verificações passaram
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "O arquivo foi enviado com sucesso.";
            header("Location: index.php");
            exit;
        } else {
            echo "Desculpe, houve um erro ao fazer upload do seu arquivo.";
        }
    }
}
?>
