<section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12 main-chart">
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
							
                            <div class="col-sm-5">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h4><i class="fa fa-user"></i> Masukan Data Pengguna </h4>
									</div>
									<div class="panel-body">
										<div class="box-content">
											<form class="form-horizontal" method="POST" action="fungsi/tambah/tambah.php?profil=tambah" enctype="multipart/form-data">
												<fieldset>
													<div class="control-group">
														<label class="control-label" for="typeahead">Nama </label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-user"></i>
														  </div>
															<input type="text" class="form-control" style="border-radius:0px;" name="nama" data-items="4" value="<?php echo $hasil['nm_member']; ?>" required="required"/>
														</div>
													</div>
													<div class="control-group">
														<label class="control-label" for="typeahead">Email </label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-envelope-square"></i>
														  </div>
															<input type="email" class="form-control" style="border-radius:0px;" name="email" value="<?php echo $hasil['email']; ?>" required="required"/>
														</div>
													</div>
													<div class="control-group">
														<label class="control-label" for="typeahead">Telepon </label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-phone"></i>
														  </div>
															<input type="text" class="form-control" style="border-radius:0px;" name="tlp" value="<?php echo $hasil['telepon']; ?>" required="required"/>
														</div>
													</div>
													<div class="control-group">
														<label class="control-label" for="typeahead">NIK ( KTP ) </label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-user"></i>
														  </div>
															<input type="text" class="form-control" style="border-radius:0px;" name="nik" value="<?php echo $hasil['NIK']; ?>" required="required"/>
														</div>
													</div>
													<div class="control-group">
														<label class="control-label" for="typeahead">Alamat </label>
														<div class="controls">
															<textarea  name="alamat" rows="3" class="form-control" style="border-radius:0px;" required="required"><?php echo $hasil['alamat_member']; ?></textarea>
														</div>
													</div>
													<br>
													<div class="form-actions pull-right">
														<input type="hidden" name="id" value="<?php echo $hasil['id_member']; ?>">
														<button class="btn btn-primary" name="btn" value="Tambah" style="border-radius:0px;"><i class="fa fa-pencil"></i>Tambah Profil</button>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
                            <div class="col-sm-4">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h4><i class="fa fa-lock"></i> Tambah Akun </h4>
									</div>
									<div class="panel-body">
										<div class="box-content">
											 <form class="form-horizontal" method="POST" action="fungsi/tambah/tambah.php?pass=tambah">
												
												<fieldset>
													<div class="control-group">
														<label class="control-label" for="typeahead">Username </label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-user"></i>
														  </div>
															<input type="text" class="form-control" style="border-radius:0px;" name="user" data-items="4" value="<?php echo $hasil['user'];?>"/>
														</div>
													</div>
													<div class="control-group">
														<label class="control-label" for="typeahead">Password Baru</label>
														<div class="input-group">
														  <div class="input-group-addon">
															<i class="fa fa-lock"></i>
														  </div>
															<input type="password" class="form-control" placeholder="Enter Password" style="border-radius:0px;" id="pass" name="pass" data-items="4" value="" required="required"/>
														</div>
													</div>
													<br>
													<div class="pull-right">															
														<input type="text" class="form-control" style="border-radius:0px;" name="id" value="" required="required"/>
														<button type="submit" class="btn btn-primary" value="Tambah" style="border-radius:0px;" name="proses"><i class="fa fa-pencil"></i>Simpan</button>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix" style="padding-top:5%;"></div>
				  </div>
              </div>
          </section>
      </section>
	
