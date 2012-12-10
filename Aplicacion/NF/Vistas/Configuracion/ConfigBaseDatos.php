	<section id="ConfigAcceso">
		<div class="page-header">
			<h1>Configuracion de Bases de Datos</h1>
		</div>
		<p>
			<strong>Neural Framework</strong> utiliza archivos de extension <strong>YAML</strong> el cual genera los parametros necesarios para la configuracion del acceso a las bases de datos.
			<br /><br />
			Actualmente las conexiones a las bases de datos se realizan a traves de <a href="http://www.doctrine-project.org/" target="_blank">DBAL - Doctrine 2</a>, si desea explorar las opciones que tiene Doctrine puede ingresar en su <a href="http://www.doctrine-project.org/projects/dbal.html" target="__blank"">pagina web</a>.
			<br /><br />
			Mostraremos a continuacion el archivo de configuracion:
		</p>
		<div class="bs-docs-example">
			<div class="dropdown clearfix">
				<code>
					<pre>
#Centro de Registro de Bases de Datos de cada Aplicacion
BASEDATOS:
#Registramos los datos de acceso de bases de datos por defecto o primaria
	DEFAULT: 
		dbname: 	test
		user: 		root
		password: 	password
		host: 		localhost
		driver: 	pdo_mysql
		charset: 	iso-8859-1

	MI_APLICACION:
		dbname:       test
		user:         root
		password:     password
		host:         localhost
		driver:       pdo_mysql
		charset:      iso-8859-1
					</pre>
				</code>
			</div>
		</div>
		
		<h2>Archivo de Configuracion</h2>
		
		<h3>Marcador Inicial</h3>
		<p>El archivo de configuracion de Bases de Datos tiene el marcador <strong>BASEDATOS</strong> que identifica que tipo de proceso debe manejar el framework como identificador y no debe modificarse.</p>
		<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pun">#Centro de Registro de Acceso a Aplicaciones</span></li><li class="L1"><span class="tag">BASEDATOS:</span></li></ol></pre>
		
		<h3>Aplicacion DEFAULT</h3>
		<p>Este marcador de aplicacion da el punto de acceso cuando el usuario ingresa al <strong>index</strong> de la aplicacion. si lo desea puede configurar los parametros correspondientes de una aplicacion existente o crear una nueva conexion. <strongNO DEBE ELIMINARSE></strong></p>
		<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pun">#Registramos los datos de acceso de bases de datos por defecto o primaria</span></li><li class="L1"><span class="atv">DEFAULT:</span></li><li class="L2"><span class="atv">	dbname: 	test</span></li><li class="L3"><span class="atv">	user: 		root</span></li><li class="L4"><span class="atv">	password: 	password</span></li><li class="L5"><span class="atv">	host: 		localhost</span></li><li class="L6"><span class="atv">	driver: 	pdo_mysql</span></li><li class="L7"><span class="atv">	charset: 	iso-8859-1</span></li></ol></pre>
		
		<p>
			Los parametros adicionales dependen del driver de conexion que se necesite. Actualmente Doctrine Soporta:
			<ol>
				<li><strong>MySQL:</strong> pdo_mysql</li>
				<li><strong>SQLite:</strong> pdo_sqlite</li>
				<li><strong>PostgreSQL:</strong> pdo_pgsql</li>
				<li><strong>Oracle:</strong> pdo_oci, oci8</li>
				<li><strong>MSSQL:</strong> pdo_sqlsrv</li>
				<li><strong>SQL Server:</strong> pdo_sqlsrv</li>
			</ol>
		</p>
		<br />
		
		<h3>Aplicacion MI_APLICACION</h3>
		<p>
			Este es esencialmente el nombre de la aplicacion que se configurara en el archivo de configuracion de Bases de Datos.
			<br />
			Una de las regulaciones de nombres es: el nombre de la carpeta debe ir en notacion UpperCamelCase (EjemploDeUpperCamelCase) y el nombre de la aplicacion debe ser totalmente en MAYUSCULAS.
		</p>
		<p>
			Realizaremos un ejemplo de la aplicacion <strong>tickets bogota</strong> con una configuracion de <strong>MySQL</strong>
		</p>
		<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pun">#Registramos los datos de acceso de bases de datos por defecto o primaria</span></li><li class="L1"><span class="atv">TICKETSBOGOTA:</span></li><li class="L2"><span class="atv">	dbname: 	test</span></li><li class="L3"><span class="atv">	user: 		root</span></li><li class="L4"><span class="atv">	password: 	password</span></li><li class="L5"><span class="atv">	host: 		localhost</span></li><li class="L6"><span class="atv">	driver: 	pdo_mysql</span></li><li class="L7"><span class="atv">	charset: 	iso-8859-1</span></li></ol></pre>
		<br /><br />
	</section>