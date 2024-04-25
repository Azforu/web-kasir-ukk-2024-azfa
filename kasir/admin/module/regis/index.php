<h3>Tambah Pengguna Aplikasi</h3>
						<br>
						<?php if(isset($_GET['success'])){?>
						<div class="alert alert-success">
							<p>Edit Data Berhasil !</p>
						</div>
						<?php }?>
						<?php if(isset($_GET['remove'])){?>
						<div class="alert alert-danger">
							<p>Hapus Data Berhasil !</p>
						</div>
                        <?php }?>
                        <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                <h3>Registration Form</h3>
                <div class="col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4><i class="fa fa-user-plus"></i> Register</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="fungsi/tambah/tambah.php?pass=tambah" enctype="multipart/form-data">
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="typeahead">Full Name</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <input type="text" class="form-control" style="border-radius:0px;" name="user" required="required"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="typeahead">Password</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                            <input type="password" class="form-control" style="border-radius:0px;" name="pass" required="required"/>
                                        </div>
                                    </div>
                                    <!-- Add more fields here as needed for your registration form -->
                                    <br>
                                    <div class="form-actions pull-right">
                                        <button class="btn btn-primary" name="pass" value="pass" style="border-radius:0px;"><i class="fa fa-user-plus"></i> Register</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>