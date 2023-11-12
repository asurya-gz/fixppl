<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Mahasiswa</title>
    <link rel="stylesheet" href="css/setStatus.css">

</head>

<body>
    <div class="container">
        <a href="../dashboardOperator.php" class="back-button">Kembali</a>
        <h2>Status Mahasiswa</h2>
        <form id="statusForm">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" disabled>
            </div>
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" disabled>
            </div>
            <div class="form-group">
                <label for="dosen">Dosen Wali:</label>
                <input type="text" id="dosen" name="dosen" disabled>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="cuti">Cuti</option>
                    <option value="do">DO</option>
                    <option value="mangkir">Mangkir</option>
                    <option value="mati">Mati</option>
                </select>
            </div>
            <button type="submit" disabled>Submit</button>
        </form>
    </div>

    <script src="js/setStatus.js"></script>
</body>

</html>