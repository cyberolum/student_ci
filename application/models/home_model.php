<?php

class home_model extends CI_Model
{
    public function select()
    {
        $sql = "SELECT
                  ads.id,ads.ads_address,ads.ads_user_name,rom.rooms_count AS room,mrk.mark_name AS mark
                FROM
                  `ads`
                LEFT JOIN mark mrk ON mrk.id = ads.mark_id
                INNER JOIN rooms rom ON rom.id = ads.rooms_id
                ";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
