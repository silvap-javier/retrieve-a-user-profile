<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->
  <head>
      
  </head>
	<body>
		<?php if(!empty($user)){
			echo 'Hola : ';
			var_dump($user);
		}else{?>
				<form method="GET">
					<label>Id de usuario a buscar</label>
					<input type="text" name="id">
				</form>
		<?}?>
  </body>
</html>