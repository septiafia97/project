<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Booking extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
 public function index(){
    $this->load->view('booking');
    }

 public function kirim(){
   $kirim = "6285842728404";

   if (isset($_POST['submit'])) 
   {
   $name          = $this->input->post('name');
   $whatsapp      = $this->input->post('whatsapp');
   $datetime      = $this->input->post('datetime');
   $alamat     = $this->input->post('alamat');
   $message    = $this->input->post('message');

   header("location:https://api.whatsapp.com/send?phone=$kirim&text=Nama:%20$name%20%0DWhatsapp:%20$whatsapp%20%0DTanggal:%20$datetime%20%0DAlamat:%20$alamat%20%0DPesanan:%20$message");
   }
   else {
      echo "
      <script>
         window.location=history.go(-1);
      </script>
      ";
   }
   
   }

}
