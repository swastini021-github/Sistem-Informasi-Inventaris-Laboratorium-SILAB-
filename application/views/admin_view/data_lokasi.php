<div class="content">
    <h1>
        <p align="center">Data lokasi PNS Universitas Pendidikan Ganesha</p>
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
                        <center>Prodi</center>
                    </th>
                    <th>
                        <center>Jurusan</center>
                    </th>
                    <th>
                        <center>Fakultas</center>
                    </th>
                    <th>
                        <center>Action</center>
                    </th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($lokasi as $val) { ?>
                <tr>
                    <td>
                        <center><?php echo $no++; ?></center>
                    </td>
                    <td>
                        <center><?= $val['nama_lab']; ?></center>
                    </td>
                    <td>
                        <center><?= $val['nama_prodi']; ?></center>
                    </td>
                    <td>
                        <center><?= $val['jurusan']; ?></center>
                    </td>
                    <td>
                        <center><?= $val['fakultas']; ?></center>
                    </td>
                    <td>
                        <div class="row">
                            <a href="<?= site_url('Admin/update_lokasi/' . md5($val['id_lokasi'])) ?>"><i class="icon-pencil3"></i>update</a>
                            <a href="<?= site_url('Admin/delete_lokasi/' . md5($val['id_lokasi'])) ?>"><i class="icon-trash-alt"></i>delete</a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <?php echo $this->pagination->create_links(); ?>
    </div>
    <div class="text-right">
        <a href="<?= site_url('Admin/input_lokasi') ?>" class="btn btn-lg bg-slate-700 right-block">Tambah lokasi</a>
    </div>
</div>