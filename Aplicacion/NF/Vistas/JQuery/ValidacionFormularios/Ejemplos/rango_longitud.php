	<html>
		<head>
			<title>.:: Requerido ::.</title>
			<?php echo NeuralScriptAdministrador::OrganizarScript(array('JS' => array('JQUERY', 'VALIDATE')), $Script = (isset($this->Script)) ? $this->Script : false); ?>
<script type="text/javascript">
	$.validator.setDefaults({
		submitHandler: function() { ''; }
	});
</script>
			<style>
				.error {
					font-family: verdana;
					font-size: 11px;
					font-weight: bold;
					color: red;
				}
			</style>
		</head>
		<body>
			<p>Ingrese texto entre 4 y 6 Caracteres</p>
			<form action="#" method="POST" id="form2" name="form2">
				<input type="text" name="requerido" id="requerido" /><br />
				<input type="submit" name="val" id="val" value="Validar" />
			</form>
		</body>
	</html>