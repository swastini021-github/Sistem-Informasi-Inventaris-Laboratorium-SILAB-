<div class="content">
    <p></p>
    <p></p>
    <p></p>
    <p></p>
    <div class="row">
        <h3 class="panel-title bg-teal-700" align="center">Form Input Aset Laboratorium</h3>
        <div class="panel panel-flat">
            <form action="<?= site_url('Admin/save_aset'); ?>" method="POST" enctype="multipart/form-data">
                <div class="panel-body">
                    <input type="hidden" name="kode_aset" value="<?= (isset($aset['kode_aset'])) ? md5($aset['kode_aset']) : ''; ?>">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="kategoriuser">Lokasi :</label>
                            <select class="form-control" name="id_lokasi">
                                <?php
                                //menampilkan data kategori user dalam list
                                foreach ($lokasi as $val) { ?>
                                    <option <?= (isset($aset['id_lokasi']) && $aset['id_lokasi'] == $val['id_lokasi']) ? 'selected' : ''; ?> value="<?= $val['id_lokasi']; ?>"><?= $val['nama_lab']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Barang :</label>
                            <input type="text" name="nama_barang" value="<?= (isset($aset['nama_barang'])) ? $aset['nama_barang'] : set_value('nama_barang'); ?>" class="form-control">
                            <small class="text-danger"><?= form_error('nama_barang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="spesifikasi">Spesifikasi :</label>
                            <input type="text" name="spesifikasi" value="<?= (isset($aset['spesifikasi'])) ? $aset['spesifikasi'] : set_value('spesifikasi'); ?>" class="form-control">
                            <small class="text-danger"><?= form_error('spesifikasi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" name="jumlah" value="<?= (isset($aset['jumlah'])) ? $aset['jumlah'] : set_value('jumlah'); ?>" class="form-control">
                            <small class="text-danger"><?= form_error('jumlah'); ?></small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input type="text" name="satuan" value="<?= (isset($aset['satuan'])) ? $aset['satuan'] : set_value('satuan'); ?>" class="form-control">
                            <small class="text-danger"><?= form_error('satuan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" value="<?= (isset($aset['keterangan'])) ? $aset['keterangan'] : set_value('keterangan'); ?>" class="form-control">
                            <small class="text-danger"><?= form_error('keterangan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto :</label>
                            <input type="file" name="fotofile" class="form-control">
                        </div>
                        <div class="text-right">
                            <input class="bg-teal-400" type="submit" class="save" name="Simpan" value="Simpan" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>