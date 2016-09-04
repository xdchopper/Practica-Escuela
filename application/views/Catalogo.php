<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Catalogo</title>
</head>
<body>
	<form action="" method="post">
		<table border="1px">
			<tr>
				<td><label for="lblNombre" name="lblNombre">Nombre :</label></td>
				<td><input type="text" name="txtNombre"></td>
			</tr>
			<tr>
				<td><label for="lblEdad" name="lblEdad">Edad :</label></td>
				<td><input type="text" name="txtEdad"></td>
			</tr>
			<tr>
				<td><label for="lblSexo" name="lblSexo">Sexo :</label></td>
				<td>
					<select name="sltSexo" id="sltSexo">
						<option value="0">Seleccione...</option>
						<option value="M">Masculino</option>
						<option value="F">Femenino</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="btnAgregar" value="Agregar"></td>
			</tr>
		</table>
	</form>
</body>
</html>