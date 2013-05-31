<?php

class FriendsModel extends Model
{
    function FriendsModel()
    {
		parent::Model();
	}

	function TotalRec()
	{
	  $sql = "SELECT * FROM my_friends";
          $q = $this->db->query($sql);
          return $q->num_rows();
       }

	function my_friends($perPage)
	{
		$offset = $this->getOffset();
		$query ="SELECT * FROM  my_friends Order By f_id Desc LIMIT ".$offset.", ".$perPage;
		$q = $this->db->query($query);
		return $q->result();
	}

	function getOffset()
	{
        $page = $this->input->post('page');
        if(!$page):
        $offset = 0;
        else:
        $offset = $page;
        endif;
        return $offset;
    }
}
?>