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
	<div class="container">
		<?php echo validation_errors(); ?>
		<?php echo form_open('controlador/read'); ?>
		<div class="row">
			<div class="col-sm-4">
				<form action="" method="post">
					<div class="input-group">
						<input type="text" name="txtBuscar" class="form-control" placeholder="Buscar">
						<div class="input-group-btn">
							<input type="submit" name="btnBuscar" value="Buscar" class="btn btn-default">
							<input type="button" name="btnAgregar" value="Agregar" onclick="Agregar();" class="btn btn-default">
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-8"></div>
		</div>
		</br>
		<div class="panel panel-default">
			<div class="panel-heading">
				ALUMNOS
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover table-bordered">
					<?php if($usuarios){ ?>
						<tr style="background-color:#81BEF7">
							<th><label for="lblID">ID</label></th>
							<th><label for="lblNombre">Nombre</label></th>
							<th><label for="lblEdad">Edad</label></th>
							<th><label for="lblSexo">Sexo</label></th>
							<th colspan="2" ><label>Opciones</label></th>
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
			</div>	
		</div>
	</div>
</body>
</html>