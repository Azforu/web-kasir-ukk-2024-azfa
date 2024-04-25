 <!--main content start-->
 <section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                <h3>Data Kategori</h3>
                <br/>
                <?php if(isset($_GET['success'])): ?>
                    <div class="alert alert-success">
                        <p>Tambah Data Berhasil !</p>
                    </div>
                <?php endif; ?>
                <?php if(isset($_GET['success-edit'])): ?>
                    <div class="alert alert-success">
                        <p>Update Data Berhasil !</p>
                    </div>
                <?php endif; ?>
                <?php if(isset($_GET['remove'])): ?>
                    <div class="alert alert-danger">
                        <p>Hapus Data Berhasil !</p>
                    </div>
                <?php endif; ?>
                
                <?php 
                    // Handle form submission for editing or adding data
                    if(isset($_GET['id'])):
                        $sql = "SELECT * FROM membertoko WHERE id_pelanggan = ?";
                        $stmt = $config->prepare($sql);
                        $stmt->execute(array($_GET['id_pelanggan']));
                        $edit = $stmt->fetch();
                ?>
                        <form method="POST" action="fungsi/edit/edit.php?kategori=edit">
                            <table>
                                <tr>
                                    <td style="width:15pc;">
                                        <input type="text" class="form-control" value="<?= htmlspecialchars($edit['nama']); ?>" required name="kategori" placeholder="Masukan Kategori Barang Baru">
                                        <input type="hidden" name="id" value="<?= htmlspecialchars($edit['id_pelanggan']); ?>">
                                    </td>
                                    <td style="padding-left:10px;">
                                        <button id="tombol-simpan" class="btn btn-primary"><i class="fa fa-edit"></i> Ubah Data</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                <?php else: ?>
                        <form method="POST" action="fungsi/tambah/tambah.php?kategori=tambah">
                            <table>
                                <tr>
                                    <td style="width:15pc;">
                                        <input type="text" class="form-control" required name="kategori" placeholder="Masukan Kategori Barang Baru">
                                    </td>
                                    <td style="padding-left:10px;">
                                        <button id="tombol-simpan" class="btn btn-primary"><i class="fa fa-plus"></i> Insert Data</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                <?php endif; ?>
                <br/>
                <table class="table table-bordered" id="example1">
                    <thead>
                        <tr style="background:#DFF0D8;color:#333;">
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        // Fetch and display data from the database
                        $hasil = $lihat->membertoko();
                        $no=1;
                        foreach($hasil as $isi):
                    ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= htmlspecialchars($isi['nama']); ?></td>
                                <td><?= htmlspecialchars($isi['alamat']); ?></td>
                                <td><?= htmlspecialchars($isi['no_tlp']); ?></td>
                                <td>
                                    <a href="index.php?page=kategori&uid=<?= $isi['id_pelanggan']; ?>"><button class="btn btn-warning">Edit</button></a>
                                    <a href="fungsi/hapus/hapus.php?kategori=hapus&id=<?= $isi['id_pelanggan']; ?>" onclick="return confirm('Hapus Data Kategori ?');"><button class="btn btn-danger">Hapus</button></a>
                                </td>
                            </tr>
                    <?php 
                        $no++; 
                        endforeach; 
                    ?>
                    </tbody>
                </table>
                <div class="clearfix" style="padding-top:16%;"></div>
            </div>
        </div>
    </section>
</section>
	
