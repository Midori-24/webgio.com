<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	//view
	public function index()
	{
		$this->load->view('siswa');
	}
		public function hello()
	{
		$n['nama_siswa']= ['Giovandri Wiryanli', 'Malvin'];
		$n['nama_kelas']= 'CGD';


		$n['profile']= array(['nama' => 'Giovandri', 'jenis_kelamin' => 'male' ], ['nama' => 'CP', 'jenis_kelamin' => 'male'] );



		$this->load->view('siswadetail', $n);
	}
	public function shoes($sandals, $id)
    {
		echo $sandals;
		echo $id;
	}

//model
	public function siswa_model()
	{
		$this->load->model('m_siswa');
		$data['siswa']= $this->m_siswa->get_data();
		$this->load->view('daftar_siswa', $data);
	}

//helper
	public function pembayaran()
	{
		$harga = 2500000;
		echo "pembayaran siswa telah diterima.". number_format($harga, 2, ',', '.');

		echo "<br>";
		$today = '2004-04-24 15:55:01';
		echo date('d F y H:i ', strtotime($today));
		echo"<br>";

		echo terbilang_indonesia(100001);
		echo"<br>";
		echo terbilang_indonesia(10000);
		echo"<br>";
		echo terbilang_indonesia(10);
		echo"<br>";
		echo terbilang_indonesia(100);
		echo"<br>";
		echo terbilang_indonesia(1000000);
		echo"<br>";
		echo terbilang_indonesia(1450000);
		echo"<br>";
		echo terbilang_indonesia(145000);
		echo"<br>";
		echo terbilang_indonesia(145000000);
		echo"<br>";

		echo conv_nilai(190);
	}


	// public function _remap($method)
	// {
 //        // if ($method === 'some_method')
 //        // {
 //        //         $this->$method();
 //        // }
 //        // else
 //        // {
 //        //         $this->default_method();
 //        // }
 //        echo "hello";
	// }

	// public function _output($output)
	// {
 //        echo $output;
 //        echo "hello";
	// }
}
