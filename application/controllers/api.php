<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Api extends REST_Controller
{
	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->CI = & get_instance();
        $this->load->model(array('basic'));
        $this->load->helper('facebook');
        $this->data['lang'] = $this->CI->config->item('language_abbr');
    }


    function user_get()
    {   

        if(!$this->get('id'))
        {   

            $this->response('Falta el Id de FB', 400);
        }
        
        $user = $this->basic->get_where('users',array('id' => $this->get('id')));
        $user = $user->result_array();
        if (!empty($user)){
            $user = $user[0];
        }else{
            $fb_connect = facebook_connect();
            $user = get_user_by_id($fb_connect,$this->get('id'));
            $user_save = array();
            
            $user_save['id'] = $user['id'];
            $user_save['first_name'] = $user['first_name'];
            $user_save['last_name'] = $user['last_name'];
            $user_save['link'] = $user['link'];

            $this->basic->save('users','sinid',$user_save);
        }
        
        if($user)
        {
            $this->response($user, 200); // 200 being the HTTP response code
        }else{
            $this->response('No se Encontro el Id en FB', 404);
        }
    }

    function all_users_get(){
        $users = $this->basic->get_all('users');
        $users = $users->result_array();
        $this->response($users, 200); // 200 being the HTTP response code
    }
}