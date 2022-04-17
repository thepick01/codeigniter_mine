<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {
    function index(){
        $this->load->view('head');
        $this->load->view('main');
        $this->load->view('footer');
    }
    function get($id){
        $this->load->view('head');
        $data = array('id'=>$id);
        $this->load->view('get', $data);
        $this->load->view('footer');
    }
}
?>