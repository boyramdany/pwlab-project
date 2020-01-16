<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <!-- DataTables Mahasiswa -->
            <div class="card shadow">
                <div class="card-header pt-3">
                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newJadwalModal">Add New Jadwal</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Matakuliah</th>
                                    <th>Hari</th>
                                    <th>Jam</th>
                                    <th>Dosen</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($jadwal as $jadwal) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $jadwal['matakuliah'] ?></td>
                                        <td><?= $jadwal['hari'] ?></td>
                                        <td><?= $jadwal['jam'] ?></td>
                                        <td><?= $jadwal['dosen'] ?></td>
                                        <td>
                                            <!-- Button Edit Jadwal -->
                                            <a class="btn btn-primary btn-sm" href="<?= site_url('mahasiswa/ubahjadwal/' . $jadwal['id']) ?>" role="button">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            <!-- End Button Edit Jadwal -->

                                            <!-- Button Delete Jadwal -->
                                            <a class="btn btn-danger btn-sm" href="<?= site_url('mahasiswa/hapusjadwal/' . $jadwal['id']) ?>" onclick="return confirm('Are you sure?')">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                            <!-- Button Delete Jadwal -->
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<!-- Modal Tambah Jadwal-->
<div class="modal fade" id="newJadwalModal" tabindex="-1" role="dialog" aria-labelledby="newJadwalModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newJadwalModalLabel">Add Jadwal Kuliah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('mahasiswa/jadwal'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="matakuliah" name="matakuliah" placeholder="Mata Kuliah">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="hari" name="hari" placeholder="Hari">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="jam" name="jam" placeholder="Jam">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="dosen" name="dosen" placeholder="Dosen">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Tambah Jadwal -->