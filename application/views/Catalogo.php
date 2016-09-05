<?php 
	if(isset($usuarioActualizar))
	{
		$id=$usuarioActualizar->ID;
		$nombre=$usuarioActualizar->Nombre;
		$edad=$usuarioActualizar->Edad;
		$sexo=$usuarioActualizar->Sexo;
		$accion="update";
	}
	else
	{
		$id='';
		$nombre='';
		$edad='';
		$sexo='0';
		$accion="create";
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Catalogo</title>
</head>
<body>
	<?php echo validation_errors(); ?>
	<form action="<?php echo site_url('/controlador/'.$accion.''); ?>" method="post">
		<input type="hidden" name="id" value="<?php echo $this->uri->segment(3); ?>">
		<table border="1px">
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
						case '0':
						?>
							<option value="0" selected>Seleccione...</option>
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
</body>
</html>