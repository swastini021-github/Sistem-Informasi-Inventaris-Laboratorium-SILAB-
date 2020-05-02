<p></p>
<p></p>
<div class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-flat">
                <h3 class="panel-title bg-teal-700" align="center">Form Input User</h3>
                <form action="<?= site_url('Admin/save_user'); ?>" method="POST">
                    <div class="panel-body">
                        <input type="hidden" name="id_user" value="<?= (isset($users['id_user'])) ? md5($users['id_user']) : ''; ?>">
                        <div class="form-group">
                            <label for="nama">Nama :</label>
                            <input type="text" value="<?= (isset($users['nama'])) ? $users['nama'] : set_value('nama'); ?>" name="nama" class="form-control">
                            <small class="text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" value="<?= (isset($users['password'])) ? $users['password'] : set_value('password'); ?>" name="password" placeholder="password..." class="form-control">
                            <small class="text-danger"><?= form_error('password'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan :</label>
                            <select name="jabatan" class="form-control">
                                <option type="radio" <?= (isset($users['jabatan']) && $users['jabatan'] == 'Kalaboran') ? 'selected' : ''; ?> value="Kalaboran">Kalaboran
                                </option>
                                <option type="radio" <?= (isset($users['jabatan']) && $users['jabatan'] == 'Laboran') ? 'selected' : ''; ?> value="Laboran">Laboran
                                </option>
                            </select>
                        </div>
                        <div class="text-right">
                            <input class="bg-teal-400" type="submit" class="save" name="Simpan" value="Simpan" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-flat">
                <h3 class="panel-title bg-teal-700" align="center">Daftar User SiLab</h3>
                <div class="table-responsive">
                    <table class=" table table-dordered table-striped table-hover">
                        <thead>
                            <tr class="bg-primary-400">
                                <th>
                                    <center>No</center>
                                </th>
                                <th>
                                    <center>Nama User</center>
                                </th>
                                <th>
                                    <center>Password</center>
                                </th>
                                <th>
                                    <center>Jabatan</center>
                                </th>
                                <th>
                                    <center>Aksi</center>
                                </th>
                            </tr>
                        </thead>
                        <?php $no = 1;
                        foreach ($user as $val) { ?>
                            <tr>
                                <td>
                                    <center><?php echo $no++; ?></center>
                                </td>
                                <td>
                                    <center><?= $val['nama']; ?></center>
                                </td>
                                <td>
                                    <center><?= $val['password']; ?></center>
                                </td>
                                <td>
                                    <center><?= $val['jabatan']; ?></center>
                                </td>
                                <td>
                                    <div class="row">
                                        <a href="<?= site_url('Admin/update_user/' . md5($val['id_user'])) ?>"><i class="icon-pencil3"></i>update</a>
                                        <a href="<?= site_url('Admin/delete_user/' . md5($val['id_user'])) ?>"><i class="icon-trash-alt"></i>delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</div>