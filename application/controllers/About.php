<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class About extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
 public function index(){
    $this->load->view('about');
    }

 public function team(){
    $this->load->view('team');
    }

 public function testimonial(){
    $this->load->view('testimonial');
    }
}