<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>


            <?= $this->session->flashdata('message'); ?>
            <a class="btn btn-outline-primary" href="<?= base_url('mahasiswa/jadwal') ?>" role="button">Kembali</a>

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $jadwal['id']; ?>">

                <div class="form-group mt-4">
                    <label for="">Mata Kuliah</label>
                    <input type="text" class="form-control" name="matakuliah" id="matakuliah" value="<?= $jadwal['matakuliah'] ?>">
                </div>
                <div class="form-group mt-4">
                    <label for="">Hari</label>
                    <input type="text" class="form-control" name="hari" id="hari" value="<?= $jadwal['hari'] ?>">
                </div>
                <div class="form-group mt-4">
                    <label for="">Jam</label>
                    <input type="text" class="form-control" name="jam" id="jam" value="<?= $jadwal['jam'] ?>">
                </div>
                <div class="form-group mt-4">
                    <label for="">Dosen</label>
                    <input type="text" class="form-control" name="dosen" id="dosen" value="<?= $jadwal['dosen'] ?>">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->