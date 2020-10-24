<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forcast extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Barang_m');
        $this->load->helper('aw_helper');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in') != "" && $this->session->userdata('level') == "Stocker") {

            //ambil data barang
            $d['barang'] = $this->db->get('barang');
            $this->load->view('stocker/forcast/home', $d);
        } else {
            redirect('auth/logout');
        }
    }

    public function result()
    {
        if ($this->session->userdata('logged_in') != "" && $this->session->userdata('level') == "Stocker") {

            $kode = $this->input->post('kode');
            $tahun = $this->input->post('tahun');

            //membuat session bulan yang dicari
            $bulan = $this->input->post('bulan');
            $s['bul'] = konversibulan($bulan);
            $this->session->set_userdata($s);

            //aktual 1
            $q1 = $this->db->query("SELECT SUM(IF(month(tgl_keluar)='1' and year(tgl_keluar)='$tahun', `qty_keluar`,0)) AS aktual from pengeluaran where kode = '$kode'");
            $d1 = $q1->row()->aktual;
            $d['ak1'] = $d1;

            //aktual 2
            $q2 = $this->db->query("SELECT SUM(IF(month(tgl_keluar)='2' and year(tgl_keluar)='$tahun', `qty_keluar`,0)) AS aktual from pengeluaran where kode = '$kode'");
            $d2 = $q2->row()->aktual;
            $d['ak2'] = $d2;

            //aktual 3
            $q3 = $this->db->query("SELECT SUM(IF(month(tgl_keluar)='3' and year(tgl_keluar)='$tahun', `qty_keluar`,0)) AS aktual from pengeluaran where kode = '$kode'");
            $d3 = $q3->row()->aktual;
            $d['ak3'] = $d3;

            //aktual 4
            $q4 = $this->db->query("SELECT SUM(IF(month(tgl_keluar)='4' and year(tgl_keluar)='$tahun', `qty_keluar`,0)) AS aktual from pengeluaran where kode = '$kode'");
            $d4 = $q4->row()->aktual;
            $d['ak4'] = $d4;

            //aktual 5
            $q5 = $this->db->query("SELECT SUM(IF(month(tgl_keluar)='5' and year(tgl_keluar)='$tahun', `qty_keluar`,0)) AS aktual from pengeluaran where kode = '$kode'");
            $d5 = $q5->row()->aktual;
            $d['ak5'] = $d5;

            //aktual 6
            $q6 = $this->db->query("SELECT SUM(IF(month(tgl_keluar)='6' and year(tgl_keluar)='$tahun', `qty_keluar`,0)) AS aktual from pengeluaran where kode = '$kode'");
            $d6 = $q6->row()->aktual;
            $d['ak6'] = $d6;

            //aktual 7
            $q7 = $this->db->query("SELECT SUM(IF(month(tgl_keluar)='7' and year(tgl_keluar)='$tahun', `qty_keluar`,0)) AS aktual from pengeluaran where kode = '$kode'");
            $d7 = $q7->row()->aktual;
            $d['ak7'] = $d7;

            //aktual 8
            $q8 = $this->db->query("SELECT SUM(IF(month(tgl_keluar)='8' and year(tgl_keluar)='$tahun', `qty_keluar`,0)) AS aktual from pengeluaran where kode = '$kode'");
            $d8 = $q8->row()->aktual;
            $d['ak8'] = $d8;

            //aktual 9
            $q9 = $this->db->query("SELECT SUM(IF(month(tgl_keluar)='9' and year(tgl_keluar)='$tahun', `qty_keluar`,0)) AS aktual from pengeluaran where kode = '$kode'");
            $d9 = $q9->row()->aktual;
            $d['ak9'] = $d9;

            //aktual 10
            $q10 = $this->db->query("SELECT SUM(IF(month(tgl_keluar)='10' and year(tgl_keluar)='$tahun', `qty_keluar`,0)) AS aktual from pengeluaran where kode = '$kode'");
            $d10 = $q10->row()->aktual;
            $d['ak10'] = $d10;

            //aktual 11
            $q11 = $this->db->query("SELECT SUM(IF(month(tgl_keluar)='11' and year(tgl_keluar)='$tahun', `qty_keluar`,0)) AS aktual from pengeluaran where kode = '$kode'");
            $d11 = $q11->row()->aktual;
            $d['ak11'] = $d11;

            //aktual 12
            $q12 = $this->db->query("SELECT SUM(IF(month(tgl_keluar)='12' and year(tgl_keluar)='$tahun', `qty_keluar`,0)) AS aktual from pengeluaran where kode = '$kode'");
            $d12 = $q12->row()->aktual;
            $d['ak12'] = $d12;

            $this->load->view('stocker/forcast/ramal', $d);
        } else {
            redirect('auth/logout');
        }
    }

    public function submit()
    {
        if ($this->session->userdata('logged_in') != "" && $this->session->userdata('level') == "Stocker") {
            $kode = $this->input->post('kode');
            $gdg = $this->input->post('gdg');
            $barang = $this->input->post('nm_barang');
            $harga = $this->input->post('harga');
            $satuan = $this->input->post('id_satuan');
            $supplier = $this->input->post('id_supplier');

            $d = array(
                'kode' => $kode,
                'gdg' => $gdg,
                'nm_barang' => $barang,
                'harga' => $harga,
                'id_unit' => $satuan,
                'id_supplier' => $supplier
            );

            $this->Barang_m->input($d, 'barang');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

            redirect('stocker/barang');
        } else {
            redirect('auth/logout');
        }
    }
}
