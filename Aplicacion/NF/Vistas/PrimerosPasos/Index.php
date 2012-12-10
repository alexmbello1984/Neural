			<section id="LoadPrimerosPasos">
				<div class="page-header">
					<h1>Primeros Pasos</h1>
				</div>
				<p class="lead"><strong>Neural Framework</strong> es un marco de trabajo de apliaciones en <strong>PHP</strong> separando las consultas a las bases de datos <strong>(Modelo)</strong>, la presentacion de los resultados <strong>(Vista)</strong> y la logica del Negocio <strong>(Controlador)</strong></p>
				<p>Para iniciar tu nueva aplicacion debes crear en la carpeta <strong>Aplicacion</strong> del framework, hay un archivo ZIP que tiene la estructura correspondiente recuerda Nombrar la Carpeta de tu aplicacion con la notacion <a href="http://es.wikipedia.org/wiki/CamelCase" target="__blank"">UpperCamelCase</a> y realizar la configuracion basica (Ver tambien las <a href="<?php echo NeuralRutasApp::RutaURL('Configuracion'); ?>">Configuraciones</a>)</p>
			</section>
			
			<section id="Controlador">
				<div class="page-header">
					<h1>Controladores</h1>
				</div>
				<p>Dentro de la carpeta de la nueva aplicacion se encuentra la carpeta <strong>Controladores</strong> se creara un nuevo archivo el cual sera el mismo nombre de la clase que se generara. aqui veremos un ejemplo de la notacion de la clase, adicionalmente se generara un metodo constructor y por regla obligatoria general siempre existira un metodo llamado <strong>Index</strong>.</p>
				<div class="bs-docs-example">
					<code>MiControlador.php</code>
  					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">&lt;?php</li><li class="L1">	class MiControlador extends Controlador {</li><li class="L2"></li><li class="L3">		function __Construct() {</li><li class="L4">			parent::__Construct();</li><li class="L5">		}</li><li class="L6"></li><li class="L7">		public function Index() {</li><li class="L8"></li><li class="L9">			echo 'Hola Mundo Soy Neural Framework!!!';</li><li class="L0">		}</li><li class="L1">	}</li></ol></pre>
				</div>
				<h4>Explicacion</h4>
				<p>Cada uno de los controladores que se creen deben tener la notacion correspondiente, el nombre del controlador debe ser igual al nombre de la clase.</p>
				<p>Todos los controladores siempre se deben extender a la clase <strong>Controlador</strong></p>
				<p>Se debe crear un metodo constructor <code>function __Construct()</code> en la cual deben traer de la clase Constructor su metodo constructor <code>parent::__Construct();</code></p>
				<p><strong>Importante:</strong> siempre debe existir el medoto Index, ya que este es el metodo inicial que cargara el framework <code>Public function Index()</code>. Adicional se pueden crear los metodos necesarios para realizar su aplicacion.</p>
				<div class="bs-docs-example">
  					La Multiplicacion  18 y 45 es Igual a 810
				</div>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">&lt;?php</li><li class="L1">	class MiControlador extends Controlador {</li><li class="L2"></li><li class="L3">		function __Construct() {</li><li class="L4">			parent::__Construct();</li><li class="L5">		}</li><li class="L6"></li><li class="L7">		public function Index() {</li><li class="L8"></li><li class="L9">			$Var_1 = "18";</li><li class="L0">			$Var_2 = "45";</li><li class="L1">			$Total = $this->SumaValores($Var_1, $Var_2);</li><li class="L2"></li><li class="L3">			echo 'La Multiplicacion de '.$Var_1.' y '.$Var_1.' es Igual a '.$Total;</li><li class="L4">		}</li><li class="L5"></li><li class="L6">		public function SumaValores($Valor1, $Valor2) {</li><li class="L7"></li><li class="L8">			return $Valor1*$Valor2;</li><li class="L9">		}</li><li class="L0">	}</li></ol></pre>
			</section>
			
			<section id="Modelo">
				<div class="page-header">
					<h1>Modelos</h1>
				</div>
				<p>Dentro de la carpeta de la nueva aplicacion se encuentra la carpeta <strong>Modelos</strong> se creara un nuevo archivo el cual sera el mismo nombre de la clase agregando una barra al piso y la palabra Modelo <code>_Modelo.php</code>, lo cual el nombre del archivo seria <code>MiControlador_Modelo.php</code></p>
				<div class="bs-docs-example">
					<code>MiControlador_Modelo.php</code>
  					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">&lt;?php</li><li class="L1">	class MiControlador_Modelo extends Modelo {</li><li class="L2"></li><li class="L3">		function __Construct() {</li><li class="L4">			parent::__Construct();</li><li class="L5">		}</li><li class="L6"></li><li class="L7">		public function ConsultaSQL() {</li><li class="L8"></li><li class="L9">			/** Aqui la Consulta a Bases de Datos **/</li><li class="L0">		}</li><li class="L1">	}</li></ol></pre>
				</div>
				<p>Se genera la clase con la notacion correspondiente <code>MiControlador_Modelo</code> y se extiende la clase <code>Modelo</code>.</p>
				<p>Se genera un metodo constructor para traer procedimientos de la clase Modelo.</p>
				<p>Los modelos no tienen metodos por defecto, cada metodo se llamada desde el controlador de la siguiente forma </p>
				<div class="bs-docs-example">
  					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$this->Modelo->ConsultaSQL();</li></ol></pre>
				</div>
			</section>
			
			<section id="Vista">
				<div class="page-header">
					<h1>Vistas</h1>
				</div>
				<p>Las vistas son donde se va a mostrar los datos que se procesan tanto en los Controladores como en los Modelos, las vistas contendran codigo PHP y codigo HTML, el codigo php en menor proporcion.</p>
				<p>En la carpeta de la aplicacion se encuentra una carpeta con el nombre de <strong>Vistas</strong> donde se guardaran las vistas de la aplicacion.</p>
				<p>El Siguiente Metodo dentro del Controlador invocara la vista correspondiente:</p>
				<div class="bs-docs-example">
					Nombre del Archivo dentro de la Carpeta Vistas: <code>VistaHTML.php</code>
  					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$this->Vista->GenerarVista('VistaHTML');</li></ol></pre>
				</div>
				<h4>Explicacion</h4>
				<p>Los archivos que se utilizaran como vista HTML seran guardados como archivo <code>*.php</code></p>
				<p>Dentro de la carpeta Vista pueden crearse tanto carpetas como archivos para la organizacion de las mismas, como en el ejemplo de invocacion:</p>
				<div class="bs-docs-example">
					Nombre del Archivo dentro de la Carpeta Vistas: <code>VistaHTML.php</code>
  					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$this->Vista->GenerarVista('Carpeta/VistaHTML');</li></ol></pre>
				</div>
				<p>En la notacion no es necesario colocar la extension del archivo como se ve en los ejemplos solo se observa <code>VistaHTML</code>.</p>
				<div class="alert alert-info "><strong>Anotacion:</strong> Las Vistas solo pueden ser utilizadas por la aplicacion configurada donde se encuentran la vistas, otras aplicaciones no pueden acceder a ellas.</div>
				<h4>Pasar Valores desde el Controlador hasta la Vista</h4>
				<p>Una de los trabajos de la vista es recibir los datos desde el controlador para mostrarlo junto con el codigo HTML, a traves del controlador es posible realizarlo.</p>
				<p>El paso de los datos a traves del controlador es con el Metodo <code>$this->Vista->NombreDeLaVariable = 'Valor de la Variable';</code>, en la vista se genera una variable la cual puede ser impresa y su notacion es <code>$this->NombreDeLaVariable;</code></p>
				<div class="bs-docs-example">
					<strong>Controlador</strong> <code>Aplicacion\NombreDeLaAplicacion\Controladores\MiControlador.php</code>
  					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">&lt;?php</li><li class="L1">	class MiControlador extends Controlador {</li><li class="L2"></li><li class="L3">		function __Construct() {</li><li class="L4">			parent::__Construct();</li><li class="L5">		}</li><li class="L6"></li><li class="L7">		public function Index() {</li><li class="L8"></li><li class="L9">			$this->Vista->Titulo = 'Este es el TITULO';</li><li class="L0">			$this->Vista->GenerarVista('Carpeta/VistaHTML');</li><li class="L1">		}</li><li class="L2">	}</li></ol></pre>
  					<strong>Vista</strong> <code>Aplicacion\NombreDeLaAplicacion\Vistas\VistaHTML.php</code>
  					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">&lt;h1&gt;&lt;?php echo $this->Titulo; ?&gt;&lt;/h1&gt;</li></ol></pre>
				</div>
				<p>Tambien es posible manejar la sintaxis alternativa de las estructuras de control como if, while, for, foreach, y switch para tener una cantidad minima de codigo php en la vista.</p>
				<strong>Controlador</strong> <code>$this->Vista->ArrayDatos = array('Nombre' => 'Zyos', 'Correo' => 'correo@gmail.com', 'Ciudad' => 'Bogota');</code>
				<div class="bs-docs-example">
					<b>Nombre:</b> Zyos <br />
					<b>Correo:</b> correo@gmail.com <br />
					<b>Ciudad:</b> Bogota <br />
				</div>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">&lt;h1&gt;Titulo&lt;/h1&gt;</li><li class="L1"></li><li class="L2">&lt;?php foreach ($this->ArrayDatos AS $Llave => $Valor) : ?&gt;</li><li class="L3">	&lt;b&gt;&lt;?php echo $Llave; ?&gt;&lt;/b&gt;: &lt;?php echo $Valor; ?&gt;&lt;br /&gt;</li><li class="L4">&lt;?php endfor; ?&gt;</li></ol></pre>
				<h4>Asignacion de Vistas</h4>
				<p>En el Metodo que invoca la vista tiene un parametro adicional, es un constructor de vistas; en muchas ocaciones hay una plantilla HTML en la cual hay un menu o cierta informacion de esa plantilla que cambia pero el resto de la plantilla no cambia, para esto tenemos un constructor de vistas.</p>
				<p>En el constructor de vistas se encuentra agregado el tipo de vista configurado a ser mostrado.</p>
				<div class="bs-docs-example">
  					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$this->Vista->GenerarVista('Carpeta/VistaHTML', 'MIVISTACONFIG');</li></ol></pre>
				</div>
			</section>
			
			<section id="ConstructVistas">
				<div class="page-header">
					<h1>Constructor de Vistas</h1>
				</div>
				<p>El constructor de vistas fue creado para administrar multiples vistas adecuadas a una plantilla HTML.</p>
				<p>Por Ejemplo hay una aplicacion de administracion de tickets, y cada uno de los usuarios tiene un permiso distinto y es necesario utilizar una plantilla HTML en la cual solo un menu cambiara, pues en esto el constructor de vistas puede ayudar</p>
				<p>Tomemos como ejemplo los diferentes archivos que se crean particionando la plantilla html</p>
				<div class="bs-docs-example">
					<code>head.php</code>
  					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">&lt;html&gt;</li><li class="L1">	&lt;head&gt;</li><li class="L2">		&lt;title&gt;El titulo de la Aplicacion&lt;title/&gt;</li><li class="L3">		/**** Codigo General del head de la Aplicacion ****/</li><li class="L4">	&lt;/head&gt;</li></ol></pre>
  					
  					<code>cabecera.php</code>
  					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">	&lt;body&gt;</li><li class="L1">		&lt;header&gt;</li><li class="L2">			&lt;h1&gt;Titulo&lt;/h1&gt;</li><li class="L3">		&lt;/header&gt;</li></ol></pre>
  					
  					<code>menu.php</code>
  					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">		&lt;nav&gt;</li><li class="L1">			&lt;ul&gt;</li><li class="L2">				&lt;li&gt;Menu&lt;/li&gt;</li><li class="L3">				&lt;li&gt;Menu&lt;/li&gt;</li><li class="L4">				&lt;li&gt;Menu&lt;/li&gt;</li><li class="L5">				&lt;li&gt;Menu&lt;/li&gt;</li><li class="L6">			&lt;/ul&gt;</li><li class="L7">		&lt;/nav&gt;</li><li class="L8">		&lt;article&gt;</li></ol></pre>
  					
  					<code>footer.php</code>
  					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">		&lt;/article&gt;</li><li class="L1">	&lt;/body&gt;</li><li class="L2">&lt;/html&gt;</li></ol></pre>
				</div>
				<p>Pueden observar que se particiono la plantilla correspondiente y se observar que el archivo <code>menu.php</code> es el menu de la plantilla, adicionalmente las etiquetas <code>&lt;article&gt;&lt;/article&gt;</code> se encuentran en dos archivos distintos y no hay informacion, alli se cargara la vista que generemos.</p>
				<p>Ya no es necesario hacer varias plantillas sino modificar solo una parte para su optimo funcionamiento, este proceso baja las peticiones y procesos adicionales del render de las vistas.</p>
				<p>El archivo de configuracion se encuentra en la carpeta de la Aplicacion y en la sub-carpeta llamada <strong>Configuracion</strong> y el archivo se llama <code>AsignacionVistas.php</code>. En este archivo se encuentra una clase abstracta la cual administra las vistas correspondientes, en este caso solo se modificaran los array's contenidos en el archivo de asignacion de vistas.</p>
				<div class="bs-docs-example">
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Array[0] = array(</li><li class="L1">	'NOMBREARCHIVO'</li><li class="L2">);</li></ol></pre>
					<div class="alert alert-error">
						<strong>NO ELIMINAR</strong> este array es fundamental para el buen funcionamiento de las vistas, solamente puede agregar mas array asociativos.
					</div>
				</div>
				<p>Para realizar una nueva vista hay que generar un array asociativo, la llave del array debe estar en Mayusculas, los datos del array apuntaran directamente a la carpeta <strong>Vistas</strong> de la aplicacion, y de debe ingresar <code>Carpeta/Archivo.php</code> o segun el caso <code>Archivo.php</code>.</p>
				<p>El Tag <code>NOMBREARCHIVO</code> no puede omitirse o eliminarse ya que este servira para invocar la vista de contenido creada.</p>
				<div class="bs-docs-example">
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Array['VISTAUSUARIO] = array(</li><li class="L1">	'head.php', </li><li class="L1">	'cabecera.php', </li><li class="L2">	'Usuarios/menu.php', </li><li class="L3">	'NOMBREARCHIVO', </li><li class="L4">	'footer.php'</li><li class="L5">);</li></ol></pre>
				</div>
				<p>Generada la configuracion correspondiente se puede proceder a la ejecucion en el controlador correspondiente con la llamada al Metodo correcto.</p>
				<div class="bs-docs-example">
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$this->Vista->GenerarVista('Carpeta/VistaHTML', 'VISTAUSUARIO');</li></ol></pre>
				</div>
			</section>