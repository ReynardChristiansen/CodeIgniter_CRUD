<?php
class M_mahasiswa extends CI_Model{
    public function tampil_data(){
        return $this->db->get('tb_mahasiswa');
    }

    public function input_data($data, $stable){
        $this->db->insert($stable, $data);
    }

    public function hapus_data($where, $stable){
        $this->db->where($where);
        $this->db->delete($stable);
    }

    public function edit_data($where, $stable){
        return $this->db->get_where($stable, $where);
    }

    public function update_data($where, $data, $stable){
        $this->db->where($where);
        $this->db->update($stable, $data);
    }

    public function detail_data($id = NULL){
        $query = $this->db->get_where('tb_mahasiswa', array('id' => $id))->row();
        return $query;
    }
    
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tb_mahasiswa');
        $this->db->like('nama', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('tgl_lahir', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get()->result();
    }

    
    
}
?>