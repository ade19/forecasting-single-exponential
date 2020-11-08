<?php
class Chart_model extends CI_Model
{

    //get data from database
    function get_data()
    {
        // $this->db->select('forcasting, bulan, tahun');
        // // $this->db->from('peramalan');
        // $this->db->where('tahun', '2020');
        // $this->db->group_by('bulan');

        // $result = $this->db->get('peramalan');

        $result = $this->db->query("SELECT a.bulan, a.tahun, aktual.aktual, a.forcasting FROM peramalan a JOIN (SELECT sum(`qty_keluar`) as aktual, Month(`tgl_keluar`) as bulan, Year(`tgl_keluar`) as tahun FROM pengeluaran GROUP BY bulan) AS aktual ON a.tahun=aktual.tahun GROUP BY a.bulan");
        return $result;
    }
}
