        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


            <div class="row">
                <div class="col-lg">

                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a>

                    <?= form_error('menu', '<div class="alert alert-danger" role="alert"><center>', '</center></div>'); ?>

                    <?php echo $this->session->flashdata('msg');
                    unset($_SESSION['msg']); ?>

                    <table class=" table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Menu</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($menu as $m) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $m['menu']; ?></td>
                                    <td>
                                        <a href="" class="badge bg-info text-dark" style="font-size: 15px;" data-toggle="modal" data-target="#editMenuModal<?= $m['id']; ?>">Edit</a>
                                        <a href="<?= base_url() ?>menu/hapus_menu/<?= $m['id'] ?>" class="badge bg-danger text-light" style="font-size: 15px;" onclick="return confirm('are you sure to delete this menu?');">Delete</a>
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

        <!-- Modal -->
        <div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="<?= base_url('menu'); ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="menu" name="menu" placeholder="Input the menu's name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Add Menu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php foreach ($menu as $m) : ?>
            <div class="modal fade" id="editMenuModal<?= $m['id']; ?>" tabindex="-1" aria-labelledby="editMenuModalLabel<?= $m['id']; ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editMenuModalLabel<?= $m['id']; ?>">Edit Menu</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="<?= base_url('menu/edit_menu'); ?>" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $m['id']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="menu" name="menu" placeholder="Input the menu's name" value="<?= $m['menu']; ?>">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Edit Menu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>