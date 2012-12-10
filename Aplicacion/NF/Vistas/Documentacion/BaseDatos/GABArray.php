			<section id="DocumentacionBD">
				<div class="page-header">
					<h1>Documentacion - Bases de Datos</h1>
					<h2>GAB Array(Guardar - Actualizar - Borrar)</h2>
				</div>
				<h3>Introduccion</h3>
				<p>Para la aplicacion de la conexion a la base de datos debe tener encuentra que la aplicacion ya debe estar configurada en la configuracion general del framework, si no lo ha realizado por favor ingresar <a href="<?php echo NeuralRutasApp::RutaURL('Configuracion'); ?>">Aqui (Configuraciones)</a></p>
				
				<div class="alert alert-info">
				  <strong>Informacion:</strong> Esta clase es para guardar datos de forma masiva a traves de un array asociativo continuo.
				</div>
				
				<strong>Nombre de la Clase</strong>: <code>NeuralBDGabArray</code>.
				
				<h3>Estructura de los parametros del array</h3>
				<div class="bs-docs-example">
					<p style="font-family: consolas; font-size: 12px;">$ArrayDatos[] = array('COLUMNA' => 'VALOR');</p>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">Array</li><li class="L1">(</li><li class="L1">	Array</li><li class="L1">	(</li><li class="L1">		[COLUMNA] => VALOR</li><li class="L1">	)</li><li class="L5">)</li></ol></pre>
				</div>
				<p>Esta es la estructura que aplica tanto para sentencias como para condiciones para los procesos de la libreria.</p>
				
				<h3>Guardar Datos</h3>
				
				<p><strong>Instanciar Clase</strong></p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL = new NeuralBDGabArray;</li></ol></pre>
				
				<p><strong>Seleccionar Destino</strong>: Se ingresa la aplicacion a utilizar y la tabla correspondiente.<br />
					<code>$Aplicacion</code>: Aplicacion Configurada.<br />
					<code>$Tabla</code>: Tabla donde se guardaran los datos.
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->SeleccionarDestino($Aplicacion, $Tabla);</li></ol></pre>
			
				<p><strong>Agregar Sentencia</strong><br />
					<code>$Array</code>: Array continuo donde se encuentra los datos correspondientes.<br />
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->AgregarSentencia($Array);</li></ol></pre>
				
				<p><strong>Insertar Datos</strong></p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->InsertarDatos();</li></ol></pre>
				
				<h4>Ejemplo de Guardado</h4>
				<div class="bs-docs-example">
					<pre style="font-family: consolas; font-size: 10px; line-height: 10px;">
Array
(
	['SENTENCIA'] => Array
		(
			[0] => Array
				(
					'COLUMNA' => 'VALOR'
				)
			[1] => Array
				(
					'COLUMNA' => 'VALOR'
				)
		)
)
					</pre>
				</div>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL = new NeuralBDGabArray;</li><li class="L1">$SQL->SeleccionarDestino('MI_APLICACION', 'tabla_1');</li><li class="L2">$SQL->AgregarSentencia($Array['SENTENCIA']);</li><li class="L3">$SQL->InsertarDatos();</li></ol></pre>
			
				<h3>Actualizacion de Datos</h3>
				
				<p><strong>Instanciar Clase</strong></p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL = new NeuralBDGabArray;</li></ol></pre>
				
				<p><strong>Seleccionar Destino</strong>: Se ingresa la aplicacion a utilizar y la tabla correspondiente.<br />
					<code>$Aplicacion</code>: Aplicacion Configurada.<br />
					<code>$Tabla</code>: Tabla donde se guardaran los datos.
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->SeleccionarDestino($Aplicacion, $Tabla);</li></ol></pre>
			
				<p><strong>Agregar Sentencia</strong>: Los diferentes datos que se van a actualizar<br />
					<code>$Array</code>: Array continuo asociativo de los datos a actualizar
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->AgregarSentencia($Array);</li></ol></pre>
				
				<p><strong>Agregar Condicion</strong>: La condicion que debe cumplir para actualizar<br />
					<code>$Array</code>: Array continuo asociativo de las condiciones correspondientes
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->AgregarCondicion($Array);</li></ol></pre>
				
				<p><strong>Actualizar Datos</strong></p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->ActualizarDatos();</li></ol></pre>
				
				<h4>Ejemplo de Actualizacion</h4>
				<div class="bs-docs-example">
					<pre style="font-family: consolas; font-size: 10px; line-height: 10px;">
Array
(
	['SENTENCIA'] => Array
		(
			[0] => Array
				(
					'COLUMNA' => 'VALOR'
				)
			[1] => Array
				(
					'COLUMNA' => 'VALOR'
				)
		)
		
	['CONDICION'] => Array
		(
			[0] => Array
				(
					'COLUMNA' => 'VALOR'
				)
			[1] => Array
				(
					'COLUMNA' => 'VALOR'
				)
		)
)
					</pre>
				</div>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL = new NeuralBDGabArray;</li><li class="L1">$SQL->SeleccionarDestino('MI_APLICACION', 'tabla_1');</li><li class="L2">$SQL->AgregarSentencia($Array['SENTENCIA']);</li><li class="L3">$SQL->AgregarCondicion($Array['CONDICION']);</li><li class="L4">$SQL->InsertarDatos();</li></ol></pre>
				
			
				<h3>Eliminacion de Datos</h3>
				<p><strong>Instanciar Clase</strong></p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL = new NeuralBDGabArray;</li></ol></pre>
				
				<p><strong>Seleccionar Destino</strong>: Se ingresa la aplicacion a utilizar y la tabla correspondiente.<br />
					<code>$Aplicacion</code>: Aplicacion Configurada.<br />
					<code>$Tabla</code>: Tabla donde se guardaran los datos.
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->SeleccionarDestino($Aplicacion, $Tabla);</li></ol></pre>
			
				<p><strong>Agregar Condicion</strong>: La condicion que debe cumplir para actualizar<br />
					<code>$Array</code>: Array continuo asociativo de las condiciones correspondientes
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->AgregarCondicion($Array);</li></ol></pre>
				
				<p><strong>Eliminar Datos</strong></p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->EliminarDatos();</li></ol></pre>
			
			
				<h4>Ejemplo de Eliminacion</h4>
				<div class="bs-docs-example">
					<pre style="font-family: consolas; font-size: 10px; line-height: 10px;">
Array
(
	['CONDICION'] => Array
		(
			[0] => Array
				(
					'COLUMNA' => 'VALOR'
				)
			[1] => Array
				(
					'COLUMNA' => 'VALOR'
				)
		)
)
					</pre>
				</div>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL = new NeuralBDGab;</li><li class="L1">$SQL->SeleccionarDestino('MI_APLICACION', 'tabla_1');</li><li class="L2">$SQL->AgregarCondicion('Columna_1', 'Valor 1');</li><li class="L3">$SQL->EliminarDatos();</li></ol></pre>
			</section>