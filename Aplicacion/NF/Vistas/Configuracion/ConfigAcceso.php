	<section id="ConfigAcceso">
		<div class="page-header">
			<h1>Configuracion de Accesos</h1>
		</div>
		<p>
			<strong>Neural Framework</strong> utiliza archivos de extension <strong>YAML</strong> el cual genera los parametros necesarios para el enrutamiento de las aplicaciones correspondientes.
			<br /><br />
			Mostraremos a continuacion el archivo de configuracion:
		</p>
		<div class="bs-docs-example">
			<div class="dropdown clearfix">
				<code>
					<pre>
#Centro de Registro de Acceso a Aplicaciones
APLICACIONES:
#Aplicacion Default es aquel que cargara si no se escribe el nombre de la aplicacion
	DEFAULT:
		CARPETA: 		'Default/'
		LLAVE_ENCRIPTACION:	'N3ur4l3ncr1pt4c10n'
		CONFIGURACION: 		'Configuracion/'
		AYUDAS: 		'Helpers/'
		CONTROLADORES: 		'Controladores/'
		MODELOS: 		'Modelos/'
		VISTAS: 		'Vistas/'

	MI_APLICACION:
		CARPETA: 		'Mi_Aplicacion/'
		LLAVE_ENCRIPTACION:	'N3ur4l3ncr1pt4c10n'
		CONFIGURACION: 		'Configuracion/'
		AYUDAS: 		'Helpers/'
		CONTROLADORES: 		'Controladores/'
		MODELOS: 		'Modelos/'
		VISTAS: 		'Vistas/'
					</pre>
				</code>
			</div>
		</div>
		
		<h2>Archivo de Configuracion</h2>
		
		<h3>Marcador Inicial</h3>
		<p>El archivo de configuracion de accesos tiene el marcador <strong>APLICACIONES</strong> que identifica que tipo de proceso debe manejar el framework como identificador de rutas y no debe modificarse.</p>
		<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pun">#Centro de Registro de Acceso a Aplicaciones</span></li><li class="L1"><span class="tag">APLICACIONES:</span></li></ol></pre>
		
		<h3>Aplicacion DEFAULT</h3>
		<p>Este marcador de aplicacion da el punto de acceso cuando el usuario ingresa al <strong>index</strong> de la aplicacion. si lo desea puede configurar los parametros correspondientes de una aplicacion existente o crear una nueva aplicacion que redireccione correctamente al usuario. <strongNO DEBE ELIMINARSE></strong></p>
		<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pun">#Aplicacion Default es aquel que cargara si no se escribe el nombre de la aplicacion</span></li><li class="L1"><span class="atv">DEFAULT:</span></li><li class="L2"><span class="atv">	CARPETA: 		'Default/'</span></li><li class="L3"><span class="atv">	LLAVE_ENCRIPTACION: 	'N3ur4l3ncr1pt4c10n'</span></li><li class="L3"><span class="atv">	CONFIGURACION: 		'Configuracion/'</span></li><li class="L4"><span class="atv">	AYUDAS: 		'Helpers/'</span></li><li class="L5"><span class="atv">	CONTROLADORES: 		'Controladores/'</span></li><li class="L6"><span class="atv">	MODELOS: 		'Modelos/'</span></li><li class="L7"><span class="atv">	VISTAS: 		'Vistas/'</span></li></ol></pre>
		
		<p>
			Las parametros adicionales que son:
			<br /><br />
			<strong>CARPETA:</strong> Indica el nombre de la carpeta de la aplicacion donde ingresara por defecto el cliente, esta carpeta debe estar dentro de la carpeta Aplicacion.
			<br /><br />
			<strong>LLAVE_ENCRIPTACION:</strong> Clave general de encriptacion de la aplicacion.
			<br /><br />
			<strong>CONFIGURACION:</strong> Indica la carpeta donde se encuentran los archivos de configuracion de la aplicacion.
			<br /><br />
			<strong>AYUDAS:</strong> Indica la carpeta donde se encuentran los archivos de ayuda de la aplicacion.
			<br /><br />
			<strong>CONTROLADORES:</strong> Carpeta donde estan alojados los controladores de la aplicacion.
			<br /><br />
			<strong>MODELOS:</strong> Carpeta donde estan Alojados los Modelos de la aplicacion.
			<br /><br />
			<strong>VISTAS:</strong> Carpeta donde estan Alojados las Vistas de la aplicacion.
		</p>
		<br />
		
		<h3>Aplicacion MI_APLICACION</h3>
		<p>
			Este es esencialmente el nombre de la aplicacion que se configurara en el archivo de configuracion de accesos.
			<br />
			Una de las regulaciones de nombres es: el nombre de la carpeta debe ir en notacion UpperCamelCase (EjemploDeUpperCamelCase) y el nombre de la aplicacion debe ser totalmente en MAYUSCULAS.
		</p>
		<p>
			Realizaremos un ejemplo de la aplicacion <strong>tickets bogota</strong>
		</p>
		<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pun">#Aplicacion Default es aquel que cargara si no se escribe el nombre de la aplicacion</span></li><li class="L1"><span class="atv">TICKETSBOGOTA:</span></li><li class="L2"><span class="atv">	CARPETA: 		'TicketsBogota/'</span></li><li class="L3"><span class="atv">	LLAVE_ENCRIPTACION: 	'N3ur4l3ncr1pt4c10n'</span></li><li class="L3"><span class="atv">	CONFIGURACION: 		'Configuracion/'</span></li><li class="L4"><span class="atv">	AYUDAS: 		'Helpers/'</span></li><li class="L5"><span class="atv">	CONTROLADORES: 		'Controladores/'</span></li><li class="L6"><span class="atv">	MODELOS: 		'Modelos/'</span></li><li class="L7"><span class="atv">	VISTAS: 		'Vistas/'</span></li></ol></pre>
	</section>