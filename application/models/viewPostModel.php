<?php

class ViewPostModel extends CI_Model {

    function view_post() {
        $this->db->select('party_center_details.pc_id,images.pc_id,images.pic1,party_center_details.pc_name,location,price,space,guest_coverage,bride_stage,dressing_room,wash_room,rest_room,music_stage,cultural_programme ');
        $this->db->from('party_center_details');
        $this->db->join('images', 'images.pc_id = party_center_details.pc_id', 'left');
        $this->db->order_by('party_center_details.location');
        $q = $this->db->get();
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function content_search() {

        $get_search = $this->input->post('search');


        $this->db->select('party_center_details.pc_id,images.pc_id,images.pic1,party_center_details.pc_name,location,menu1_price,space_rent,space,guest_coverage,bride_stage,dressing_room,wash_room,rest_room,music_stage,cultural_programme ');
        $this->db->from('party_center_details');
        $this->db->join('images', 'images.pc_id = party_center_details.pc_id', 'left');
        $this->db->join('booking_list', 'booking_list.pc_id = party_center_details.pc_id', 'left');


        $this->db->where('MATCH (party_center_details.pc_name) AGAINST ("' . $get_search . '")', NULL, FALSE);
        $this->db->or_where('MATCH (party_center_details.address1) AGAINST ("' . $get_search . '")', NULL, FALSE);
        //$this->db->or_where('MATCH(party_center_details.location) AGAINST ("'.$get_search.'")', NULL, FALSE);
        //$this->db->where('party_center_details.pc_name', $get_search);

        $this->db->group_by('party_center_details.pc_id');
        $this->db->order_by('party_center_details.location');


        $q = $this->db->get();


        $data = $q->result();
        return $data;
    }

    function search() {

        $where2 = '';
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

        if ($where2 != '') {
            $this->db->where($where2);
        }

        $this->db->group_by('party_center_details.pc_id');
        $this->db->order_by('party_center_details.location');
        $q = $this->db->get();
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function centerOverview() {
        $seg = $this->uri->segment(3);
        $this->db->select('i.pic1,i.pic2,i.pic3,i.pic4,pcd.pc_name,pcd.address1,pcd.menu1,pcd.menu1_price,pcd.space_rent,pcd.stage_price,c.category_name,
            pcd.party_type,pcd.attractive_points,pcd.building_structure,pcd.space,pcd.guest_coverage,pcd.bride_stage,pcd.dressing_room,pcd.wash_room,pcd.rest_room,pcd.music_stage,
            pcd.cultural_programme,pcd.deshes,pcd.decoration,pcd.parlor_salon,pcd.food_item,pcd.buffet_items,
            pcd.buffet_service,pcd.lighting,pcd.stage,pcd.dinning,pcd.gate,pcd.internal_security,pcd.external_security,pcd.special_service,
            pcd.multimedia,pcd.beauti_parlar_salon,pcd.tin,pcd.trade,pcd.papers,pcd.emergency,pcd.contract');
        $this->db->from('party_center_details pcd');
        $this->db->join('images i', 'i.pc_id = pcd.pc_id', 'left');
        $this->db->join('category c', 'c.category_id = pcd.category_id', 'left');
        $this->db->join('booking_list bl', 'bl.pc_id = pcd.pc_id', 'left');
        $where2 = 'pcd.pc_id =' . $seg;
        $this->db->where($where2);
        $this->db->order_by('pcd.location');
        $this->db->group_by('pcd.pc_id');


        $q = $this->db->get();
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }

}

?>