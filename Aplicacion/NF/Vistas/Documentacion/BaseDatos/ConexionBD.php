			<section id="DocumentacionBD">
				<div class="page-header">
					<h1>Documentacion - Bases de Datos</h1>
					<h2>Conexion Base Datos</h2>
				</div>
				<h3>Introduccion</h3>
				<p>Para la aplicacion de la conexion a la base de datos debe tener encuentra que la aplicacion ya debe estar configurada en la configuracion general del framework, si no lo ha realizado por favor ingresar <a href="<?php echo NeuralRutasApp::RutaURL('Configuracion'); ?>">Aqui (Configuraciones)</a></p>
				<h3>Ejecucion</h3>
				<p>Actualmente la clase correspondiente es llamada <code>NeuralConexionBaseDatos</code>, el cual tiene un metodo llamado <code>ObtenerConexionBase($Aplicacion)</code>.</p>
				<p>Una de los parametros necesarios es <code>$Aplicacion</code>, el nombre de la aplicacion parametrizada en el archivo <code>Aplicacion/ConfiguracionBasesDatos.yaml</code>.</p>
				<div class="bs-docs-example">
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralConexionBaseDatos::ObtenerConexionBase('MI_APLICACION)</li></ol></pre>
				</div>
				<p>La funcionalidad de generar una conexion a la base de datos a traves de esta clase es que manejara todas las opciones que maneja Doctrine 2, ya que esta clase genera una conexion directa a la libreria de Doctrine.</p>
				<p>Para mayor informacion de Doctrine en la documentacion en su <a href="http://www.doctrine-project.org/" target="__blank"">pagina web</a></p>
			</section>