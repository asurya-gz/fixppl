<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar fixed-top bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img height="50px" width="90px" src="https://th.bing.com/th/id/OIP.mnHDFwmwo2d7cBHd4RLzmwHaFJ?w=249&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Logo">
                Selamat Datang Di Sistem Informasi Akademik KL6
            </a>
        </div>
    </nav>
    <div class="container mt-6">
        <div class="row justify-content-center">
            <div class="card shadow">
                <div class="card-body">
                    <form id="loginForm">
                        <div class="text-center mb-4">
                            <h4 class="ttext-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">Sign In</h4>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailWarning" class="text-danger"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                            <div id="passwordWarning" class="text-danger"></div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
</body>

</html>