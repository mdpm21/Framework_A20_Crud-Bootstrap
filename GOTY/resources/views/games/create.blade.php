@extends('games.layout')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>GOTY | CRUD</title>
</head>
<body>
    
                        <!-- </form>
                        <div class="container-fluid">
                            <div class="row bg-dark text-white">
                                <div class="col-md-6 my-2" id="about">
                                    <h4 class="fw-bold text-uppercase">About</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae dolore sed porro modi mollitia quaerat? Nam, error fugit sed, maiores illum architecto, officiis voluptate nesciunt voluptatibus aut reprehenderit perspiciatis doloremque!</p>
                                </div>
                                <div class="col-md-6 my-2 text-center link">
                                    <h4 class="fw-bold text-uppercase">Account Links</h4>
                                    <a href="https://www.facebook.com/muhammad.mahardika" target="_blank"><i class="bi bi-facebook fs-3"></i></a>
                                    <a href="https://github.com/mdpm21" target="_blank"><i class="bi bi-github fs-3"></i></a>
                                    <a href="https://www.instagram.com/_mdpm_/" target="_blank"><i class="bi bi-instagram fs-3"></i></a>
                                    <a href="https://api.whatsapp.com/send/?phone=6282251266939&text&type=phone_number&app_absent=0" target="_blank"><i class="bi bi-whatsapp fs-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <footer class="bg-dark text-white text-center" style="padding: 5px;">
                            <p>Created with <i class="bi bi-droplet-half"></i></i> by <u style="color: #fff;">Daffa Mahardika</u></p>
                        </footer> -->
</body>

                        <body>
                            <!-- Navbar -->
                            <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
                                <div class="container">
                                    <a class="navbar-brand" href="index.php">Twenty Once</a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ms-auto">
                                            <li class="nav-item">
                                                <a class="nav-link" aria-current="page" href="/ ">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#about">About</a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                <a class="nav-link" href="logout.php">Logout</a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- Close Navbar -->

                            @section('content')
                            <!-- Container -->
                            <div class="container">
                                <div class="row my-2">
                                    <div class="col-md">
                                        <h3 class="fw-bold text-uppercase"><i class="bi bi-controller"></i>&nbsp;Tambah Data Game</h3>
                                    </div>
                                    <hr>
                                </div>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                            <div class="col-md">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="mb-3">
                                        <strong>Judul:</strong>
                                        <input type="text" name="judul" class="form-control form-control-md w-50" placeholder="Masukkan judul">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="mb-3">
                                        <strong>Tahun:</strong>
                                        <input type="text" name="tahun" class="form-control form-control-md w-50" placeholder="Masukkan tahun">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="mb-3">
                                        <strong>Pengembang:</strong>
                                        <input type="text" name="pengembang" class="form-control form-control-md w-50" placeholder="Masukkan pengembang">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="mb-3">
                                        <strong>Penerbit:</strong>
                                        <input type="text" name="penerbit" class="form-control form-control-md w-50" placeholder="Masukkan penerbit">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="mb-3">
                                        <strong>Platform:</strong>
                                        <input type="text" name="platform" class="form-control form-control-md w-50" placeholder="Masukkan platform">
                                    </div>
                                </div>
                                

                                <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                    <a href="/games" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    
                                </div>
                            </div>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Close Container -->

    <!-- Modal Detail Data -->
    <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="detail" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-uppercase" id="detail">Detail Data Game</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center" id="detail-siswa">
                </div>
            </div>
        </div>
    </div>
    <!-- Close Modal Detail Data -->

    <!-- Footer -->
    <div class="container-fluid">
        <div class="row bg-dark text-white">
            <div class="col-md-6 my-2" id="about">
                <h4 class="fw-bold text-uppercase">About</h4>
                <p>The Game Award for Game of the Year is an award presented annually by The Game Awards to the video game judged to be the best from that calendar year. The process begins with several dozen video game publications and websites, chosen by the Game Awards' advisory committee, to act as the jury each year. Nemo, assumenda? Libero eligendi, recusandae ab rerum eius excepturi inventore, in esse eos distinctio.</p>
            </div>
            <div class="col-md-6 my-2 text-center link">
                <h4 class="fw-bold text-uppercase">Find Us On</h4>
                <a href="https://www.facebook.com/muhammad.mahardika" target="_blank"><i class="bi bi-facebook fs-3"></i></a>
                <a href="https://github.com/mdpm21" target="_blank"><i class="bi bi-github fs-3"></i></a>
                <a href="https://www.instagram.com/_mdpm_/" target="_blank"><i class="bi bi-instagram fs-3"></i></a>
                <a href="https://api.whatsapp.com/send/?phone=6282251266939&text&type=phone_number&app_absent=0" target="_blank"><i class="bi bi-whatsapp fs-3"></i></a>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white text-center" style="padding: 5px;">
        <p>© 2022 <a href="https://instagram.com/_mdpm_/">DaffaMahardika</a>. All rights reserved.</p>
        <!-- <div class="footer-copyright">
                <div class="copyright">© 2022 <a href="https://instagram.com/_mdpm_/">DaffaMahardika</a>. All rights reserved.</div>
            </div> -->
    </footer>
    <!-- Close Footer -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Data Tables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

</body>

@endsection
