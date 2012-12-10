	<section id="ConfigScript">
		<div class="page-header">
			<h1>Configuracion de Script</h1>
		</div>
		<p>
			<strong>Neural Framework</strong> utiliza archivos de extension <strong>YAML</strong> el cual genera los parametros necesarios para la configuracion del acceso a los script.
			<br /><br />
			Aqui generamos unos parametros basicos de los scripts que necesita propagar sobre las aplicaciones o manetener archivos script persistentes sin tener que modificar el codigo fuente en cada una de las vistas propuestas.
			<br /><br />
			Mostraremos a continuacion el archivo de configuracion:
		</p>
		<div class="bs-docs-example">
			<div class="dropdown clearfix">
				<code>
					<pre>
#Administrador de Scripts de las aplicaciones que se encuentran en la carpeta Public
DEFAULT:
	JS:
		JQUERY:			'Public/js/jquery-1.8.3.Dev.js'
		VALIDATE:		'Public/js/jquery.validate.js'
	CSS:
		HOME:			'Public/Neural/css/styles.css'
	LOADER:
		LOADER: 		'Public/images/Load/neural_load.gif'
		CLASS:
			IMAGEN:		{ CLASS: 'DESACTIVADO', STYLE: 'DESACTIVADO' }
			CONTENEDOR:	{ CLASS: 'DESACTIVADO', STYLE: 'DESACTIVADO' }
		STYLE:
			IMAGEN:		{ border: '0px', font-family: 'verdana', width: '25px', height: '25px' }
			CONTENEDOR:	{ border: '0px', font-family: 'verdana', text-align: 'center' }

MI_APLICACION:
	JS:
		JQUERY:			'Public/js/jquery-1.8.3.Dev.js'
		VALIDATE:		'Public/js/jquery.validate.js'
	CSS:
		HOME:			'Public/Neural/css/styles.css'
	LOADER:
		LOADER: 		'Public/images/Load/neural_load.gif'
		CLASS:
			IMAGEN:		{ CLASS: 'DESACTIVADO', STYLE: 'DESACTIVADO' }
			CONTENEDOR:	{ CLASS: 'DESACTIVADO', STYLE: 'DESACTIVADO' }
		STYLE:
			IMAGEN:		{ border: '0px', font-family: 'verdana' }
			CONTENEDOR:	{ border: '0px', font-family: 'verdana' }
					</pre>
				</code>
			</div>
		</div>
		
		<h2>Archivo de Configuracion</h2>
		
		<h3>Marcador Inicial</h3>
		<p>El archivo de configuracion de script tiene el marcador <strong>DEFAULT</strong> que identifica la aplicación que se encuentra configurada.</p>
		<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pun">#Administrador de Scripts de las aplicaciones que se encuentran en la carpeta Public</span></li><li class="L1"><span class="tag">DEFAULT:</span></li></ol></pre>
		
		<h3>Aplicacion DEFAULT</h3>
		<p>Este marcador de aplicacion da el punto de acceso cuando el usuario ingresa al <strong>index</strong> de la aplicacion. si lo desea puede configurar los parametros correspondientes de una aplicacion existente o crear una nueva conexion. <strongNO DEBE ELIMINARSE></strong></p>
		<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pun">#Administrador de Scripts de las aplicaciones que se encuentran en la carpeta Public</span></li><li class="L1"><span class="atv">DEFAULT:</span></li><li class="L2"><span class="atv">	JS:</span></li><li class="L2"><span class="atv">		JQUERY:			'Public/js/jquery-1.8.3.Dev.js'</span></li><li class="L2"><span class="atv">		VALIDATE:		'Public/js/jquery.validate.js'</span></li><li class="L2"><span class="atv">	CSS:</span></li><li class="L2"><span class="atv">		HOME:			'Public/Neural/css/styles.css'</span></li><li class="L2"><span class="atv">	LOADER:</span></li><li class="L2"><span class="atv">		LOADER: 		'Public/images/Load/neural_load.gif'</span></li><li class="L2"><span class="atv">			CLASS:</span></li><li class="L2"><span class="atv">				IMAGEN:		{ CLASS: 'DESACTIVADO', STYLE: 'DESACTIVADO' }</span></li><li class="L2"><span class="atv">				CONTENEDOR:	{ CLASS: 'DESACTIVADO', STYLE: 'DESACTIVADO' }</span></li><li class="L2"><span class="atv">			STYLE:</span></li><li class="L2"><span class="atv">				IMAGEN:		{ border: '0px' }</span></li><li class="L2"><span class="atv">				CONTENEDOR:	{ border: '0px' }</span></li></ol></pre>
		
		<h5>JS</h5>
		<p>Marcador de los diferentes archivos con extensión <strong>js</strong> los cuales sean necesarios para la aplicación que desean configurar.</p>
		
		<h5>CSS</h5>
		<p>Marcador de los diferentes archivos con extensión <strong>CSS</strong> los cuales sean necesarios para la aplicación que desean configurar.</p>
		
		<h5>LOADER</h5>
		<p>Marcador de configuración de imagen loader de espera de las acciones de <strong>Ajax</strong></p>
	</section>