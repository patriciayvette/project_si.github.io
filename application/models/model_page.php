<?php
class model_page extends CI_Model{
 
    function getDataAlat($config){  
        $hasilquery=$this->db->get('data_alat', $config['per_page'], $this->uri->segment(3));
        if ($hasilquery->num_rows() > 0) {
            foreach ($hasilquery->result() as $value) {
                $data[]=$value;
            }
            return $data;
        }      
    }
    function getDataLahan($config){  
        $hasilquery=$this->db->get_where('data_desa', array('no_kecamatan' => $config['no']), $config['per_page'], $this->uri->segment(5));
        if ($hasilquery->num_rows() > 0) {
            foreach ($hasilquery->result() as $value) {
                $data[]=$value;
            }
            return $data;
        }      
    }
}
?>