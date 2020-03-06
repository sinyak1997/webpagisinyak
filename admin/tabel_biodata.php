<?php
    include '../koneksi/koneksi.php';
    include 'header.php';
?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Table Basic</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Table Basic</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic Table</h4>
                                <h6 class="card-subtitle">Add class <code>.table</code></h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Photo</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Tempat Lahir</th>
                                                <th>No Hp</th>
                                                <th>Hobi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            $nampildata=mysqli_query($koneksi, "SELECT * FROM form_biodata")or die(mysqli_error($nampildata));

                                            if(mysqli_num_rows($nampildata)==0){
                                                echo'<tr>data kosong</tr>';
                                            }else{
                                                $no=1;
                                                while ($data=mysqli_fetch_assoc($nampildata)) {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo"<img width='50px' src='../upload/".$data['photo']."'>";?></td>
                                                <td><?php echo $data['nama']?></td>
                                                <td><?php echo $data['email']?></td>
                                                <td><?php echo $data['jenis_kelamin']?></td>
                                                <td><?php echo $data['alamat']?></td>
                                                <td><?php echo $data['tanggal_lahir']?></td>
                                                <td><?php echo $data['tempat_lahir']?></td>
                                                <td><?php echo $data['no_hp']?></td>
                                                <td><?php echo $data['hobbi']?></td>
                                                <td><a href="../proses/proses_hapus_biodata.php?id_biodata=<?php echo $data['id_biodata']?>" type="submit" class="btn btn-danger">Hapus </a></td>
                                            </tr>
                                        </tbody>
                                        <?php 
                                            $no++;
                                                }
                                            
                                                }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 Design Template by sinyak
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- jQuery peity -->
    <script src="assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="assets/node_modules/peity/jquery.peity.init.js"></script>
</body>

</html>