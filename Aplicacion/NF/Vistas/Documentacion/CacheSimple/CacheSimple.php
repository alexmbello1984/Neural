			<section id="CacheSimple">
				<div class="page-header">
					<h1>Documentacion - Cache</h1>
					<h2>Cache Simple</h2>
				</div>
				<h3>Introduccion</h3>
				<p></p>
				<h3>Ejecucion</h3>
				<p>
					<strong>Nombre de la Clase:</strong> <code>NeuralCacheSimple</code>
					<p>Genera un proceso de cache simple recomendado para almacenar consultas a bases de datos las cuales contengan datos los cuales no cambian constantemente u otros datos que lo refieran.<br />
					En la ruta <code>Aplicacion/Cache</code> se almacenaran los diferentes archivos que componen cache.<br />
					Se generan dos archivos <code>archivo_idunique.cache</code> donde se almacenan los datos en formato <strong>JSON</strong> y otro <code>archivo_idunique.info</code> que contiene la información de comparación de expiración de los datos.</p>
				</p>
				
				<p><strong>Instanciamiento la Clase</strong></p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Cache = new NeuralCacheSimple;</li></ol></pre>
				
				<p><strong>Tiempo de Expiración de la Cache</strong>: Tiempo en la cual de debe renovar la cache correspondiente.<br />
				Si no es utilizado este metodo el tiempo por defecto de expiración es de <strong>60 Segundos</strong>.<br />
				<code>$TiempoEnSegundos</code> Tiempo en segundos que debe crearse o actualizarse la cache.</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Cache->DefinirTiempoExpiracion($TiempoEnSegundos);</li></ol></pre>
				
				<p><strong>Existencia de Cache</strong>: Valida si esta creada la cache y el tiempo de expiración.<br />
				<code>$LlaveUnica</code> ID de asignación para validar archivo cache especifico.</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Cache->ExistenciaCache($LlaveUnica);</li></ol></pre>
				
				<p><strong>Obtener Cache</strong>: Lee el archivo cache y devuelve su contenido.<br />
				Regresa Valor <code>true</code> cuando encuentra la cache correspondiente y <code>false</code> informando que que debe renovarla o no se encuentra.<br />
				<code>$LlaveUnica</code> ID de asignación para validar archivo cache especifico.</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Cache->ObtenerCache($LlaveUnica);</li></ol></pre>
				
				<p><strong>Guardar Cache</strong>: Escribe los datos correspondientes en el archivo cache.<br />
				<code>$LlaveUnica</code> ID de asignación para validar archivo cache especifico.<br />
				<code>$Contenido</code> Datos que se van a escribir en el archivo cache.</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Cache->GuardarCache($LlaveUnica, $Contenido);</li></ol></pre>
				
				<h3>Ejemplo de Uso</h3>
				<div class="bs-docs-example">
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Cache = new NeuralCacheSimple;</li><li class="L1">$Cache->DefinirTiempoExpiracion(120);</li><li class="L2">if($Cache->ExistenciaCache('ConsultaBD'))</li><li class="L3">{</li><li class="L4">	$ConsultaSQL = $Cache->ObtenerCache('ConsultaBD')</li><li class="L5">}</li><li class="L6">else</li><li class="L7">{</li><li class="L8">	$ConsultaSQL = $this->Modelo->ConsultaSQL();</li><li class="L9">	$Cache->GuardarCache('ConsultaBD', $ConsultaSQL);</li><li class="L0">}</li></ol></pre>
				</div>
				
			</section>