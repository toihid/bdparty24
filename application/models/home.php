<?php

class Home extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function record_count() {
        return $this->db->count_all('party_center_details');
    }

    public function fetch_party($limit, $start) {
        $this->db->select('party_center_details.pc_id,images.pc_id,images.pic1,party_center_details.pc_name,
            location,space_rent,menu1_price,space,guest_coverage,bride_stage,dressing_room,wash_room,rest_room,music_stage,
            cultural_programme ');
        $this->db->from('party_center_details');
        $this->db->join('images', 'images.pc_id = party_center_details.pc_id', 'left');
        
        $this->db->order_by('party_center_details.location');

        $this->db->limit($limit, $start);
        // $query = $this->db->get('party_center_details');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function record_count_search() {
        //return $this->db->count_all('party_center_details');
        $loca = $this->input->post('location');
        $location = "'" . $loca . "'";

        $da1 = $this->input->post('date_from');
        $date1 = "'" . $da1 . "'";
        $da2 = $this->input->post('date_to');
        $date2 = "'" . $da2 . "'";

        $res_location = 'party_center_details.location =' . $location;
        $res_date = "booking_list.date not between '" . $da1 . "' and '" . $da2 . "'";
        $res_location_date = $res_location . ' AND ' . $res_date;
        $this->db->select('party_center_details.pc_id,images.pc_id,images.pic1,party_center_details.pc_name,location,space_rent,menu1_price,space,guest_coverage,bride_stage,dressing_room,wash_room,rest_room,music_stage,cultural_programme ');
        $this->db->from('party_center_details');
        $this->db->join('images', 'images.pc_id = party_center_details.pc_id', 'left');
        $this->db->join('booking_list', 'booking_list.pc_id = party_center_details.pc_id', 'left');
        

        if ($loca != '') {
            $where2 = $res_location;
        }
        if ($da1 != '' and $da2 != '') {
            $where2 = $res_date;
        }
        if ($loca != '' and $da1 != '' and $da2 != '') {
            $where2 = $res_date;
        }
        else{$where2 = '1='.'1';}
        //echo $where2;
        $this->db->where($where2);
        $this->db->group_by('party_center_details.pc_id');
        $this->db->order_by('party_center_details.location');
        $q = $this->db->get();
        return $q->num_rows();
    }

    public function fetch_party_search($limit, $start) {

        $loca = $this->input->post('location');
        $location = "'" . $loca . "'";

        $da1 = $this->input->post('date_from');
        $date1 = "'" . $da1 . "'";
        $da2 = $this->input->post('date_to');
        $date2 = "'" . $da2 . "'";

        $res_location = 'party_center_details.location =' . $location;
        $res_date = "booking_list.date not between '" . $da1 . "' and '" . $da2 . "'";
        $res_location_date = $res_location . ' AND ' . $res_date;
        $this->db->select('party_center_details.pc_id,images.pc_id,images.pic1,party_center_details.pc_name,
            location,space_rent,menu1_price,space,guest_coverage,bride_stage,dressing_room,wash_room,rest_room,music_stage,
            cultural_programme ');
        $this->db->from('party_center_details');
        $this->db->join('images', 'images.pc_id = party_center_details.pc_id', 'left');
        $this->db->join('booking_list', 'booking_list.pc_id = party_center_details.pc_id', 'left');
        

        if ($loca != '') {
            $where2 = $res_location;
        }
        if ($da1 != '' and $da2 != '') {
            $where2 = $res_date;
        }
        if ($loca != '' and $da1 != '' and $da2 != '') {
            $where2 = $res_date;
        }
        //echo $where2;
        $this->db->where($where2);
        $this->db->group_by('party_center_details.pc_id');
        $this->db->order_by('party_center_details.location');
        $this->db->limit($limit, $start);
        //$this->db->limit($limit, $start);
        // $query = $this->db->get('party_center_details');
        //$this->db->limit($limit, $start);
        // $query = $this->db->get('party_center_details');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;


    }

}

?>