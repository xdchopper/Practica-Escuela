<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Catalogo</title>
</head>
<body>
	<?php echo validation_errors(); ?>

	<form action="<?php if(isset($_POST["sltOpcion"])) {switch ($_POST["sltOpcion"]) {
		case '0':
			break;
		case 'C':
			echo site_url('/controlador/create');
			break;
		case 'R':
			echo "localhost:8000/prueba/"."index.php/controlador/read";
			break;
		case 'U':
			echo "localhost:8000/prueba/"."index.php/controlador/update";
			break;
		case 'D':
			echo "localhost:8000/prueba/"."index.php/controlador/delete";
			break;
		default:
			# code...
			break;
	}}?>" method="post">
		<label for="lblCodigo">Código : </label>
		<input type="text" name="txtCodigo" v>
		<br/>
		<br/>
		<label for="lblNombre">Nombre : </label>
		<input type="text" name="txtNombre">
		<br/>
		<br/>
		<label for="lblOpcion">Opcion</label>
		<select name="sltOpcion" id="sltOpcion">
			<option value="0">Seleccione...</option>
			<option value="C">Crear</option>
			<option value="R">Read</option>
			<option value="U">Update</option>
			<option value="D">Delete</option>
		</select>
		<br/>
		<br/>
		<input type="submit" name="btnAceptar" text="Aceptar">
	</form>
</body>
</html>
