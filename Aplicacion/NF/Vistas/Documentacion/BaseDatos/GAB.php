			<section id="DocumentacionBD">
				<div class="page-header">
					<h1>Documentacion - Bases de Datos</h1>
					<h2>GAB (Guardar - Actualizar - Borrar)</h2>
				</div>
				<h3>Introduccion</h3>
				<p>Para la aplicacion de la conexion a la base de datos debe tener encuentra que la aplicacion ya debe estar configurada en la configuracion general del framework, si no lo ha realizado por favor ingresar <a href="<?php echo NeuralRutasApp::RutaURL('Configuracion'); ?>">Aqui (Configuraciones)</a></p>
				
				<div class="alert alert-error">
				  <strong>Precaucion!</strong> Esta clase es solo para procesos recurrentes mas no masivos
				</div>
				
				<strong>Nombre de la Clase</strong>: <code>NeuralBDGab</code>.
				
				<h3>Guardar Datos</h3>
				
				<p><strong>Instanciar Clase</strong></p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL = new NeuralBDGab;</li></ol></pre>
				
				<p><strong>Seleccionar Destino</strong>: Se ingresa la aplicacion a utilizar y la tabla correspondiente.<br />
					<code>$Aplicacion</code>: Aplicacion Configurada.<br />
					<code>$Tabla</code>: Tabla donde se guardaran los datos.
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->SeleccionarDestino($Aplicacion, $Tabla);</li></ol></pre>
			
				<p><strong>Agregar Sentencia</strong><br />
					<code>$Columna</code>: Columna donde se Guardaran los datos.<br />
					<code>$Valor</code>: Valor a guardar en la columna seleccionada
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->AgregarSentencia($Columna, $Valor);</li></ol></pre>
				
				<p><strong>Insertar Datos</strong></p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->InsertarDatos();</li></ol></pre>
				
				<h4>Ejemplo de Guardado</h4>
				<div class="bs-docs-example">
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL = new NeuralBDGab;</li><li class="L1">$SQL->SeleccionarDestino('MI_APLICACION', 'tabla_1');</li><li class="L2">$SQL->AgregarSentencia('Columna_1', 'Valor 1');</li><li class="L3">$SQL->AgregarSentencia('Columna_2', 'Valor 2');</li><li class="L4">$SQL->AgregarSentencia('Columna_3', 'Valor 3');</li><li class="L5">$SQL->InsertarDatos();</li></ol></pre>
				</div>
			
				<h3>Actualizacion de Datos</h3>
				
				<p><strong>Instanciar Clase</strong></p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL = new NeuralBDGab;</li></ol></pre>
				
				<p><strong>Seleccionar Destino</strong>: Se ingresa la aplicacion a utilizar y la tabla correspondiente.<br />
					<code>$Aplicacion</code>: Aplicacion Configurada.<br />
					<code>$Tabla</code>: Tabla donde se guardaran los datos.
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->SeleccionarDestino($Aplicacion, $Tabla);</li></ol></pre>
			
				<p><strong>Agregar Sentencia</strong>: Los diferentes datos que se van a actualizar<br />
					<code>$Columna</code>: Columna donde se Actualizaran los datos.<br />
					<code>$Valor</code>: Valor a Actualizar en la columna seleccionada
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->AgregarSentencia($Columna, $Valor);</li></ol></pre>
				
				<p><strong>Agregar Condicion</strong>: La condicion que debe cumplir para actualizar<br />
					<code>$Columna</code>: Columna de la condicion.<br />
					<code>$Valor</code>: Valor que debe cumplir la columna seleccionada
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->AgregarCondicion($Columna, $Valor);</li></ol></pre>
				
				<p><strong>Actualizar Datos</strong></p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->ActualizarDatos();</li></ol></pre>
				
				<h4>Ejemplo de Actualizacion</h4>
				<div class="bs-docs-example">
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL = new NeuralBDGab;</li><li class="L1">$SQL->SeleccionarDestino('MI_APLICACION', 'tabla_1');</li><li class="L2">$SQL->AgregarSentencia('Columna_1', 'Valor 1');</li><li class="L3">$SQL->AgregarSentencia('Columna_2', 'Valor 2');</li><li class="L4">$SQL->AgregarSentencia('Columna_3', 'Valor 3');</li><li class="L4">$SQL->AgregarCondicion('Columna_4', 'Valor 4');</li><li class="L5">$SQL->InsertarDatos();</li></ol></pre>
				</div>
				
			
				<h3>Eliminacion de Datos</h3>
				<p><strong>Instanciar Clase</strong></p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL = new NeuralBDGab;</li></ol></pre>
				
				<p><strong>Seleccionar Destino</strong>: Se ingresa la aplicacion a utilizar y la tabla correspondiente.<br />
					<code>$Aplicacion</code>: Aplicacion Configurada.<br />
					<code>$Tabla</code>: Tabla donde se guardaran los datos.
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->SeleccionarDestino($Aplicacion, $Tabla);</li></ol></pre>
			
				<p><strong>Agregar Condicion</strong>: La condicion que debe cumplir para eliminar<br />
					<code>$Columna</code>: Columna de la condicion.<br />
					<code>$Valor</code>: Valor que debe cumplir la columna seleccionada
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->AgregarCondicion($Columna, $Valor);</li></ol></pre>
				
				<p><strong>Eliminar Datos</strong></p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL->EliminarDatos();</li></ol></pre>
			
			
				<h4>Ejemplo de Eliminacion</h4>
				<div class="bs-docs-example">
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$SQL = new NeuralBDGab;</li><li class="L1">$SQL->SeleccionarDestino('MI_APLICACION', 'tabla_1');</li><li class="L2">$SQL->AgregarCondicion('Columna_1', 'Valor 1');</li><li class="L3">$SQL->EliminarDatos();</li></ol></pre>
				</div>
			
			
			
			
			</section>