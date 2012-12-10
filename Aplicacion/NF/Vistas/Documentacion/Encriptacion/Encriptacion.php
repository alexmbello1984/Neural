			<section id="DocumentacionBD">
				<div class="page-header">
					<h1>Documentacion - Encriptaci�n</h1>
					<h2>Encriptaci�n de Cadenas de Texto</h2>
				</div>
				<h3>Introduccion</h3>
				<p>Clase Abstracta Creada para la encriptaci�n de 256 Bits de datos especificos.</p>
				<h3>Ejecucion</h3>
				<p><strong>Nombre de la Clase</strong>: <code>NeuralEncriptacion</code></p>
				<br /><br />
				<p>
					<strong>Encriptaci�n de Datos</strong>
					<div class="bs-docs-example">
						<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralEncriptacion::EncriptarDatos('Cadena de Texto a Encriptar')</li></ol></pre>
					</div>
				</p>
					
				<p>En la configuraci�n de la aplicaci�n se encuentra la opcion de <code>LLAVE_ENCRIPTACION</code> la cual se tomara para realizar el proceso de encriptaci�n y desencriptaci�n</p>
				
				<p>
					<strong>Des-Encriptaci�n de Datos</strong>
					<div class="bs-docs-example">
						<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralEncriptacion::DesencriptarDatos('Cadena de Texto a Encriptada')</li></ol></pre>
					</div>
				</p>
				<p>La encriptaci�n de datos se realiza con un resultado con caracteres especiales que el navegador no puede traducir, para esto y poder almacenar la informaci�n en bases de datos se codifica en <code>base64</code>.</p>
			</section>