	<section id="ConfigAcceso">
		<div class="page-header">
			<h1>Configuracion de Correo Electronico</h1>
		</div>
		<p>
			<strong>Neural Framework</strong> utiliza archivos de extension <strong>YAML</strong> el cual genera los parametros necesarios para la configuracion de envio de correo electronico.
			<br /><br />
			Actualmente se administran los envios de correos segun la aplicacion configurada, adicionalmente <strong>Neural Framework</strong> viene pre-configurado para envio de correos a traves de GMAIL.
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
      FUNCION_MAIL:     DESHABILITADO
      CONFIGURACION:
          SMTPAuth:     true
          Host:         ssl://smtp.gmail.com
          Port:         465
          Username:     correo@gmail.com
          Password:     password     

    MI_APLICACION:
      FUNCION_MAIL:     DESHABILITADO
      CONFIGURACION:
          SMTPAuth:     true
          Host:         'ssl://smtp.gmail.com'
          Port:         465
          Username:     correo@gmail.com
          Password:     password
					</pre>
				</code>
			</div>
		</div>
		
		<h2>Archivo de Configuracion</h2>
		
		<h3>Marcador Inicial</h3>
		<p>El archivo de configuracion de Correos tiene el marcador <strong>APLICACIONES:</strong> que identifica que tipo de proceso debe manejar el framework como identificador y no debe modificarse.</p>
		<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pun">#Centro de Registro de Acceso a Aplicaciones</span></li><li class="L1"><span class="tag">APLICACIONES:</span></li></ol></pre>
		
		<h3>Aplicacion DEFAULT</h3>
		<p>Este marcador de aplicacion da el punto de acceso por defecto para envio de correos electronicos, se recomienda no configrar datos ya que una opcion por defecto no muestra datos de las aplicaciones. <strongNO DEBE ELIMINARSE></strong></p>
		<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pun">#Registramos los datos de acceso de bases de datos por defecto o primaria</span></li><li class="L1"><span class="atv">DEFAULT:</span></li><li class="L2"><span class="atv">	FUNCION_MAIL: 	DESHABILITADO</span></li><li class="L3"><span class="atv">	CONFIGURACION: 		</span></li><li class="L4"><span class="atv">		SMTPAuth: 	true</span></li><li class="L5"><span class="atv">		Host: 		ssl://smtp.gmail.com</span></li><li class="L6"><span class="atv">		Port: 		465</span></li><li class="L7"><span class="atv">		Username: 	correo@gmail.com</span></li><li class="L8"><span class="atv">		Password: 	password</span></li></ol></pre>
		
		<br />
		
		<h3>Aplicacion MI_APLICACION</h3>
		<p>
			Este es esencialmente el nombre de la aplicacion que se configurara en el archivo de configuracion de Correo Electronico.
			<br />
			Una de las regulaciones de nombres es: el nombre de la carpeta debe ir en notacion UpperCamelCase (EjemploDeUpperCamelCase) y el nombre de la aplicacion debe ser totalmente en MAYUSCULAS.
		</p>
		<p>
			Realizaremos un ejemplo de la aplicacion <strong>tickets bogota</strong> con una configuracion de <strong>Correo de GMAIL</strong>
		</p>
		<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pun">#Registramos los datos de acceso de bases de datos por defecto o primaria</span></li><li class="L1"><span class="atv">TICKETSBOGOTA:</span></li><li class="L2"><span class="atv">	FUNCION_MAIL: 	DESHABILITADO</span></li><li class="L3"><span class="atv">	CONFIGURACION: 		</span></li><li class="L4"><span class="atv">		SMTPAuth: 	true</span></li><li class="L5"><span class="atv">		Host: 		ssl://smtp.gmail.com</span></li><li class="L6"><span class="atv">		Port: 		465</span></li><li class="L7"><span class="atv">		Username: 	ticketsbogota_159@gmail.com</span></li><li class="L8"><span class="atv">		Password: 	tickets_bogota123</span></li></ol></pre>
		<br /><br />
	</section>