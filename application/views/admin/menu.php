<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap-datetimepicker.min.css' ?>">
<link href="<?php echo base_url() . 'assets/dist/css/bootstrap-select.css' ?>" rel="stylesheet">



<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url() . 'welcome' ?>">TB JAYA BERKAH</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php $h = $this->session->userdata('akses'); ?>
                <?php $u = $this->session->userdata('user'); ?>
                <?php if ($h == '1') { ?>
                    <!--dropdown-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Transaksi"><span class="fa fa-shopping-cart" aria-hidden="true"></span> Transaksi</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url() . 'admin/penjualan' ?>"><span class="fa fa-shopping-bag" aria-hidden="true"></span> Penjualan (Eceran)</a></li>
                            <li><a href="<?php echo base_url() . 'admin/penjualan_grosir' ?>"><span class="fa fa-cubes" aria-hidden="true"></span> Penjualan (Grosir)</a></li>
                        </ul>
                    </li>
                    <!--ending dropdown-->

                    <li>
                        <a href="<?php echo base_url() . 'admin/grafik' ?>"><span class="fa fa-line-chart"></span> Grafik</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() . 'admin/laporan' ?>"><span class="fa fa-file"></span> Laporan</a>
                    </li>
                    <li>

                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="USER"><span class="fa fa-user" aria-hidden="true"></span>(<small class="fa fa-circle text-success"> Online</small>)<i></i> <?php echo $this->session->userdata('nama'); ?></a>
                        <ul class="dropdown-menu">
                            <li style="text-align:center;"><small> Tanggal : <?php echo date('d-m-Y') ?></small></li>
                            <li>
                                <a href="<?php echo base_url() . 'administrator/logout' ?>"><span class="fa fa-sign-out"></span> Logout</a> </li>

                    </li>


                    <li>

                    </li>
                    <li>

                    </li>
                <?php } ?>
                <?php if ($h == '2') { ?>
                    <!--dropdown-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Transaksi"><span class="fa fa-shopping-cart" aria-hidden="true"></span> Transaksi</a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url() . 'admin/penjualan' ?>"><span class="fa fa-shopping-bag" aria-hidden="true"></span> Penjualan (Eceran)</a></li>
                            <li><a href="<?php echo base_url() . 'admin/penjualan_grosir' ?>"><span class="fa fa-cubes" aria-hidden="true"></span> Penjualan (Grosir)</a></li>
                        </ul>
                    </li>
                    <!--ending dropdown-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="USER"><span class="fa fa-user" aria-hidden="true"></span>(<small class="fa fa-circle text-success"> Online</small>)<i></i> <?php echo $this->session->userdata('nama'); ?></a>
                        <ul class="dropdown-menu">
                            <li style="text-align:center;"><small> Tanggal : <?php echo date('d-m-Y') ?></small></li>
                            <li>
                                <a href="<?php echo base_url() . 'administrator/logout' ?>"><span class="fa fa-sign-out"></span> Logout</a> </li>

                    </li>
                <?php } ?>
                <li>
                    <?php if ($h == '3') { ?>
                        <!--dropdown-->
                        <tr>

                            <a class="" href="#lap_beli_pertanggal" data-toggle="modal"><span class="fa fa-print"></span> Cetak Laporan Pembelian PerTanggal</a>
                            </td>
                        </tr>
                        <!--ending dropdown-->
                <li>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="USER"><span class="fa fa-user" aria-hidden="true"></span>(<small class="fa fa-circle text-success"> Online</small>)<i></i> <?php echo $this->session->userdata('nama'); ?></a>
                    <ul class="dropdown-menu">
                        <li style="text-align:center;"><small> Tanggal : <?php echo date('d-m-Y') ?></small></li>
                        <li>
                            <a href="<?php echo base_url() . 'administrator/logout' ?>"><span class="fa fa-sign-out"></span> Logout</a> </li>

                </li>
            <?php } ?>

            <?php if ($h == '4') { ?>
                <!--dropdown-->
                <li>
                    <a href="<?php echo base_url() . 'admin/grafik' ?>"><span class="fa fa-line-chart"></span> Grafik</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="USER"><span class="fa fa-user" aria-hidden="true"></span>(<small class="fa fa-circle text-success"> Online</small>)<i></i> <?php echo $this->session->userdata('nama'); ?></a>
                    <ul class="dropdown-menu">
                        <li style="text-align:center;"><small> Tanggal : <?php echo date('d-m-Y') ?></small></li>
                        <li>
                            <a href="<?php echo base_url() . 'administrator/logout' ?>"><span class="fa fa-sign-out"></span> Logout</a> </li>

                </li>
                <!--ending dropdown-->
                <li>
                </li>
            <?php } ?>
            <li>

            </li>
            </li>
            </ul>



        </div>


        <!-- /.navbar-collapse -->
    </div>

    <!-- /.container -->
</nav>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap-datetimepicker.min.css' ?>">
<link href="<?php echo base_url() . 'assets/dist/css/bootstrap-select.css' ?>" rel="stylesheet">

<!-- ============ MODAL ADD =============== -->
<div class="modal fade" id="lap_beli_pertanggal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Pilih Tanggal</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url() . 'admin/laporan/lap_pembelian_pertanggal' ?>" target="_blank">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3">Tanggal</label>
                        <div class="col-xs-9">
                            <div class="input-group date" id="datepicker2" style="width:300px;">
                                <input type='text' name="tgl" class="form-control" value="" placeholder="Tanggal..." required />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>


                </div>
                <script src="<?php echo base_url() . 'assets/js/jquery.js' ?>"></script>
                <!-- Bootstrap Core JavaScript -->
                <script src="<?php echo base_url() . 'assets/dist/js/bootstrap-select.min.js' ?>"></script>
                <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js' ?>"></script>
                <!-- <script src="<?php echo base_url() . 'assets/js/dataTables.bootstrap.min.js' ?>"></script> -->
                <script src="<?php echo base_url() . 'assets/js/jquery.dataTables.min.js' ?>"></script>
                <script src="<?php echo base_url() . 'assets/js/moment.js' ?>"></script>
                <script src="<?php echo base_url() . 'assets/js/bootstrap-datetimepicker.min.js' ?>"></script>
                <script type="text/javascript">
                    $(function() {
                        $('#datepicker2').datetimepicker({
                            format: 'YYYY-MM-DD',
                        });
                    });
                    </script>
                <script type="text/javascript">
                 
                    $(document).ready(function() {
                        var table=$('#mydata').DataTable({
                            serverSide:true,
                            processing:true,
                            order:[],
                            ajax:{
                                url:"<?php echo base_url('/admin/barang/get_data_barang')?>",
                                type:"POST"
                            },
                            columnDefs: [
                            { 
                                targets: [ 0 ], 
                                orderable: false, 
                            },
                            ],
                            columns: [
                                {title:"No"},
                                { title: "Kode Barang" },
                                { title: "Kode Barcode" },
                                { title: "Nama Barang" },
                                { title: "Satuan" },
                                { title: "Harga Pokok" },
                                { title: "Harga (Eceran)" },
                                { title: "Harga (Grosir)" },
                                { title: "Stok" },
                                { title: "Min Stok" },
                                { title: "Kategori" },
                                {title : "Aksi",defaultContent :"<button class='btn btn-xs btn-warning btn-edit' data-toggle='modal' title='Edit'><span class='fa fa-edit'></span> Edit</button><a class='btn btn-xs btn-danger btn-delete' data-toggle='modal' title='Hapus'><span class='fa fa-close'></span> Hapus</a>"}
                            ],
                        });

                        $('#mydata tbody').on('click', '.btn-edit', function () {
                            var row = $(this).closest('tr');
                            
                            var data = table.row( row ).data();
                            $('input[name="kobar"]').val(data[1]);
                            $('input[name="kode_barcode"]').val(data[2]);
                            $('input[name="nabar"]').val(data[3]);
                            $('select[name="kategori"]').val(data[10]).change();
                            $('select[name="satuan"]').val(data[4]);
                            $('input[name="harpok"]').val(data[5]);
                            $('input[name="harjul"]').val(data[6]);
                            $('input[name="harjul_grosir"]').val(data[7]);
                            $('input[name="stok"]').val(data[8]);
                            $('input[name="min_stok"]').val(data[9]);
                            $('#modalEditPelanggan').modal('show')
                            console.log(data[5]);
                            console.log(data);
                        });

                        $('#mydata tbody').on('click', '.btn-delete', function () {
                            var row = $(this).closest('tr');
                            
                            var data = table.row( row ).data();
                            $('input[name="kode"]').val(data[1]);
                          
                            $('#modalHapusPelanggan').modal('show')
                        });
                    });
                    
                </script>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info"><span class="fa fa-print"></span> Cetak</button>
                </div>
            </form>

        </div>
    </div>
</div>