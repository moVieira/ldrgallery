<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lana Del Rey Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/styles.css">
    

</head>
<body>
    <!-- Logo -->
    <img src="../static/imglana/Lana-Del-Rey-Logo.png" alt="logoldr" class="logo">

    <!-- Conteúdo principal -->
    <div class="container py-1">
        <h1 class="uniquifier">Lana Del Rey Gallery</h1>

        <div class="row g-3" id="gallery">
            <!-- Botão de Upload -->
            

            <!-- Item 1 -->
            <div class="col-6 col-md-4 col-lg-3">
                <a href="page1.php">
                    <img src="../static/imglana/lana4.webp" alt="LDR1" class="img-fluid rounded shadow zoomable" data-bs-toggle="modal" data-bs-target="#imageModal">
                </a>
                <p class="titulo1">ALL PHOTOS</p>
            </div>
            
            <!-- Item 2 -->
            <div class="col-6 col-md-4 col-lg-3">
                <a href="page2.html">
                    <img src="../static/lanaskims2023/skims1.webp" alt="LDR2" class="img-fluid rounded shadow zoomable" data-bs-toggle="modal" data-bs-target="#imageModal">
                </a>
                <p class="titulo2">SKIMS 2024</p>
            </div>
            
            <!-- Item 3 -->
            <div class="col-6 col-md-4 col-lg-3">
                <a href="page3.html">
                    <img src="../static/instyle/instyle1.jpg" alt="LDR3" class="img-fluid rounded shadow zoomable" data-bs-toggle="modal" data-bs-target="#imageModal">
                </a>
                <p class="titulo3">InStyle Magazine</p>
            </div>
        
            <!-- Item 4 -->
            <div class="col-6 col-md-4 col-lg-3">
                <a href="page4.html">
                    <img src="../static/dyk/dyk1.jpg" alt="LDR4" class="img-fluid rounded shadow zoomable" data-bs-toggle="modal" data-bs-target="#imageModal">
                </a>
                <p class="titulo4">DYKTTATUOB</p>
            </div>
        </div>

    <br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Adiciona funcionalidade ao modal
    const zoomableImages = document.querySelectorAll('.zoomable');
    const modalImage = document.getElementById('modalImage');

    zoomableImages.forEach(image => {
        image.addEventListener('click', function () {
            // Atualiza a imagem no modal
            modalImage.src = this.src;
            modalImage.alt = this.alt;
        });
    });

</script>

    <!-- Div para o OpenSeadragon -->
    <div id="viewer" style="width: 800px; height: 600px;"></div>
</body>
</html>
