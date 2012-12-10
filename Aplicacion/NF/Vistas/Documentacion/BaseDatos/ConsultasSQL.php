			<section id="DocumentacionBD">
				<div class="page-header">
					<h1>Documentacion - Bases de Datos</h1>
					<h2>Consultas SQL</h2>
				</div>
				<h3>Introduccion</h3>
				<p>Para la aplicacion de la conexion a la base de datos debe tener encuentra que la aplicacion ya debe estar configurada en la configuracion general del framework, si no lo ha realizado por favor ingresar <a href="<?php echo NeuralRutasApp::RutaURL('Configuracion'); ?>">Aqui (Configuraciones)</a></p>
				<h3>Ejecucion</h3>
				<p>
					<strong>Nombre de la Clase:</strong> <code>NeuralBDConsultas</code>
				</p>
				
				<p>Instanciamiento la Clase</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$ConsultaSQL = new NeuralBDConsultas;</li></ol></pre>
				
				<p><strong>Tabla</strong>: Ingresamos la Tabla a la cual se realizara la consulta.<br /><code>$tabla_BD</code>: Tabla donde se realizara la consulta</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$ConsultaSQL->CrearConsulta($tabla_BD);</li></ol></pre>
				
				<p><strong>Columnas</strong>: Columnas que se observaran como resultado de la consulta</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$ConsultaSQL->AgregarColumnas('Columna_1, Columna_2, Columna_3, ....');</li></ol></pre>
				
				<p><strong>Condiciones</strong>: Condiciones que debe cumplir la consulta</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$ConsultaSQL->AgregarCondicion("Columna_1 = '1' AND Columna_2 = '2'");</li></ol></pre>
				
				<p><strong>Ordenamiento</strong>: Organizar la consulta por una columna especifica, los posibles tipos de ordenamiento <code>ASC</code>: Ascendentes o <code>DESC</code>: Desendentes, valor por defecto <code>ASC</code></p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$ConsultaSQL->AgregarOrdenar('Columna', 'ASC');</li></ol></pre>
				
				<p><strong>Agrupar</strong>: Agrupar consulta por Columna</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$ConsultaSQL->AgregarAgrupar('Columna');</li></ol></pre>
				
				<p><strong>Limite de Datos</strong>: Limita los datos de la consulta. <br /><code>$Puntero</code>: Puntero de ID de registro, <br /><code>$CantidadRegistros</code>: Cantidad de registros a mostrar despues del puntero</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$ConsultaSQL->AgregarLimite($Puntero, $CantidadRegistros);</li></ol></pre>
				
				<p><strong>Preparar Cantidad de Datos</strong>: Cuenta la cantidad de filas de la consulta.<br /><code>$NombreCampo</code>: parametro para indicar el nombre de la Llave del Array, valor por defecto <strong>Cantidad</strong></p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$ConsultaSQL->PrepararCantidadDatos($NombreCampo);</li></ol></pre>
				
				<p><strong>Preparar Query</strong>: Prepara el Query general y genera la consulta completa en array de todas las filas, por motivos de validaciones se puede imprimir este campo y regresara la consulta SQL construida.</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$ConsultaSQL->PrepararQuery();</li></ol></pre>
				
				<p><strong>Ejecutar Query</strong>: Proceso de Ejecucion de la Consulta.<br /><code>$Aplicacion</code>: Aplicacion donde se encuentra configurado los accesos.</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$ConsultaSQL->ExecuteConsulta($Aplicacion);</li></ol></pre>
				
				<p><strong>Ejecutar Query Manual</strong>: Genera un Query Manual. <br/><code>$Aplicacion</code>: Aplicacion donde se encuentra configurado los accesos.<br /><code>$Query</code>: Linea de Query Manual para su ejecucion.</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$ConsultaSQL->ExecuteQueryManual($Aplicacion, $Query);</li></ol></pre>
				
				<h3>Consulta Normal</h3>
				<p>Generamos una consulta de ejemplo y su salida en un array</p>
				<div class="bs-docs-example">
					<pre style="font-size: 10px; line-height:11px">
array(
	[Cantidad] => 2
	[0] => Array
		(
			[Columna_1] => Valor_1
			[Columna_2] => Valor_2
			[Columna_3] => Valor_3
		)
	[1] => Array
		(
			[Columna_1] => Valor_1
			[Columna_2] => Valor_2
			[Columna_3] => Valor_3
		)
)
					</pre>	
				</div>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$ConsultaSQL = new NeuralBDConsultas;</li><li class="L1">$ConsultaSQL->CrearConsulta('tabla_1');</li><li class="L2">$ConsultaSQL->AgregarColumnas('Columna_1, Columna_2, Columna_3');</li><li class="L3">$ConsultaSQL->AgregarOrdenar('Columna_1', 'ASC');</li><li class="L4">$ConsultaSQL->PrepararCantidadDatos('Cantidad');</li><li class="L5">$ConsultaSQL->PrepararQuery();</li><li class="L6">return $ConsultaSQL->ExecuteConsulta('MI_APLICACION');</li></ol></pre>
				
				<h3>Consulta de Multiples Tablas</h3>
				<p></p>
				<div class="bs-docs-example">
					<pre style="font-size: 10px; line-height:11px">
array(
	[Cantidad] => 2
	[0] => Array
		(
			[id] => Valor_1
			[Nombre] => Valor_2
			[Correo] => Valor_3
		)
	[1] => Array
		(
			[id] => Valor_1
			[Nombre] => Valor_2
			[Correo] => Valor_3
		)
)
					</pre>	
				</div>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$ConsultaSQL = new NeuralBDConsultas;</li><li class="L1">$ConsultaSQL->CrearConsulta('tabla_1');</li><li class="L2">$ConsultaSQL->AgregarColumnas('tabla_1.Columna_1 AS id, tabla_1.Columna_2 AS Nombre');</li><li class="L3">$ConsultaSQL->CrearConsulta('tabla_2');</li><li class="L4">$ConsultaSQL->AgregarColumnas('tabla_2.Columna_2 AS Correo');</li><li class="L5">$ConsultaSQL->AgregarCondicion("tabla_1.Columna_1 = tabla_2.Columna_1");</li><li class="L6">$ConsultaSQL->PrepararCantidadDatos('Cantidad');</li><li class="L7">$ConsultaSQL->PrepararQuery();</li><li class="L8">return $ConsultaSQL->ExecuteConsulta('MI_APLICACION');</li></ol></pre>
				<p>
					Las consultas se pueden realizar por separado como se muestra en el ejemplo se agregaron dos tablas <br /><code>$ConsultaSQL->CrearConsulta('tabla_1');</code> y <code>$ConsultaSQL->CrearConsulta('tabla_2');</code> con sus respectivas columnas.<br />
					Las columnas tienen en este caso el indicador <code>Tabla.Columna</code> para identificar las columnas pertenecientes a que tabla.<br />
					Para este tipo de consultas es necesario tener una condicion para cumplir <code>$ConsultaSQL->AgregarCondicion("tabla_1.Columna_1 = tabla_2.Columna_1");</code>.
					Estos procedimientos se pueden anexar tablas y columnas las veces que sean necesarias.
				</p>
				
				<h3>Consultas Con Multiples Ordenamiento</h3>
				<div class="bs-docs-example">
					<pre style="font-size: 10px; line-height:11px">
array(
	[Cantidad] => 2
	[0] => Array
		(
			[Columna_1] => Valor_1
			[Columna_2] => Valor_2
			[Columna_3] => Valor_3
		)
	[1] => Array
		(
			[Columna_1] => Valor_1
			[Columna_2] => Valor_2
			[Columna_3] => Valor_3
		)
)
					</pre>	
				</div>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$ConsultaSQL = new NeuralBDConsultas;</li><li class="L1">$ConsultaSQL->CrearConsulta('tabla_1');</li><li class="L2">$ConsultaSQL->AgregarColumnas('Columna_1, Columna_2, Columna_3');</li><li class="L3">$ConsultaSQL->AgregarOrdenar('Columna_1', 'ASC');</li><li class="L4">$ConsultaSQL->AgregarOrdenar('Columna_2', 'ASC');</li><li class="L5">$ConsultaSQL->AgregarOrdenar('Columna_3', 'DESC');</li><li class="L6">$ConsultaSQL->PrepararCantidadDatos('Cantidad');</li><li class="L7">$ConsultaSQL->PrepararQuery();</li><li class="L8">return $ConsultaSQL->ExecuteConsulta('MI_APLICACION');</li></ol></pre>
				<p>Se realiza el procedimiento agregando los tipos de ordenamiento por cada una de las columnas, la libreria genera el proceso de organizacion y contruye la consulta correspondiente-</p>
				
				
			</section>