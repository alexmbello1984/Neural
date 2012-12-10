			<section id="DocumentacionBD">
				<div class="page-header">
					<h1>Documentacion - Encriptación</h1>
					<h2>Encriptación de Cadenas de Texto</h2>
				</div>
				<h3>Introduccion</h3>
				<p>Clase Abstracta Creada para la encriptación de 256 Bits de datos especificos.</p>
				<h3>Ejecucion</h3>
				<p><strong>Nombre de la Clase</strong>: <code>NeuralEncriptacion</code></p>
				<br /><br />
				<p>
					<strong>Encriptación de Datos</strong>
					<div class="bs-docs-example">
						<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralEncriptacion::EncriptarDatos('Cadena de Texto a Encriptar')</li></ol></pre>
					</div>
				</p>
					
				<p>En la configuración de la aplicación se encuentra la opcion de <code>LLAVE_ENCRIPTACION</code> la cual se tomara para realizar el proceso de encriptación y desencriptación</p>
				
				<p>
					<strong>Des-Encriptación de Datos</strong>
					<div class="bs-docs-example">
						<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralEncriptacion::DesencriptarDatos('Cadena de Texto a Encriptada')</li></ol></pre>
					</div>
				</p>
				<p>La encriptación de datos se realiza con un resultado con caracteres especiales que el navegador no puede traducir, para esto y poder almacenar la información en bases de datos se codifica en <code>base64</code>.</p>
			</section>