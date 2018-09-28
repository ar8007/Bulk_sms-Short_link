<?php
class Get_link extends CI_Model
{
    public function get_info($id)
    {
        $data = $this->db->where('offer_id',$id)
                ->from('number_link');
        return $data->get()->row()->link;
    }

    public function get_status()
    {
        $data = $this->db->get('number_link');
        return $data->result();
    }
}