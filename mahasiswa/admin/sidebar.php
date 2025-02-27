<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
</head>

<body>


    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Politeknik XYZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                </ul>

                <div class="d-flex">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>

                    </form>

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-disabled="true"><i class="fas fa-envelope-square mr-3"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-disabled="true"><i class="fas fa-envelope-square mr-3"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-disabled="true"><i class="fas fa-bell-slash mr-3"></i></a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" aria-disabled="true"> <i class="fas fa-sign-out-alt mr-3"></i>
                            </a>
                        </li>


                    </ul>

                </div>
            </div>
        </div>
    </nav>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-dark pr-3 pt-4" style="height: 600px;">
                <ul class="nav flex-column ml-3 mb-5">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href=""><i class="fas fa-tachometer-alt mr-2"> </i> Dashboard</a>
                        <hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href=""><i class="fas fa-user-graduate mr-2"></i> Daftar Mahasiswa</a>
                        <hr class="bg-secondary"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href=""><i class="fas fa-users mr-2"></i> Daftar Pegawai</a>
                        <hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href=""><i class="far fa-calendar-alt mr-2"></i> Jadwal Kuliah</a>
                        <hr class="bg-secondary">
                    </li>
                </ul>
            </div>