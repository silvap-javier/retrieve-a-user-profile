<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class MY_Form_validation extends CI_Form_validation {
    /**
     * MY_Form_validation::alpha_extra().
     * Alpha-numeric with periods, underscores, spaces and dashes.
     */
    function is_youtube($str) {
        $this->CI->form_validation->set_message('alpha_extra', 'The %s may only contain alpha-numeric characters, spaces, periods, underscores & dashes.');
        if (preg_match("/((http\:\/\/){0,}(www\.){0,}(youtube\.com){1} || (youtu\.be){1}(\/watch\?v\=[^\s]){1})/", $str) == 1){
          $valid =  true;
          }else{
             $valid =  false;
         }
         echo $valid;
         die();
         return $valid;
     }
    // add more function to apply custom rules.
 }