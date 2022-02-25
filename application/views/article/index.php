        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <center>
                        <?= validation_errors(); ?>
                    </center>
                </div>
            <?php endif; ?>

            <?php echo $this->session->flashdata('msg');
            unset($_SESSION['msg']); ?>

            <div class="row">
                <div class="col-lg">

                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newArticleModal">Add New Article</a>

                    <table class=" table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Artikel</th>
                                <th scope="col">Jenis Artikel</th>
                                <th scope="col">Kategori Artikel</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Tanggal Terbit</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($artikel as $a) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $a['judul']; ?></td>
                                    <td><?= $a['jenis_artikel']; ?></td>
                                    <td><?= $a['kategori']; ?></td>
                                    <td><?= $a['penulis']; ?></td>
                                    <td><?= date('d F Y', $a['tanggal']); ?></td>
                                    <td>
                                        <a href="" class="badge bg-info text-dark" style="font-size: 15px;" data-toggle="modal" data-target="#editArticleModal<?= $a['id']; ?>">Edit</a>
                                        <a href="<?= base_url() ?>article/hapus_artikel/<?= $a['id'] ?>" class="badge bg-danger text-light" style="font-size: 15px;" onclick="return confirm('are you sure to delete this article?');">Delete</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <div class="modal fade" id="newArticleModal" tabindex="-1" aria-labelledby="newArticleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newArticleModalLabel">Add New Article</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="<?= base_url('article/index'); ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter title article">
                            </div>
                            <div class="form-group">
                                <select name="jenis_artikel" id="jenis_artikel" class="form-control">
                                    <option value="">Select Article Type</option>
                                    <option value="Artikel Kucing">Artikel Kucing</option>
                                    <option value="Artikel Anjing">Artikel Anjing</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name="kategori" id="kategori" class="form-control">
                                    <option value="">Select Article Category</option>
                                    <option value="Penyakit">Penyakit</option>
                                    <option value="Reproduksi">Reproduksi</option>
                                    <option value="Nutrisi">Nutrisi</option>
                                    <option value="Vaksin">Vaksin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="isi" name="isi" placeholder="Enter article contents" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="hidden" id="penulis" name="penulis" value="<?= $user['name']; ?>">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Add Article</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Edit -->
        <?php
        foreach ($artikel as $a) :
            $id = $a['id'];
            $judul = $a['judul'];
            $jenis_artikel = $a['jenis_artikel'];
            $kategori = $a['kategori'];
            $isi = $a['isi'];
        ?>
            <div class="modal fade" id="editArticleModal<?= $a['id']; ?>" tabindex="-1" aria-labelledby="editArticleModalLabel<?= $a['id']; ?>" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editArticleModalLabel<?= $a['id']; ?>">Edit New Article</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="<?= base_url('article/edit_artikel'); ?>" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $id; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter title article" value="<?= $judul; ?>">
                                </div>
                                <div class="form-group">
                                    <select name="jenis_artikel" id="jenis_artikel" class="form-control">
                                        <option value="">Select Article Type</option>
                                        <?php if ($jenis_artikel == 'Artikel Kucing') : ?>
                                            <option value="Artikel Kucing" selected>Artikel Kucing</option>
                                            <option value="Artikel Anjing">Artikel Anjing</option>
                                        <?php else : ?>
                                            <option value="Artikel Kucing">Artikel Kucing</option>
                                            <option value="Artikel Anjing" selected>Artikel Anjing</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="kategori" id="kategori" class="form-control">
                                        <option value="">Select Article Category</option>
                                        <?php if ($kategori == 'Penyakit') : ?>
                                            <option value="Penyakit" selected>Penyakit</option>
                                            <option value="Reproduksi">Reproduksi</option>
                                            <option value="Nutrisi">Nutrisi</option>
                                            <option value="Vaksin">Vaksin</option>
                                        <?php elseif ($kategori == 'Reproduksi') : ?>
                                            <option value="Penyakit">Penyakit</option>
                                            <option value="Reproduksi" selected>Reproduksi</option>
                                            <option value="Nutrisi">Nutrisi</option>
                                            <option value="Vaksin">Vaksin</option>
                                        <?php elseif ($kategori == 'Nutrisi') : ?>
                                            <option value="Penyakit">Penyakit</option>
                                            <option value="Reproduksi">Reproduksi</option>
                                            <option value="Nutrisi" selected>Nutrisi</option>
                                            <option value="Vaksin">Vaksin</option>
                                        <?php else : ?>
                                            <option value="Penyakit">Penyakit</option>
                                            <option value="Reproduksi">Reproduksi</option>
                                            <option value="Nutrisi">Nutrisi</option>
                                            <option value="Vaksin" selected>Vaksin</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="isi" name="isi" placeholder="Enter article contents" rows="10" value=""><?= $isi; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" id="penulis" name="penulis" value="<?= $user['name']; ?>">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Edit Article</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>