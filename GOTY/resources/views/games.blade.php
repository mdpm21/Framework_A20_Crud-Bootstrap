
<!DOCTYPE html>
<html lang="en">

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

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="text-center fw-bold text-uppercase">Data Game Of The Year</h3>
                <hr>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <!-- <a href="addData.php" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data</a> -->
                <a href="{{ route('games.create') }}" class="btn btn-primary"><i class="bi bi-controller"></i>&nbsp;Tambah Data</a>
                <a href="ekspor/export.php" target="_blank" class="btn btn-success ms-1"><i class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;Ekspor ke Excel</a>
                
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md">
                <table id="data" class="table table-striped table-responsive table-hover text-center" style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Tahun</th>
                            <th>Pengembang</th>
                            <th>Penerbit</th>
                            <th>Platform</th>
                            <!-- <th>Platform</th> -->
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    

                            @foreach ($games as $game)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $game->judul }}</td>
                                <td>{{ $game->tahun }}</td>
                                <td>{{ $game->pengembang }}</td>
                                <td>{{ $game->penerbit }}</td>
                                <td>{{ $game->platform }}</td>
                                <td>
                                    <form action="{{ route('games.destroy',$game->id) }}" method="POST">

                                    <!-- <a href="ekspor/detail.php" class="btn btn-success btn-sm text-white detail" style="font-weight: 600;"><i class="bi bi-info-circle-fill"></i>&nbsp;Detail</a> | -->

                                    <a href="{{ route('games.edit',$game->id) }}" class="btn btn-warning btn-sm" style="font-weight: 600;"><i class="bi bi-pencil-square"></i>&nbsp;Ubah</a> |

                                    

                                        @csrf
                                        @method('DELETE')
                                        <!-- <a href="" class="btn btn-danger btn-sm" style="font-weight: 600;" ></i>&nbsp;Hapus</a> -->
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data {{ $game->judul }} ?');">Delete</button>

                                        
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            
                    </tbody>
                </table>
                @if ($games->hasPages()) 
                <div class="card-footer">
                        {{ $games->links() }}
                    </div>
                @endif
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
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
        <!-- <p>Created with <i class="bi bi-droplet-half"></i></i> by <u style="color: #fff;">Daffa Mahardika</u></p> -->
        <div class="footer-copyright">
                <div class="copyright">© 2022 <a href="https://instagram.com/_mdpm_/">DaffaMahardika</a>. All rights reserved.</div>
            </div>
    </footer>
    <!-- Close Footer -->

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Data Tables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

    <!-- <script>
        $(document).ready(function() {
            // Fungsi Table
            $('#data').DataTable();
            // Fungsi Table 

            // Fungsi Detail
            $('.detail').click(function() {
                var dataGames = $(this).attr("data-id");
                $.ajax({
                    url: "detail.php",
                    method: "post",
                    data: {
                        dataGames,
                        dataGames
                    },
                    success: function(data) {
                        $('#detail-siswa').html(data);
                        $('#detail').modal("show");
                    }
                });
            });
            // Fungsi Detail
        });
    </script> -->
</body>

</html>