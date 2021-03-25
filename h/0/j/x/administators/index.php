<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HALAMAN ADMIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <!-- Custom CSS -->
    <link href="assets/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['level'] == "") {
        header("location:../../../../../index.php?pesan=gagal");
    }

    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <div class="d-flex justify-content-between ">
                <!-- icon pembuka sidebar -->
                <button href="#menu-toggle" class="btn btn-default text-light" id="menu-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-layout-text-sidebar-reverse" viewBox="0 0 16 16">
                        <path d="M12.5 3a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5zm0 3a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5zm.5 3.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z" />
                        <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2zM4 1v14H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h2zm1 0h9a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5V1z" />
                    </svg>
                </button>

                <!-- penyanbutan nama yang masuk melalui login setelah dicek oleh session -->
                <div class="nav-link text-light text-uppercase">
                    Halo

                    <!--nama yang login -->
                    <b>
                        <?php echo $_SESSION['username']; ?>
                    </b>

                    Anda
                    <!-- login sebagai siapa nama tersebut -->
                    <b>
                        <?php echo $_SESSION['level']; ?>
                    </b>
                </div>
                <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="nav-item ">

                    </div>

                </div> -->
                <div class="">
                    <!-- <a class="btn btn-outline-light" href="../../../../../include/logout.php">Log Out</a> -->
                </div>
            </div>
        </div>
    </nav>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                </li>
                <li>
                    <a href="/h/0/j/x/administators/">Dashboard</a>
                </li>
                <li>
                    <a href="#">Input Data</a>

                </li>

                <li>
                    <a class="" href="#" id="daftardata" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="daftardata">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Surat Menyurat</a>
                </li>
                <li>
                    <a href="#">Laporan</a>
                </li>
                <li>
                    <a href="#">Panduan</a>
                </li>
                <a class="btn btn-outline-danger w-100" href="../../../../../include/logout.php">Log Out</a>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <div class="container">

                <!-- membuat barisan kesamping secara responsive -->
                <div class="d-flex flex-wrap bd-highlight">

                    <!-- kotak menu-menu yang tersedia di halaman dashboard  -->
                    <a class="btn me-3 bd-highlight border border-3 bg-success bg-gradient" href="#">
                        <div class="row align-items-center">
                            <div class="col text-white">
                                <p class="fs-3 pt-1 fw-bold">0</p>
                                <p class="fs-5 fw-bold">PENDUDUK</p>
                                <p class="fs-6">Selengkapnya>></p>
                            </div>
                            <div class="pe-4 col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a class="btn  me-3 bd-highlight border border-3 bg-danger bg-gradient" href="#">
                        <div class="row align-items-center">
                            <div class="col text-white">
                                <p class="fs-3 pt-1 fw-bold">0</p>
                                <p class="fs-5 fw-bold">KELUARGA</p>
                                <p class="fs-6">Selengkapnya>></p>
                            </div>
                            <div class="pe-4 col">
                                <object data="/assets/img/team.svg" width="60" height="60" type="image/svg+xml" fill="currentColor" viewBox="0 0 16 16"></object>
                            </div>
                        </div>
                    </a>
                    <a class="btn me-3 bd-highlight border border-3 bg-warning bg-gradient" href="#">
                        <div class="row align-items-center">
                            <div class="col text-white">
                                <p class="fs-3 pt-1 fw-bold">0</p>
                                <p class="fs-5 fw-bold">HAK AKSES</p>
                                <p class="fs-6">Selengkapnya>></p>
                            </div>
                            <div class="pe-4 col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg>
                            </div>
                        </div>
                    </a>
                    <a class="btn me-3 bd-highlight border border-3 bg-warning bg-gradient" href="#">
                        <div class="row align-items-center">
                            <div class="col text-white">
                                <p class="fs-3 pt-1 fw-bold">0</p>
                                <p class="fs-5 fw-bold">HAK AKSES</p>
                                <p class="fs-6">Selengkapnya>></p>
                            </div>
                            <div class="pe-4 col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="assets/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> -->


    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>

</html>