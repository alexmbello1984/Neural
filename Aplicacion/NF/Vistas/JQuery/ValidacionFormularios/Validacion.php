			<section id="Validacion_formularios">
				<div class="page-header">
					<h1>JQuery - Validación - Ajax</h1>
					<h2>Validación Formularios Plugin VALIDATE</h2>
				</div>
				<h3>Introducción</h3>
				<p>Los Formularios HTML es necesario generar un filtro de información para que los datos enviados no sean inconsistentes, para esos caso se encuentra disponible la opción de construir una validación a través de <strong>Neural Framework.</strong></p>
				<h3>Ejecución</h3>
				<p><strong>Nombre de la Clase:</strong> <code>NeuralJQueryValidacionFormulario</code></p>
				<p>
					<strong>Instanciamos la Clase</strong>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion = new NeuralJQueryValidacionFormulario;</li></ol></pre>
				</p>
				
				<div class="alert alert-error">
						<strong>RECORDAR:</strong> los campos de formulario tanto el ID y el NAME(nombre) deben ser iguales para que funcione la validación correspondiente
				</div>
								
				<p>
					<strong>Campo Requerido:</strong> Obliga a que el campo sea obrigatorio ingresar un dato.<br />
					<code>$idCampo</code>: id del campo del formulario.<br />
					<code>$Texto</code>: Texto informativo en caso de no cumplir la regla correspondiente.
					<div class="bs-docs-example" id="validacion1"></div>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion->Requerido($idCampo, $Texto);</li></ol></pre>
				</p>
				
				<p>
					<strong>Rango de Longitud:</strong> Genera la validación de un campo con el rango de la longitud ingresada por ejemplo entre 5 y 10 caracteres.<br />
					<code>$idCampo</code>: id del campo del formulario.<br />
					<code>$ValorInicial</code>: Valor donde inicia el rango.<br />
					<code>$ValorFinal</code>: Valor donde finaliza el rango.<br />
					<code>$Texto</code>: Texto informativo en caso de no cumplir la regla correspondiente.
					<div class="bs-docs-example" id="validacion2"></div>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion->RangoLongitud($idCampo, $ValorInicial, $ValorFinal, $Texto);</li></ol></pre>
				</p>
				
				<p>
					<strong>Rango de Valor</strong>: Genera la validación de un campo con el rango de valores númericos.<br />
					<code>$idCampo</code>: id del campo del formulario.<br />
					<code>$ValorInicial</code>: Valor donde inicia el rango.<br />
					<code>$ValorFinal</code>: Valor donde finaliza el rango.<br />
					<code>$Texto</code>: Texto informativo en caso de no cumplir la regla correspondiente.
					<div class="bs-docs-example" id="validacion3"></div>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion->RangoValor($idCampo, $ValorInicial, $ValorFinal, $Texto);</li></ol></pre>
				</p>
				
				<p>
					<strong>Dato Remoto</strong>: Peticion remota de validacion de dato ingresado, el valor regresado son echo "false" encontrado no pasa validacion, echo "true" no encontrado pasa la validacion.<br />
					<code>$idCampo</code>: id del campo del formulario.<br />
					<code>$URLValidacion</code>: Dirección donde se enviara el dato para la validación.<br />
					<code>$Metodo</code>: Metodo de envio, soportado datos <strong>GET</strong> y <strong>POST (Recomendado)</strong>.<br />
					<code>$Texto</code>: Texto informativo en caso de no cumplir la regla correspondiente.
					<div class="bs-docs-example" id="validacion4"></div>
					<div class="bs-docs-example">
						<code>Archivo donde se evalua el dato enviado</code>
						<pre>
$Variable = $_POST['idCampo'];

if($Variable == 'Neural') {
	echo 'false';	
}
else {
	echo 'true';	
}						</pre>
					</div>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion->Remote($idCampo, $URLValidacion, $Metodo, $Texto);</li></ol></pre>
				</p>
				
				<p>
					<strong>Campo Númerico:</strong> Valida que sean datos númericos los ingresados.<br />
					<code>$idCampo</code>: id del campo del formulario.<br />
					<code>$Texto</code>: Texto informativo en caso de no cumplir la regla correspondiente.
					<div class="bs-docs-example" id="validacion5"></div>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion->Numero($idCampo, $Texto);</li></ol></pre>
				</p>
				
				<p>
					<strong>Email:</strong> Valida estructura del email para que sea correcto.<br />
					<code>$idCampo</code>: id del campo del formulario.<br />
					<code>$Texto</code>: Texto informativo en caso de no cumplir la regla correspondiente.
					<div class="bs-docs-example" id="validacion6"></div>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion->EMail($idCampo, $Texto);</li></ol></pre>
				</p>
				
				<p>
					<strong>Cantidad Minima de Caracteres:</strong> Valida la cantidad de caracteres ingresados.<br />
					<code>$idCampo</code>: id del campo del formulario.<br />
					<code>$Cantidad</code>: Cantidad minima de caracteres a ingresar.<br />
					<code>$Texto</code>: Texto informativo en caso de no cumplir la regla correspondiente.
					<div class="bs-docs-example" id="validacion7"></div>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion->CantMinCaracteres($idCampo, $Cantidad, $Texto);</li></ol></pre>
				</p>
				
				<p>
					<strong>Cantidad Maxima de Caracteres:</strong> Valida la cantidad de caracteres ingresados.<br />
					<code>$idCampo</code>: id del campo del formulario.<br />
					<code>$Cantidad</code>: Cantidad maxima de caracteres a ingresar.<br />
					<code>$Texto</code>: Texto informativo en caso de no cumplir la regla correspondiente.
					<div class="bs-docs-example" id="validacion8"></div>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion->CantMaxCaracteres($idCampo, $Cantidad, $Texto);</li></ol></pre>
				</p>
				
				<p>
					<strong>Valor Minimo</strong>: Valor numerico minimo a ingresar.<br />
					<code>$idCampo</code>: id del campo del formulario.<br />
					<code>$Cantidad</code>: Cantidad numerica.<br />
					<code>$Texto</code>: Texto informativo en caso de no cumplir la regla correspondiente.
					<div class="bs-docs-example" id="validacion9"></div>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion->ValorMinimo($idCampo, $Cantidad, $Texto);</li></ol></pre>
				</p>
				
				<p>
					<strong>Valor Maximo</strong>: Valor numerico maximo a ingresar.<br />
					<code>$idCampo</code>: id del campo del formulario.<br />
					<code>$Cantidad</code>: Cantidad numerica.<br />
					<code>$Texto</code>: Texto informativo en caso de no cumplir la regla correspondiente.
					<div class="bs-docs-example" id="validacion10"></div>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion->ValorMaximo($idCampo, $Cantidad, $Texto);</li></ol></pre>
				</p>
				
				<p>
					<strong>URL</strong>: valida direcciones http://www.dominio.com<br />
					<code>$idCampo</code>: id del campo del formulario.<br />
					<code>$Texto</code>: Texto informativo en caso de no cumplir la regla correspondiente.
					<div class="bs-docs-example" id="validacion11"></div>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion->URL($idCampo, $Texto);</li></ol></pre>
				</p>
				
				<p>
					<strong>Fecha</strong>: valida fechas con formato AÑO/MES/DIA<br />
					<code>$idCampo</code>: id del campo del formulario.<br />
					<code>$Texto</code>: Texto informativo en caso de no cumplir la regla correspondiente.
					<div class="bs-docs-example" id="validacion12"></div>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion->Fecha($idCampo, $Texto);</li></ol></pre>
				</p>
				
				<p>
					<strong>Fecha ISO</strong>: valida fechas con formato AÑO-MES-DIA<br />
					<code>$idCampo</code>: id del campo del formulario.<br />
					<code>$Texto</code>: Texto informativo en caso de no cumplir la regla correspondiente.
					<div class="bs-docs-example" id="validacion13"></div>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion->FechaISO($idCampo, $Texto);</li></ol></pre>
				</p>
				
				<p>
					<strong>Digitos</strong>: valida que sean números mas no permite decimales, solo numeros (0-9)<br />
					<code>$idCampo</code>: id del campo del formulario.<br />
					<code>$Texto</code>: Texto informativo en caso de no cumplir la regla correspondiente.
					<div class="bs-docs-example" id="validacion14"></div>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion->Digitos($idCampo, $Texto);</li></ol></pre>
				</p>
				
				<p>
					<strong>Campo Igual A Campo</strong>: Realiza la validacion del texto ingresado sea igual a otro campo asignado.<br />
					<code>$idCampo</code>: id del campo del formulario.<br />
					<code>$IdIgualCampo</code>: id del campo de referencia.<br />
					<code>$Texto</code>: Texto informativo en caso de no cumplir la regla correspondiente.
					<div class="bs-docs-example" id="validacion15"></div>
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion->IgualACampo($idCampo, $IdIgualCampo, $Texto);</li></ol></pre>
				</p>
				
				<p>
					<strong>SubmitHandler</strong>: Ingreso de Codigo JQuery posterior a la validacion correspondiente del formulario.<br />
					<code>$Codigo</code>: Metodos y clases que construyan codigo para ser utilizado en el formulario de validacion
					<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Validacion->SubmitHandler(NeuralJQueryAjax::EnviarFormularioPOST(.....));</li></ol></pre>
				</p>
				
			</section>