<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class HomeModel extends CI_model {

	function get_service() {
        $query = $this->db->get('gn_service');
        
        return $query->result();
    }

    function get_team() {
    	$query = $this->db->query('SELECT 
    								a.name AS name, b.name AS jobdesc, email, avatar
    								FROM pf_team a JOIN pf_jobdesc b
    								ON a.id_jobdesc = b.id
    								ORDER BY a.id ASC');
        
        return $query->result();
    }

    function get_portfolio() {
    	$query = $this->db->query('SELECT 
    								a.name AS name, b.name AS type, featured_image
    								FROM pf_portfolio a JOIN pf_type b
    								ON a.id_type = b.id
    								WHERE a.status = 1
    								ORDER BY a.date_finish DESC LIMIT 4');
        
        return $query->result();
    }
}