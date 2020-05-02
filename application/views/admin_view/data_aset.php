<div class="content">
    <h1>
        <p align="center">Data Aset Laboratorium Fakultas Teknik dan Kejuruan</p>
    </h1>
    <hr />
    <div class="table-responsive panel panel-flat">
        <table class=" table table-dordered table-striped table-hover">
            <thead>
                <tr class="bg-teal-700">
                    <th>
                        <center>No</center>
                    </th>
                    <th>
                        <center>Nama Lab</center>
                    </th>
                    <th>
                        <center>Nama Barang</center>
                    </th>
                    <th>
                        <center>Spesifikasi</center>
                    </th>
                    <th>
                        <center>Jumlah</center>
                    </th>
                    <th>
                        <center>Satuan</center>
                    </th>
                    <th>
                        <center>Keterangan</center>
                    </th>
                    <th>
                        <center>Foto</center>
                    </th>
                    <th>
                        <center>Aksi</center>
                    </th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($aset as $val) { ?>
                <tr>
                    <td>
                        <center><?php echo $no++; ?></center>
                    </td>
                    <td>
                        <center><?= $val['nama_lab']; ?></center>
                    </td>
                    <td>
                        <center><?= $val['nama_barang']; ?></center>
                    </td>
                    <td>
                        <center><?= $val['spesifikasi']; ?></center>
                    </td>
                    <td>
                        <center><?= $val['jumlah']; ?></center>
                    </td>
                    <td>
                        <center><?= $val['satuan']; ?></center>
                    </td>
                    <td>
                        <center><?= $val['keterangan']; ?></center>
                    </td>
                    <td><img width='100' src="<?= base_url('media/images/' . $val['foto']); ?>"></td>
                    <td>
                        <div class="row">
                            <a href="<?= site_url('Admin/update_aset/' . md5($val['kode_aset'])) ?>"><i class="icon-pencil3"></i>update</a>
                            <a href="<?= site_url('Admin/delete_aset/' . md5($val['kode_aset'])) ?>"><i class="icon-trash-alt"></i>delete</a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <?php echo $this->pagination->create_links(); ?>
    </div>
    <div class="text-right">
        <a href="<?= site_url('Admin/input_aset') ?>" class="btn btn-lg bg-slate-700 right-block">Tambah aset</a>
    </div>
</div>