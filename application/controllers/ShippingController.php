<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShippingController extends CI_Controller {

	public function index()
	{
		$this->load->view('shippingView');
	}

	public function shippingEstimation()
	{
		# logic estimasi pengiriman
		if ($this->input->post("shipping")) {
			# code...

			$sender =  $this->input->post('sender');
			$recipient =  $this->input->post('recipient');
			$berat =  $this->input->post('berat');
			$jarak =  $this->input->post('jarak');
			$tglMasuk = $this->input->post('tanggal');

			if ($jarak <=15 ) {
				$harga1 	= 6000;
			} elseif ($jarak <= 50) {
				$harga1 = 10000;
			} elseif ($jarak <= 100) {
				$harga1 = 15000;
			} elseif ($jarak<= 200) {
				$harga1 = 20000;
			} elseif ($jarak <= 500) {
				$harga1 = 30000;
			} else {
				$harga1 = 50000;
			}	

			if ($berat <= 1) {
				$harga2 = 3000;
			} elseif ($berat  <= 5) {
				$harga2 = 5000;
			} elseif ($berat  <= 8) {
				$harga2 = 7000;
			} elseif ($berat  <= 13) {
				$harga2 = 9000;
			} elseif ($berat  = 18) {
				$harga2 = 12000;
			} elseif ($berat  <= 30) {
				$harga2 = 15000;
			} else {
				$harga2 = 20000;
			}

			$total = $harga1 + $harga2;	

			if ($jarak <= 20){
				$estimasi = '+0 days';
			} elseif ($jarak <=50) {
				$estimasi = '+1 days';
			} elseif ($jarak <= 100) {
				$estimasi = '+2 days';
			} elseif ($jarak <=300) {
				$estimasi = '+3 days';
			} elseif ($jarak <=500) {
				$estimasi = '+5 days';
			} else{
				$estimasi ='+7 days';
			}

			$tglSelesai = date('d-m-Y', strtotime($estimasi, strtotime($tglMasuk)));

			 $data= array(
			 	'sender' => $sender,
				'recipient' => $recipient,
				'berat' => $berat,
				'jarak' => $jarak,
				'total' => $total, 
				'tglMasuk'=>$tglMasuk,
				'tglSelesai'=>$tglSelesai
			);

			$this->load->view('shippingResult',$data);
		}
	}
}
