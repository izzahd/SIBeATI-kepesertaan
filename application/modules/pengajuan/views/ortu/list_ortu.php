<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("berita/_partials/head.php") ?>
    <style type="text/css">
        .cf-formwrap textarea[readonly] {background-color:purple !important;}
        .img-rounded {
            width: 367px;
            height: 521px;
        }
    </style>
</head>

<body id="page-top">

	<?php $this->load->view("berita/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("berita/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">
                <div class="col-md-12 col-lg-12">
                        <h1><p style="color:#092147">Pengajuan</p></h1>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="<?php echo site_url('pengajuan/diri') ?>" class="btn btn-primary <?php echo $this->uri->segment(2) == 'diri' ? 'active': '' ?>" role="button">Data Pribadi</a>
                    <a href="<?php echo site_url('pengajuan/ortu') ?>" class="btn btn-primary <?php echo $this->uri->segment(2) == 'ortu' ? 'active': '' ?>" role="button">Data Orang Tua</a>
                    <a href="<?php echo site_url('pengajuan/rumah') ?>" class="btn btn-primary <?php echo $this->uri->segment(2) == 'rumah' ? 'active': '' ?>" role="button">Data Tempat Tinggal</a>
                    <a href="<?php echo site_url('pengajuan/cerita') ?>" class="btn btn-primary <?php echo $this->uri->segment(2) == 'cerita' ? 'active': '' ?>" role="button">Cerita Anda</a>
				</div>
				<!-- DataTables -->
                <!-- Form -->
                <div class="card mb-3">
                    <div class="card-body">
                        <form>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">No. Telepon Orang Tua*</label>
                                    <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="<?php echo $biodata->telepon_ortu?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan Orang Tua*</label>
                                    <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="<?php echo $biodata->pekerjaan_ortu?>" readonly>
                                    <!-- <input type="password" class="form-control" id="inputPassword" placeholder="Password"> -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Penghasilan Orang Tua*</label>
                                    <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="<?php echo $biodata->penghasilan_ortu?>" readonly>
                                    <!-- <input type="password" class="form-control" id="inputPassword" placeholder="Password"> -->
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4">Catatan :</label>                                
                                <br>
                                <label for="inputPassword5">Data berisi (NA) jika orang tua sudah tidak ada</label>
                                <br>
                            </div>
                            <!-- <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                                </div>
                                <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div> -->
                        <!-- <div class="form-group">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                            </div>
                        </div> -->
                        </form>
                    </div>
                </div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			
		</div>
		<!-- /.content-wrapper -->
        
	</div>
	<!-- /#wrapper -->
    <?php $this->load->view("berita/_partials/footer.php") ?>

	<?php $this->load->view("berita/_partials/scrolltop.php") ?>
	<?php $this->load->view("berita/_partials/modal.php") ?>

	<?php $this->load->view("berita/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
