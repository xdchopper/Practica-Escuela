<?php 
	if(isset($usuarioActualizar))
	{
		$id=$usuarioActualizar->ID;
		$nombre=$usuarioActualizar->Nombre;
		$edad=$usuarioActualizar->Edad;
		$sexo=$usuarioActualizar->Sexo;
		if($id==0)
		{
			$accion="create";
		}
		else
		{
			$accion="update";
		}	
	}
	else
	{
		$id='';
		$nombre='';
		$edad='';
		$sexo='';
		$accion="create";
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Catalogo</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.11.3.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</head>
<body>
	<div class="container">
		<?php echo validation_errors(); ?>
		<div class="panel panel-default">
				<div class="panel-heading">
						ALUMNO
				</div>
				<div class="panel-body">
					<form action="<?php echo site_url('/controlador/'.$accion.''); ?>" method="post">
						<input type="hidden" name="id" value="<?php echo $this->uri->segment(3); ?>">
						<table class="table table-striped table-hover table-bordered">
							<tr>
								<td><label for="lblNombre" name="lblNombre">Nombre :</label></td>
								<td><input type="text" name="txtNombre" value="<?php echo $nombre; ?>"></td>
							</tr>
							<tr>
								<td><label for="lblEdad" name="lblEdad">Edad :</label></td>
								<td><input type="text" name="txtEdad" value="<?php echo $edad; ?>"></td>
							</tr>
							<tr>
								<td><label for="lblSexo" name="lblSexo" value="<?php echo $sexo; ?>">Sexo :</label></td>
								<td>
									<select name="sltSexo" id="sltSexo">
										<?php 
									switch ($sexo) 
									{
										case '':
										?>
											<option value="" selected>Seleccione...</option>
											<option value="M">Masculino</option>
											<option value="F">Femenino</option>
										<?php
											break;
										case 'M':
										?>
											<option value="0">Seleccione...</option>
											<option value="M" selected>Masculino</option>
											<option value="F">Femenino</option>
										<?php
											break;
										case 'F':
										?>
											<option value="0">Seleccione...</option>
											<option value="M" >Masculino</option>
											<option value="F" selected>Femenino</option>
										<?php
											break;
									}
								 ?>
									</select>
								</td>
							</tr>
							<tr>
								<td colspan="2"><input type="submit" name="btnAceptar" value="Aceptar"></td>
							</tr>
						</table>
					</form>
				</div>
		</div>
	</div>
</body>
</html>