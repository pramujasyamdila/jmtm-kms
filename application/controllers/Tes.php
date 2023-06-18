<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form', 'string'));
        $this->load->model('Auth_model');
        $this->load->library(array('form_validation', 'recaptcha'));
    }

    public function index()
    {
        $data['alasan']  = $this->Auth_model->get_alasan();
        $this->load->view('logik_depster', $data);
    }
    public function hitung_data($data)
    {
        $cf_old = 0;
        foreach ($data as $key => $value) {
            if ($key ===  0) {
                $cf_old = $value;
            } else {
                $cf_old = $cf_old + $value * (1 - $cf_old);
            }
        }
        return $cf_old;
    }




    // Fungsi untuk mencari nilai solusi menggunakan metode Dempster-Shafer

    public function simpandata()
    {
        // Mendapatkan gejala yang dipilih dari form
        $alasan = $this->input->post('nama_alasan');
        $densitas = array();
        foreach ($alasan as $idAlasan) {
            $query = $this->db->select('tbl_echa_alasan.nama_alasan, tbl_echa_alasan.densitas,tbl_echa_solusi.nama_solusi')
                ->from('tbl_echa_alasan')
                ->join('tbl_echa_relasi', 'tbl_echa_relasi.id_alasan = tbl_echa_alasan.id_alasan')
                ->join('tbl_echa_solusi', 'tbl_echa_relasi.id_solusi = tbl_echa_solusi.id_solusi')
                ->where('tbl_echa_relasi.id_alasan', $idAlasan)
                ->get();
            $result = $query->result_array();
            foreach ($result as $row) {
                $himpunan = $row['nama_alasan'];
                $densitasHimpunan = $row['densitas'];
                if (array_key_exists($himpunan, $densitas)) {
                    $densitas[$himpunan] += $densitasHimpunan;
                } else {
                    $densitas[$himpunan] = $densitasHimpunan;
                }
            }
        }

        $solusi = '';
        $nilaiSolusi = 0;
        // Menghitung nilai solusi
        foreach ($result as $himpunan => $densitasHimpunan) {
            if ($densitasHimpunan > $nilaiSolusi) {
                $solusi = $densitasHimpunan['nama_solusi'];
            }
        }
        // Menghitung nilai solusi\
        $hasil_akhir =  $this->hitung_data($densitas);
        echo " HASIL PERSENTASE ";
        echo $hasil_akhir * 100 . '%';
        echo " Mobil Yang Cocok Untuk Anda Adalah ";
        
        // row
        echo $solusi;
        // result

        // foreach ($result as $row => $dataku) {
        //     echo  $dataku['nama_solusi'] . ',';
        // }
    }
}
