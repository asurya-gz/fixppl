<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skripsi</title>
    <link rel="stylesheet" href="css/skripsiMahasiswa.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../dashboardMahasiswa.php">Kembali</a>
            </li>
        </ul>
    </nav>

    <div class="skripsi-box">
        <h2>Progres Skripsi</h2>

        <div class="mb-3">
            <label for="semesterSkripsiDropdown" class="form-label">Semester</label>
            <select class="form-select" id="semesterSkripsiDropdown">
                <?php
                for ($i = 1; $i <= 14; $i++) {
                    echo "<option value='$i'>Semester $i</option>";
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="statusSkripsiDropdown" class="form-label">Status</label>
            <select class="form-select" id="statusSkripsiDropdown">
                <option value="belum-selesai">Belum Selesai</option>
                <option value="selesai">Selesai</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="nilaiSkripsiInput" class="form-label">Input Nilai Skripsi</label>
            <input type="text" class="form-control" id="nilaiSkripsiInput">
        </div>

        <div class="mb-3">
            <label for="beritaAcaraSkripsiInput" class="form-label">Upload Berita Acara Skripsi (PDF)</label>
            <input type="file" class="form-control" id="beritaAcaraSkripsiInput" accept=".pdf">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>