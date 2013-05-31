<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pages extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        //$this->load->model("countries");
        $this->load->library("pagination");
    }

    public function index() {
        $this->load->model("home");
        $this->load->database();
        $this->load->helper('url');
        $this->load->view('functions/function.php');
        $config = array();
        $config["base_url"] = base_url() . "index.php/pages/index";
        $config["total_rows"] = $this->home->record_count();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);
        $this->uri->segment(3);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->home->
        fetch_party($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $this->load->view("home", $data);
    }
    
    public function search() {
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->view('functions/function.php');
        $this->load->model('viewPostModel');
        $data = "";
        $data['results'] = $this->viewPostModel->search();
         $this->uri->segment(3);
        $data["links"]='';
        $this->load->view('home', $data);
    }
        public function content_search() {
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->view('functions/function.php');
        $this->load->model('viewPostModel');
        $data = "";
        
        $data['results'] = $this->viewPostModel->content_search();
         $this->uri->segment(3);
        $data["links"]='';
        $this->load->view('home', $data);
    }

    public function centerOverview() {
        $this->load->database();
        $this->load->model('viewPostModel');
        $data = "";
        $data['value'] = $this->viewPostModel->centerOverview();
        //echo '<pre>';
        //print_r($data);
         $this->uri->segment(3);
        $this->load->view('functions/function.php');
        $this->load->view('centerOverview', $data);
    }
    //// START 5-2-2013 ////////
     public function party_list() {
        $this->load->model("home");
        $this->load->database();
        $this->load->helper('url');
        $this->load->view('functions/function.php');
        $config = array();
        $config["base_url"] = base_url() . "index.php/pages/party_list";
        $config["total_rows"] = $this->home->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);
        $this->uri->segment(3);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->home->
        fetch_party($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $this->load->view("party_list", $data);
    }   
    
    public function about_us() {
        $this->load->view('functions/function.php');
        $this->load->view('about_us');
    }

 //// END 5-2-2013 ////////



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */