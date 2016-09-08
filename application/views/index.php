<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Catalogo</title>
	<script>
		function Agregar()
		{
			window.location="<?php echo site_url('/controlador/agregar'); ?>";
		}
		function Editar()
		{
			window.location="<?php echo site_url('/controlador/update'); ?>";
		}
	</script>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.11.3.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</head>
<body>
	<?php echo validation_errors(); ?>
	<?php echo form_open('controlador/read'); ?>
	<form action="" method="post">
		<table>
			<tr>
				<td><label for="lblBuscar" name="lblBuscar">Buscar : </label></td>
				<td><input type="text" name="txtBuscar"></td>
				<td><input type="submit" name="btnBuscar" value="Buscar"></td>
				<td></td>
				<td><input type="button" name="btnAgregar" value="Agregar" onclick="Agregar();"></td>
			</tr>
		</table>
	</form>
	</br>
	<table border="1px">
		<?php if($usuarios){ ?>
			<tr>
				<th><label for="lblID">ID</label></th>
				<th><label for="lblNombre">Nombre</label></th>
				<th><label for="lblEdad">Edad</label></th>
				<th><label for="lblSexo">Sexo</label></th>
			</tr>
			<?php foreach ($usuarios as $usuario){ ?>
				<tr>
					<td><?php echo $usuario->ID ?></td>
					<td><label for="lbl<?php echo $usuario->ID ?>" name="lbl<?php echo $usuario->ID ?>" value="<?php echo $usuario->Nombre ?>"><?php echo $usuario->Nombre ?></label></td>
					<td><?php echo $usuario->Edad ?></td>
					<td><?php echo $usuario->Sexo ?></td>
					<td><a href="<?php echo site_url('/controlador/llenarCatalogo/'); ?><?php echo $usuario->ID ?>">Editar</a></td>
					<td><a href="<?php echo site_url('/controlador/delete/'); ?><?php echo $usuario->ID ?>">Eliminar</a></td>
				</tr>
			<?php } ?>
		<?php } ?>
	</table>
</body>
</html>