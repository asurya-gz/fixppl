<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="css/editProfileMahasiswa.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            padding-top: 56px;
            /* Add padding to the top to avoid overlapping with the fixed navbar */
        }

        .nav {
            border-bottom: 1px solid #333;
            width: 100%;
        }

        .edit-profile-box {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
        }

        .form-label {
            margin-bottom: 0.5rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../dashboardMahasiswa.php">Utama</a>
            </li>
            <!-- Add more navigation items as needed -->
        </ul>
    </nav>

    <div class="container">
        <div class="edit-profile-box">
            <h2 class="text-center mb-3">Edit Profile</h2>

            <form action="updateProfile.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="John Doe" required>
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="12345678912345" required>
                </div>

                <div class="mb-3">
                    <label for="angkatan" class="form-label">Angkatan</label>
                    <input type="text" class="form-control" id="angkatan" name="angkatan" value="2020" required>
                </div>

                <div class="mb-3">
                    <label for="dosenWali" class="form-label">Dosen Wali</label>
                    <input type="text" class="form-control" id="dosenWali" name="dosenWali" value="Dr. Jane Smith" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="john.doe@example.com" required>
                </div>

                <div class="mb-3">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <select class="form-select" id="provinsi" name="provinsi" required>
                        <!-- Options for Provinsi dropdown -->
                        <option value="Example Province">Example Province</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="mb-3">
                    <label for="kabupaten" class="form-label">Kabupaten</label>
                    <select class="form-select" id="kabupaten" name="kabupaten" required>
                        <!-- Options for Kabupaten dropdown -->
                        <option value="Example District">Example District</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="mb-3">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <select class="form-select" id="kecamatan" name="kecamatan" required>
                        <!-- Options for Kecamatan dropdown -->
                        <option value="Example Sub-district">Example Sub-district</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required>123 Example Street, City</textarea>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>