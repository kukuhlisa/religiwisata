<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="email-form.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
    <!-- Bagian Hubungi Kami -->
    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <p class="text-primary fs-5">Hubungi Kami</p>
                <h1 class="fw-bold mb-4">Ingin bertanya lebih lanjut? Jangan ragu untuk hubungi Kami</h1>
            </div>
        </div>
    </header>

    <div class="row">
    <!-- Formulir Kontak -->
    <div class="col-md-6 mb-4">
        <form action="send_email.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail Anda</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="e-mail Anda" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Tinggalkan Pesan Anda Di Sini</label>
                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Tinggalkan Pesan Anda Di Sini" required></textarea>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Kirim</button>
            </div>
        </form>
    </div>
</div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>