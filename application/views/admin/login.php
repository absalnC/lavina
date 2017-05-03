<div>
	<h1>Esta seccion es de acceso restringido, favor de iniciar 
	sesion</h1>
	<h1><?php echo $msg; ?></h1>
	<form action="<?php echo base_url("admin/login/attempt")?>" method= "post">
		<input type ="text " name = "user" placeholder="usuario"/>
		<input type="text" name="password" placeholder="contrasena"/>
		<input type="submit" name="submit" value = "Enviar">
	</form>
</div>