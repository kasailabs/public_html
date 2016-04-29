<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $dataTemplate['header'] = $this->load->view('index/header_view', FALSE, TRUE);
        $dataTemplate['content'] = $this->load->view('index/content_view', FALSE, TRUE);
        // $dataTemplate['content_extra'] = $this->load->view('index/content_extra_view', FALSE, TRUE);
        $this->load->view('template', $dataTemplate);
    }

    public function acercade() {
        $dataTemplate['header'] = $this->load->view('index/header_view', FALSE, TRUE);
        $dataTemplate['content'] = $this->load->view('index/content_view', FALSE, TRUE);
        // $dataTemplate['content_extra'] = $this->load->view('index/content_extra_view', FALSE, TRUE);
        $this->load->view('template', $dataTemplate);
    }
    
    public function servicios() {
        $dataTemplate['header'] = $this->load->view('index/header_view', FALSE, TRUE);
        $dataTemplate['content'] = $this->load->view('index/content_view', FALSE, TRUE);
        // $dataTemplate['content_extra'] = $this->load->view('index/content_extra_view', FALSE, TRUE);
        $this->load->view('template', $dataTemplate);
    }
    
    public function portafolio() {
        $dataTemplate['header'] = $this->load->view('index/header_view', FALSE, TRUE);
        $dataTemplate['content'] = $this->load->view('index/content_view', FALSE, TRUE);
        // $dataTemplate['content_extra'] = $this->load->view('index/content_extra_view', FALSE, TRUE);
        $this->load->view('template', $dataTemplate);
    }
    
    public function colaboradores() {
        $dataTemplate['header'] = $this->load->view('index/header_view', FALSE, TRUE);
        $dataTemplate['content'] = $this->load->view('index/content_view', FALSE, TRUE);
        // $dataTemplate['content_extra'] = $this->load->view('index/content_extra_view', FALSE, TRUE);
        $this->load->view('template', $dataTemplate);
    }
    
    public function contacto() {
        $dataTemplate['header'] = $this->load->view('index/header_view', FALSE, TRUE);
        $dataTemplate['content'] = $this->load->view('index/content_view', FALSE, TRUE);
        // $dataTemplate['content_extra'] = $this->load->view('index/content_extra_view', FALSE, TRUE);
        $this->load->view('template', $dataTemplate);
    }

}
