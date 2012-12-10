			<section id="Ajax">
				<div class="page-header">
					<h1>JQuery - Validación - Ajax</h1>
					<h2>Administrador de Scripts</h2>
				</div>
				<h3>Introducción</h3>
				<p>Organizador de Scripts previamente configurados en el archivos de configuración de scripts <a href="<?php echo NeuralRutasApp::RutaURL('Configuracion/ConfiguracionScript'); ?>">(Ver Configuración de Scripts)</a></strong></p>
				<h3>Ejecución</h3>
				<p><strong>Nombre de la Clase:</strong> <code>NeuralScriptAdministrador</code></p>
				<br /><br />
				<p>
					<strong>Organizar Scripts</strong>
					<p>Organiza los diferentes Scripts configurados y ejecutados por las clases <strong>Ajax</strong>.</p>
					<p>Este administrador de scripts se utiliza directamente en la plantilla HTML.</p>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralScriptAdmin::OrganizarScript($Persistencia = false, $Script = false, $Aplicacion = 'DEFAULT');</li></ol></pre>
					<br />
					<code>$Persistencia</code>: Su valor por defecto es false, pero se puede generar un array asociativo para agregar los scripts que deben mantenerse cada vez que se genera una vista.<br />
					<strong>Array Asociativo:</strong> <code>array('JS' => array('JQUERY', 'VALIDATE'), 'CSS' => array('HOME', 'PREDEFINIDO'))</code>
					
					<br />
					<br />
					
					<code>$Script</code>: Su valor por defecto es false, pero este obtiene los datos como un array desde el controlador
					
					<div class="bs-docs-example">
						<code>Controlador</code>
						<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">public function Metodo() {</li><li class="L1">	$this->Vista->Script[] = NeuralJQueryAjax::CargarContenidoAutomatico(....);</li><li class="L2">}</li></ol></pre>
					</div>
					
					Se aplica en la vista de la siguiente forma
					
					<div class="bs-docs-example">
						<code>Vista</code>
						<pre class="prettyprint linenums" style="font-size: 11px;"><ol class="linenums"><li class="L0">&lt;html&gt;</li><li class="L1">	&lt;head&gt;</li><li class="L2">		&lt;title&gt; .:: Vista de la Aplicación :: &lt;/title&gt;</li><li class="L2">&lt;?php echo NeuralScriptAdmin::OrganizarScript(false, $Datos = (isset($this->Script) ? $this->Script : false)); ?&gt;</li><li class="L3">	&lt;/head&gt;</li><li class="L4">	&lt;body&gt;</li><li class="L4">	&lt;/body&gt;</li><li class="L5">&lt;/html&gt;</li></ol></pre>
					</div>
					
					<br /><br />
					<code>$Aplicacion</code>: valor por defecto DEFAULT, parametro donde se le indica de que aplicación debe tomar los datos correspondientes.
				</p>
				
			</section>