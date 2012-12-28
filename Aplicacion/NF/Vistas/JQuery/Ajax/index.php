			<section id="Ajax">
				<div class="page-header">
					<h1>JQuery - Validación - Ajax</h1>
					<h2>Ajax</h2>
				</div>
				<h3>Introducción</h3>
				<p>Procedimientos pre-creados de ejecucion de datos tipo Ajax.</strong></p>
				<h3>Ejecución</h3>
				<p><strong>Nombre de la Clase:</strong> <code>NeuralJQueryAjax</code></p>
				<br /><br />
				<p>
					<strong>Ajax Select Cargar Datos en etiqueta HTML Metodo GET</strong>
					<p>Genera una peticion ajax para regresar datos segun donde sean aplicados</p>
					<code>$IdPrincipal</code>: ID del select donde se tomaran los datos.<br />
					<code>IdSecundario</code>: ID donde se cargaran los datos, este puede ser un div, un input.<br />
					<code>$URL</code>: Dirección donde se procesara el dato enviado.<br />
					<code>$DatoEnviado</code>: Identificador del GET que se esta enviando.<br />
					<code>$Impresion</code>: valor por defecto 0 para ser utilizado con el administrador de scripts.<br /><br />
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralJQueryAjax::SelectCargarPeticionGET($IdPrincipal = false, $IdSecundario = false, $URL = false, $DatoEnviado = false, $Impresion = 0);</li></ol></pre>
				</p>
				
				<br />
				<p>
					<strong>Ajax Select Cargar Datos en etiqueta HTML Metodo POST</strong>
					<p>Genera una peticion ajax para regresar datos segun donde sean aplicados</p>
					<code>$IdPrincipal</code>: ID del select donde se tomaran los datos.<br />
					<code>$IdSecundario</code>: ID donde se cargaran los datos, este puede ser un div, un input.<br />
					<code>$URL</code>: Dirección donde se procesara el dato enviado.<br />
					<code>$DatoEnviado</code>: Identificador del POST que se esta enviando.<br />
					<code>$Impresion</code>: valor por defecto 0 para ser utilizado con el administrador de scripts.<br /><br />
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralJQueryAjax::SelectCargarPeticionPOST($IdPrincipal = false, $IdSecundario = false, $URL = false, $DatoEnviado = false, $Impresion = 0);</li></ol></pre>
				</p>
				
				<br />
				<p>
					<strong>Ajax Enviar Datos POST a través de Link</strong>
					<p>Genera una peticion ajax para regresar datos segun donde sean aplicados</p>
					<code>$IDLink</code>: ID del link donde se enviaran los datos.<br />
					<code>$IDMostrar</code>: ID donde se cargaran los datos, este puede ser un div, un input.<br />
					<code>$URL</code>: Dirección donde se procesara el dato enviado.<br />
					<code>$DatosEnviados</code>: array asociativo donde se incluiran los datos a enviar por la petició AJAX <code>array('Usuario' => 'admin', 'Permisos' => 'Tipo_2');</code>.<br />
					<code>$Impresion</code>: valor por defecto 0 para ser utilizado con el administrador de scripts.<br /><br />
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralJQueryAjax::LinkEnviarPeticionPOST($IDLink, $IDMostrar, $URL, $DatosEnviados = false, $Impresion = 0);</li></ol></pre>
				</p>
				
				<br />
				<p>
					<strong>Ajax Enviar Formulario POST Sin Recargar Página</strong>
					<p>Genera una peticion ajax para regresar datos segun donde sean aplicados</p>
					<code>$IdFormulario</code>: ID del formulario de referencia.<br />
					<code>$IdRespuesta</code>: ID donde se cargaran los datos, este puede ser un div, un input.<br />
					<code>$URL</code>: Dirección donde se procesara el dato enviado.<br />
					<code>$Formulario</code>: valor por defecto false para enviar formulario, valor true para ser utilizado con el metodo <strong>SubmitHandler</strong> de la Validación de Formularios.<br />
					<code>$Aplicacion</code>: valor por defecto DEFAULT, se puede agregar el nombre de la configuración de la aplicacion configurada.<br />
					<code>$DataType</code>: valor por defecto html, se puede agregar los tipos soportados JQuery.<br />
					<code>$Impresion</code>: valor por defecto 0 para ser utilizado con el administrador de scripts.<br /><br />
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralJQueryAjax::EnviarFormularioPOST($IdFormulario, $IdRespuesta, $URL, $Formulario = false, $Aplicacion = 'DEFAULT', $DataType = 'html', $Impresion = 0);</li></ol></pre>
				</p>
				
				<br />
				<p>
					<strong>Ajax Cargar Contenido Dinamicamente en Etiqueta HTML</strong>
					<p>Genera una peticion ajax para regresar datos segun donde sean aplicados</p>
					<code>$IDCargar</code>: ID de la Etiqueta de referencia donde se cargara el contenido.<br />
					<code>$URL</code>: Dirección donde provienen los datos.<br />
					<code>$Impresion</code>: valor por defecto 0 para ser utilizado con el administrador de scripts.<br /><br />
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralJQueryAjax::CargarContenidoAutomatico($IDCargar = false, $URL = false, $Impresion = 0);</li></ol></pre>
				</p>
				
				<br />
				<p>
					<strong>Ajax Cargar Contenido Dinamicamente en Etiqueta HTML Enviando Petición POST</strong>
					<p>Genera una peticion ajax para regresar datos segun donde sean aplicados</p>
					<code>$IDCargar</code>: ID de la Etiqueta de referencia donde se cargara el contenido.<br />
					<code>$URL</code>: Dirección donde provienen los datos.<br />
					<code>$DatosEnviados</code>: array asociativo donde se incluiran los datos a enviar por la petición AJAX <code>array('Usuario' => 'admin', 'Permisos' => 'Tipo_2');</code>.<br /> 
					<code>$Impresion</code>: valor por defecto 0 para ser utilizado con el administrador de scripts.<br /><br />
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralJQueryAjax::CargarContenidoAutomaticoPeticionPOST($IDCargar = false, $URL = false, $DatosEnviados = false, $Impresion = 0);</li></ol></pre>
				</p>
				
				<br />
				<p>
					<strong>Ajax Cargar Contenido Dinamicamente en Etiqueta HTML por Intervalo de Tiempo</strong>
					<p>Genera una peticion ajax para regresar datos segun donde sean aplicados</p>
					<code>$IDCargar</code>: ID de la Etiqueta de referencia donde se cargara el contenido.<br />
					<code>$URL</code>: Dirección donde provienen los datos.<br />
					<code>$Tiempo</code>: Valor por Defecto 300 Segundos (5 Minutos), cargara la información en este periodo de tiempo.<br />
					<code>$Impresion</code>: valor por defecto 0 para ser utilizado con el administrador de scripts.<br /><br />
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralJQueryAjax::CargarContenidoAutomaticoIntervaloTiempo($IDCargar = false, $URL = false, $Tiempo = 300, $Impresion = 0);</li></ol></pre>
				</p>
				
				<br />
				<p>
					<strong>Ajax Cargar Contenido Dinamicamente en Etiqueta HTML por Intervalo de Tiempo Enviando Petición POST</strong>
					<p>Genera una peticion ajax para regresar datos segun donde sean aplicados</p>
					<code>$IDCargar</code>: ID de la Etiqueta de referencia donde se cargara el contenido.<br />
					<code>$URL</code>: Dirección donde provienen los datos.<br />
					<code>$DatosEnviados</code>: array asociativo donde se incluiran los datos a enviar por la petición AJAX <code>array('Usuario' => 'admin', 'Permisos' => 'Tipo_2');</code>.<br />
					<code>$Tiempo</code>: Valor por Defecto 300 Segundos (5 Minutos), cargara la información en este periodo de tiempo.<br />
					<code>$Impresion</code>: valor por defecto 0 para ser utilizado con el administrador de scripts.<br /><br />
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralJQueryAjax::CargarContenidoAutomaticoIntervaloTiempoPeticionPOST($IDCargar = false, $URL = false, $DatosEnviados = false, $Tiempo = 300, $Impresion = 0);</li></ol></pre>
				</p>
				
			</section>