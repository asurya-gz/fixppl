<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Akun</title>
    <link rel="stylesheet" href="css/generateAkun.css">
</head>

<body>
    <div class="navbar bg-blue-700 text-white p-3">
        <a href="../dashboardOperator.php">
            <button>Kembali</button>
        </a>
    </div>
    <div class="utama h-full w-full pl-[1000px] w-1/2 h-1/2">
        <form>
            <h2 class="text-4xl font-extrabold dark:text-white">Generate Akun Mahasiswa</h2>
            <p class="my-4 text-lg text-gray-500">Inputkan Nama, Nim, Dosen Wali, dan Angkatan. Komponen lainya akan dibuat secara default dan generate random</p>
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nama</label>
                    <input type="text" id="nama" class="... " placeholder="Masukan Nama" required>
                </div>
                <div>
                    <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">nim</label>
                    <input type="number" id="nim" class="... " placeholder="Masukan NIM" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                </div>
                <div>
                    <label for="angkatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">angkatan</label>
                    <select id="angkatan" class="... " required>
                        <!-- Options -->
                    </select>
                </div>
                <div>
                    <label for="dosenwali" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">dosen wali</label>
                    <select id="dosenwali" class="... " required>
                        <!-- Options -->
                    </select>
                </div>
                <div>
                    <label for="folder" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukan File</label>
                    <input type="file" id="folder" class="... " webkitdirectory directory multiple required>
                </div>
            </div>
            <button type="submit" class="... ">Submit</button>
        </form>
    </div>
</body>

</html>