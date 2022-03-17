<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$this->load->view('MyWelcome');
	}
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($username=="yusuf" && $password=="123"){
			echo "berhasil";
		}else{
			echo "gagal";
		}

		// $this->load->model('User');
		// $info_user = $this->User->get_login_info($username);

		// if(count($info_user)>0){
		// 	$pwd_db = $info_user[0]['password'];
		// 	$password = md5($password);

		// 	if($pwd_db == $password){
		// 		echo "Login berhasil";
		// 	}else{
		// 		echo "Password Salah!";
		// 	}
		// }else{
		// 	echo "Username yang dicari tidak ada";
		// }
	}
	public function cari_mahasiswa(){
        $cari = $this->input->post('val_cari');
        $hasil = array(
                'pesan'   => '',
                'nim'     => '001',
                'nama'    => 'Osvari Arsalan',
                'prodi'   => 'Teknik Informatika Reguler',
                'jurusan' => 'Teknik Informatika',
                'fakultas'=> 'Ilmu Komputer'
        );
            
        if(strpos($hasil['nim'], $cari) !== false ||
            strpos($hasil['nama'],$cari) !== false)
        {
            $hasil['pesan'] = 'sukses';
        }
        else
        {
            $hasil['pesan'] = 'gagal';
        }

        $this->load->view('hasil_pencarian', $hasil);      
    }
}
