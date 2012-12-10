			<section id="Exportar">
				<div class="page-header">
					<h1>Documentacion - Exportar</h1>
					<h2>Exportar a Excel</h2>
				</div>
				<h3>Introduccion</h3>
				<p></p>
				<h3>Ejecucion</h3>
				<p>
					<strong>Nombre de la Clase:</strong> <code>NeuralExportarArchivoExcel</code>
				</p>
				
				<p>Instanciamiento la Clase</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Excel = new NeuralExportarArchivoExcel;</li></ol></pre>
				
				<p><strong>Matriz de Datos</strong>: <code>$Matriz</code> Array incremental de datos.</p>
				<div class="bs-docs-example">
					<pre style="font-size: 10px; line-height:11px">
array(
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
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Excel->MatrizDatos($Matriz);</li></ol></pre>
				
				<p>
					<strong>Descargar Archivo Excel</strong>:<br /> 
					<code>$file_name</code>: Nombre que se le dara al archivo descargado.<br />
					<code>$Ext</code>: Extensión del archivo, valor por defecto <strong>XLS</strong>.
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Excel->DescargarCrearExcel($file_name, $Ext);</li></ol></pre>
				
				
				<p>
					<strong>Crear Archivo Excel en Directorio</strong>:<br /> 
					<code>$loc_file</code>: Ruta completa donde se guardara el archivo junto con el nombre y la extension, no genera descarga del archivo correspondiente.<br />
					Windows: <code>c:\carpeta\archivo.xls</code><br />
					Linux: <code>/opt/carpeta/archivo.xls</code>
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Excel->Archivo($loc_file);</li></ol></pre>
				
				
				<h3>Ejemplo de Descarga de Archivo Excel</h3>
				<div class="bs-docs-example">
					<pre style="font-size: 10px; line-height:11px">
array(
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
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Excel = new NeuralExportarArchivoExcel;</li><li class="L1">$Excel->MatrizDatos($Matriz);</li><li class="L2">$Excel->DescargarCrearExcel('Informe_2012');</li></ol></pre>                
                
                <h3>Ejemplo de Fichero Excel</h3>
				<div class="bs-docs-example">
					<pre style="font-size: 10px; line-height:11px">
array(
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
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Excel = new NeuralExportarArchivoExcel;</li><li class="L1">$Excel->MatrizDatos($Matriz);</li><li class="L2">$Excel->Archivo('/opt/documentos/archivo.xls');</li></ol></pre>
			</section>