<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NilaiController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('nilai');
	}

	public function index()
	{
		$data['data_nilai'] = $this->nilai->indexNilai();
		$this->load->view('indexNilai',$data);
		// $this->load->view('createNilai');
	}

	public function add()
	{
		$this->load->view('createNilai');
	}

	public function hitung()
	{
		if ($this->input->post('submit')) {
			# code...
			$nim = $this->input->post('nim');
			$nama = $this->input->post('nama');
			$uts = $this->input->post('uts');
			$uas = $this->input->post('uas');
			$tugas = $this->input->post('tugas');
			$presensi = $this->input->post('presensi');

			$finalScore = 0.3 * $uts + 0.4 * $uas + 0.15 * $tugas + 0.15 * $presensi;

			$data = array(
				'nim' => $nim, 
				'nama' => $nama, 
				'uts' => $uts, 
				'uas' => $uas, 
				'tugas' => $tugas, 
				'presensi' => $presensi, 
				'finalScore' => $finalScore
			);
			$this->nilai->createNilai($data);
		}
		$data['data_nilai'] = $this->nilai->indexNilai();
		$this->load->view('indexNilai',$data);
	}
}
