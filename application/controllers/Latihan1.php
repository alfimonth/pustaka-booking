<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
        //$this->load->view('view-latihan1');
    }

    public function penjumlahan($n1, $n2)
    {
        // bab2 contoh 2
        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah($n1, $n2);
        // echo "Hasil Penjumlahan dari " . $n1 . " + " . $n2 . " = " . $hasil;



        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $hasil;

        $this->load->view('view-latihan1', $data);
    }
}
