<?php
class admin_model extends CI_Model
{
    function get_tb_user()
    {
        $data = $this->db->get('tb_user')->result_array();
        return $data;
    }
    function get_tb_aset()
    {
        $data = $this->db->get('tb_aset')->result_array();
        return $data;
    }
    function get_tb_lokasi()
    {
        $data = $this->db->get('tb_lokasi')->result_array();
        return $data;
    }
    function get_tb_prodi()
    {
        $data = $this->db->get('tb_prodi')->result_array();
        return $data;
    }
    function get_tb_pelaporan()
    {
        $data = $this->db->get('tb_pelaporan')->result_array();
        return $data;
    }
    function get_num_rows($table)
    {
        $data = $this->db->get($table)->num_rows();
        return $data;
    }

    function get_user()
    {
        //mengurutkan data dari data terbaru
        $this->db->order_by('id_user', 'desc');
        $data = $this->db->get('tb_user')->result_array();
        return $data;
    }

    function save_user($post)
    {
        $data = array(
            'nama' => $post['nama'],
            'password' => md5($post['password']),
            'jabatan' => $post['jabatan']
        );
        //menyimpan data ke tabel
        $this->db->insert('tb_user', $data);
    }

    function save_update_user($post)
    {
        $data = array(
            'nama' => $post['nama'],
            'password' => md5($post['password']),
            'jabatan' => $post['jabatan']
        );
        //menyimpan data ke tabel
        $this->db->where('md5(id_user)', $post['id_user']);
        $this->db->update('tb_user', $data);
    }
    function delete_user($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function get_lokasi($limit, $page)
    {
        //mengurutkan data dari data terbaru
        $this->db->order_by('id_lokasi', 'desc');
        $this->db->limit($limit, $page);
        $this->db->join('tb_prodi', 'tb_prodi.id_prodi=tb_lokasi.id_prodi');
        $data = $this->db->get('tb_lokasi')->result_array();
        return $data;
    }
    function save_lokasi($post)
    {
        $data = array(
            'id_prodi' => $post['prodi'],
            'nama_lab' => $post['nama_lab'],
        );
        $this->db->insert('tb_lokasi', $data);
    }

    function save_update_lokasi($post)
    {

        $data = array(
            'id_prodi' => $post['prodi'],
            'nama_lab' => $post['nama_lab'],
        );
        $this->db->where('md5(id_lokasi)', $post['id_lokasi']);
        $this->db->update('tb_lokasi', $data);
    }
    function delete_lokasi($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function get_aset($limit, $page)
    {
        //mengurutkan data dari data terbaru
        $this->db->order_by('kode_aset', 'desc');
        $this->db->limit($limit, $page);
        $this->db->join('tb_lokasi', 'tb_lokasi.id_lokasi=tb_aset.id_lokasi');
        $data = $this->db->get('tb_aset')->result_array();
        return $data;
    }
    function save_aset($post)
    {
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload();
        //menampung post yang dikirim oleh controller untuk disimpan dalam array sesuai field dalam tabel
        $data = array(
            //'sesuai field tabel'=>'sesuai name input dalam form'
            //'id_berita'=>$post['id_berita'],
            'id_lokasi' => $post['id_lokasi'],
            'nama_barang' => $post['nama_barang'],
            'spesifikasi' => $post['spesifikasi'],
            'jumlah' => $post['jumlah'],
            'satuan' => $post['satuan'],
            'keterangan' => $post['keterangan'],
            'foto' => $_FILES['fotofile']['name']
        );
        //menyimpan data ke tabel
        $this->db->insert('tb_aset', $data);
    }

    function save_update_aset($post)
    {
        //$konfigurasi= array(
        //'allowed_types'=>'jpg|jpeg|gif|png|bmp',
        //'upload_path' => realpath('./media/images'),
        //);
        //$this->load->library('upload',$konfigurasi);
        //$this->upload->do_upload();
        $data = array(
            //'sesuai field tabel'=>'sesuai name input dalam form'
            //'id_berita'=>$post['id_berita'],
            'id_lokasi' => $post['id_lokasi'],
            'nama_barang' => $post['nama_barang'],
            'spesifikasi' => $post['spesifikasi'],
            'jumlah' => $post['jumlah'],
            'satuan' => $post['satuan'],
            'keterangan' => $post['keterangan'],
            // 'foto' => $_FILES['userfile']['name']
        );
        $this->db->where('md5(kode_aset)', $post['kode_aset']);
        $this->db->update('tb_aset', $data);
    }
    function delete_aset($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
