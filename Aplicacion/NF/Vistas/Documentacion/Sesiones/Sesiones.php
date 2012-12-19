			<section id="CacheSimple">
				<div class="page-header">
					<h1>Documentacion - Sesiones</h1>
					<h2>Sesiones Simples</h2>
				</div>
				<h3>Introduccion</h3>
				<p></p>
				<h3>Ejecucion</h3>
				<p>
					<strong>Nombre de la Clase:</strong> <code>NeuralSesiones</code>
					<p>Genera e Inicializa opciones de Sesiones Simples, libreria para crear Sesiones Simples</p>
				</p>
				
				<p><strong>Inicialización de la Sesión</strong><br />
				Este Metodo debe ir siempre que se manejen sesiones.<br />
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralSesiones::Inicializacion();</li></ol></pre>
				
				<p><strong>Agregar Array a la Sesión</strong><br />
				Ingresa un valor array a la sesión <br />
				<code>$Array</code> Array asociativo o incremental que se maneje.
				<br /><code>array('Datos' => array('Opcion' => 'Valor', 'Opcion' => 'Valor')</code>
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralSesiones::AgregarArray($Array);</li></ol></pre>
				
				<p><strong>Agregar Llave Valor</strong><br />
				Agrega a una sesión un puntero y un valor.<br />
				<code>$Llave</code>: Puntero que tendra la sesión para ser identificada.<br />
				<code>$Valor</code>: Valor correspondiente.</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralSesiones::AgregarLlave($Llave, $Valor);</li></ol></pre>
				
				<p><strong>Eliminar Puntero Primer Nivel</strong><br />
				Elimina el Puntero del array seleccionado que se encuentra en primer nivel.<br />
				<code>$Llave</code> Puntero correspondiente del dato a eliminar.<br />
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralSesiones::EliminarValor($Llave);</li></ol></pre>
				
				<p><strong>Eliminar Sesión</strong><br />
				Elimina por Completo la Sesión.<br />
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralSesiones::Finalizacion();</li></ol></pre>
				
				<h3>Ejemplo de Uso</h3>
				<div class="bs-docs-example">
					<code>
						<pre>
Array
(
    [Info] => Array
        (
            [Nombre] => Neural Framework
            [Version] => 1.0
        )
    [Usuario] => Anonimo
)
						</pre>
					</code>	
				</div>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">NeuralSesiones::Inicializacion();</li><li class="L1">NeuralSesiones::AgregarArray(array('Info' => array('Nombre' => 'Neural Framework', 'Version' => '1.0')));</li><li class="L2">NeuralSesiones::AgregarLlave('Usuario', 'Anonimo');</li></ol></pre>
				<br /><br />
				<p>
					Para Observar la variable de sesión solo se debe imprimir <code>print_r($_SESSION)</code>, si se desea utilizar las variables directas de PHP puede utilizarse sin ningun problema de compatibilidad.
				</p>
			</section>