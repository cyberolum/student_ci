<?php

class ads_model extends CI_Model
{
    public function get_towns()
    {
        $result = $this->db->get('towns');
        return $result->result();
    }

    public function get_metros()
    {
        $result = $this->db->get('mark');
        return $result->result();
    }

    public function select($user_id)
    {
        $sql = "SELECT
                  ads.id,ads.ads_address,ads.ads_user_name,rom.rooms_count AS room,mrk.mark_name AS mark
                FROM
                  `ads`
                LEFT JOIN mark mrk ON mrk.id = ads.mark_id
                INNER JOIN rooms rom ON rom.id = ads.rooms_id
                WHERE
                 ads.userdb_id=$user_id";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function add($viewData)
    {
        $this->db->insert('ads', $viewData);
    }

    public function addphoto($viewUploadImage){
        $this->db->insert('ads_photos', $viewUploadImage);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('ads');
    }

    public function findByIdData($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $result = $this->db->get('ads');
        return $result->result();
    }

    public function update($id, $viewData)
    {
        $this->db->where('id', $id);
        $this->db->update('ads', $viewData);
    }

    public function addPhotoqwe($photodata){
        $this->db->insert('ads_photos', $photodata);
    }
}
