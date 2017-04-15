<?php
require __DIR__ . "/sendgrid-php/sendgrid-php.php";

function find_info($templates,$post){
	$CI = & get_instance();
	$response = array();
	switch ($templates) {
	     case 'informacion_canje':
	    	$response['subject'] = 'Información de Canje de producto';
	        $response['info'] = $post;
	        $response['html']= $CI->load->view('email/readme/canje',$response,TRUE);
	}
	return $response;
}
function sendEmail ($templates,$post,$to,$json){
	$CI = & get_instance();
	
	$sendgrid = new SendGrid('SG.IgFFAsQ9SAKi40sRV1FEzA.qsxSAxZ4RistJRLTVNV8x7E-eHENDiJfYlHlmiME7Fs',array("turn_off_ssl_verification" => true));

	$info = find_info($templates,$post);

	$email = new SendGrid\Email();
	$email
	    ->addTo($to)
	    ->setFrom('info@clubcasinoiguazu.com.ar')
	    ->setSubject($info['subject'])
	    ->setHtml($info['html'])
	;

	$response = $sendgrid->send($email);
	if ($json){
		if ($response->code == 200) {
			//send the message, check for errors
			return array('status' => true, 'error' => 0 ,'msg' => 'Formulario enviado correctamente.');
		}else{
			 return array('status' => false, 'error' => 0 ,'msg' => 'Error al enviar los datos');	
		}
	}
}
