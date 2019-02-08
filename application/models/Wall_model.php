<?php
class Wall_model extends CI_Model {

    public function get_all()
    {
        $query = $this->db->get('seinat'); 
        return $query->result();
    }

    public function create_wall()
    {
        $data = array(
            'nimi' => $this->input->post('nimi')
        );

        return $this->db->insert('seinat', $data);
    }

    public function delete_wall($id)
    {
       return $this->db->delete('seinat', array('id' => $id)); 
    }

}