<?php
include "../inc/header.php";
include "../inc/sidebar.php"
?>
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tambah Arsip</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tambah Arsip</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Tambah Arsip

                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <form>
                                        <!-- nama -->
                                        <div class="form-group">
                                            <label for="exampleInputNama">Waktu Upload</label>
                                            <input type="date" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" autofocus>
                                        </div>

                                        <!-- email -->
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Arsip</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>

                                        <!-- kantor -->
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="formFile" class="form-label">Upload Arsip</label>
                                            <input class="form-control-file" type="file" id="formFile">
                                          </div>
                                       
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                        <a class="btn  " href="Arsip.php" role="button">Kembali </a>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../dist/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../dist/assets/demo/chart-area-demo.js"></script>
        <script src="../dist/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../dist/assets/demo/datatables-demo.js"></script>
    </body>
</html>
