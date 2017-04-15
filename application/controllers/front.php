<?php

/**
 * @property Basic $basic
 * @property Eventance $eventance
 * 
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Front extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
        $this->load->model(array('basic'));
        $this->load->language('common');
        $this->load->helper('facebook');
        $response = array('error' => 0, 'success' => 0, 'js' => '', 'html' => '');
        $this->data['lang'] = $this->CI->config->item('language_abbr');
    }

    public function index() {
        $this->home();
    }

    public function home($id) {
        
    }

}
