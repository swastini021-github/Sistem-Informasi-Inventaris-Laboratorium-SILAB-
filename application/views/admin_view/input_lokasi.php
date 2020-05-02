<div class="content">
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-flat">
                <h3 class="panel-title bg-teal-700" align="center">Form Input Lokasi Laboratorium</h3>
                <form action="<?= site_url('Admin/save_lokasi'); ?>" method="POST">
                    <div class="panel-body">
                        <input type="hidden" name="id_lokasi" value="<?= (isset($lokasi['id_lokasi'])) ? md5($lokasi['id_lokasi']) : ''; ?>">
                        <div class="form-group">
                            <label for="nama">Nama Lab :</label>
                            <input type="text" name="nama_lab" value="<?= (isset($lokasi['nama_lab'])) ? $lokasi['nama_lab'] : set_value('nama_lab'); ?>" class="form-control">
                            <small class="text-danger"><?= form_error('nama_lab'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kategoriuser">Prodi :</label>
                            <select class="form-control" name="prodi">
                                <?php
                                //menampilkan data kategori user dalam list
                                foreach ($prodi as $val) { ?>
                                    <option <?= (isset($lokasi['id_prodi']) && $lokasi['id_prodi'] == $val['id_prodi']) ? 'selected' : ''; ?> value="<?= $val['id_prodi']; ?>"><?= $val['nama_prodi']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="text-right">
                            <input class="bg-teal-400" type="submit" class="save" name="Simpan" value="Simpan" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>