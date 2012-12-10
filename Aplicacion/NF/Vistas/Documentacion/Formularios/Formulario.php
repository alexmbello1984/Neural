			<section id="DocumentacionBD">
				<div class="page-header">
					<h1>Documentacion - Formularios</h1>
					<h2>Formularios</h2>
				</div>
				<h3>Introduccion</h3>
				<p>Clase para la creacion de formularios tipo fieldset</p>
				
				<h3>Ejecucion</h3>
				<p>
					<strong>Nombre de la Clase:</strong> <code>NeuralFormularios</code>
				</p>
				
				<strong>Instanciamiento la Clase</strong>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Formulario = new NeuralFormularios;</li></ol></pre>
				
				<strong>Configuracion del Formulario</strong><br /><br />
				<code>$Action</code>: Direccion donde se envia el formulario http://localhost/Mi_Aplicacion/Controlador/Metodo<br />
				<code>$Metodo</code>: Metodos soportados GET y POST <code>(Metodo PUT en navegadores que soporten o sean compatibles).</code>.<br />
				<code>$Nombre</code>: Nombre del Formulario <code>name="Nombre"</code>.<br />
				<code>$Id</code>: ID del formulario<br />
				<code>$Css</code>: valor por defecto false, nombre del metodo de la hoja de estilos class="body".<br />
				<code>$style</code>:  valor por defecto false, array asociativo con los valores <code>array('font-family' => 'verdana', 'font-size' => '10px')</code><br />
				<code>$Data</code>: valor por defecto false, valor true para envio de archivos a traves del formulario
				<br /><br />
				<pre class="prettyprint linenums" style="font-size: 11px;"><ol class="linenums"><li class="L0">$Formulario->ConfiguracionFormulario($Action, $Metodo, $Nombre, $Id, $Css = false, $Style = false, $Data = false);</li></ol></pre>
				<br /><br /><br />
				
				<strong>Campo Archivo</strong><br /><br />
				<p>Genera un campo tipo file para adjuntar archivos al formulario, la condicion es que para enviar el archivo en el metodo de configuracion del formulario el parametro <code>$Data</code> debe ser valor true.</p>
				<code>$Titulo</code>: titulo del campo se imprimira en el campo label.<br />
				<code>$Nombre</code>: nombre el campo name="".<br />
				<code>$Id</code>: ID del campo<br />
				<code>$Valor</code>: el valor del campo, esta por defecto false en dado caso que no se requiera colocar un valor.<br />
				<code>$CssLabel</code>: el valor de la propiedad class del label. valor por defecto false<br />
				<code>$CssInput</code>: el valor de la propiedad class del input. valor por defecto false<br />
				<code>$StyleLabel</code>: array asociativo con las propiedades de CSS, valor por defecto false<br />
				<code>$StyleInput</code>: array asociativo con las propiedades de CSS, valor por defecto false<br />
				<code>$SaltoLinea</code>: cantidad de saltos de lineas &lt;br /&gt; despues del campo, esto para dar la separacion correspondiente. Valor por defecto 1.
				<br /><br />
				<div class="bs-docs-example">
					<strong>Titulo</strong>: <input type="file" style="font-size: 10px;"/>
				</div>
				<pre class="prettyprint linenums" style="font-size: 11px;"><ol class="linenums"><li class="L0">$Formulario->AgregarArchivo($Titulo, $Nombre, $Id, $Valor = false, $CssLabel = false, $CssInput = false, $StyleLabel = false, $StyleInput = false, $SaltoLinea = 1);</li><li class="L1">&lt;label&gt;Titulo&lt;/label&gt;: &lt;input type="file" .... /&gt;</li></ol></pre>
				<br /><br /><br />
				
				<strong>Campo Password</strong><br /><br />
				<p>Genera un campo tipo password.</p>
				<code>$Titulo</code>: titulo del campo se imprimira en el campo label.<br />
				<code>$Nombre</code>: nombre el campo name="".<br />
				<code>$Id</code>: ID del campo<br />
				<code>$Valor</code>: el valor del campo, esta por defecto false en dado caso que no se requiera colocar un valor.<br />
				<code>$CssLabel</code>: el valor de la propiedad class del label. valor por defecto false<br />
				<code>$CssInput</code>: el valor de la propiedad class del input. valor por defecto false<br />
				<code>$StyleLabel</code>: array asociativo con las propiedades de CSS, valor por defecto false<br />
				<code>$StyleInput</code>: array asociativo con las propiedades de CSS, valor por defecto false<br />
				<code>$SaltoLinea</code>: cantidad de saltos de lineas &lt;br /&gt; despues del campo, esto para dar la separacion correspondiente. Valor por defecto 1.
				<br /><br />
				<div class="bs-docs-example">
					<strong>Titulo</strong>: <input type="password" />
				</div>
				<pre class="prettyprint linenums" style="font-size: 11px;"><ol class="linenums"><li class="L0">$Formulario->AgregarPassword($Titulo, $Nombre, $Id, $Valor = false, $CssLabel = false, $CssInput = false, $StyleLabel = false, $StyleInput = false, $SaltoLinea = 1);</li><li class="L1">&lt;label&gt;Titulo&lt;/label&gt;: &lt;input type="password" .... /&gt;</li></ol></pre>
				<br /><br /><br />
				
				<strong>Campo Select</strong><br /><br />
				<p>Genera un campo tipo select.</p>
				<code>$Titulo</code>: titulo del campo se imprimira en el campo label.<br />
				<code>$Nombre</code>: nombre el campo name="".<br />
				<code>$Id</code>: ID del campo<br />
				<code>$ValorCampo</code>: el valor de cada una de las opciones. <code>array('valor', 'valor')</code><br />
				<code>$ValorMostrar</code>: el texto que se muestra de la lista desplegable. <code>array('valor', 'valor')</code><br />
				<code>$CssLabel</code>: el valor de la propiedad class del label. valor por defecto false<br />
				<code>$CssInput</code>: el valor de la propiedad class del input. valor por defecto false<br />
				<code>$StyleLabel</code>: array asociativo con las propiedades de CSS, valor por defecto false<br />
				<code>$StyleInput</code>: array asociativo con las propiedades de CSS, valor por defecto false<br />
				<code>$SaltoLinea</code>: cantidad de saltos de lineas &lt;br /&gt; despues del campo, esto para dar la separacion correspondiente. Valor por defecto 1.
				<br /><br />
				<div class="bs-docs-example">
					<strong>Titulo</strong>: <select><option>Escoja Una Opci�n</option><option>Valor</option><option>Valor</option><option>Valor</option><option>Valor</option><option>Valor</option></select>
				</div>
				<pre class="prettyprint linenums" style="font-size: 11px;"><ol class="linenums"><li class="L0">$Formulario->AgregarSelect($Titulo, $Nombre, $Id, $ValorCampo, $ValorMostrar, $CssLabel = false, $CssInput = false, $StyleLabel = false, $StyleInput = false, $SaltoLinea = 1);</li><li class="L1">&lt;label&gt;Titulo&lt;/label&gt;: &lt;select&gt;....&lt;/select&gt;</li></ol></pre>
				<br /><br /><br />
				
				<strong>Campo Button</strong><br /><br />
				<p>Genera un campo tipo button.</p>
				<code>$Nombre</code>: nombre el campo name="".<br />
				<code>$Id</code>: ID del campo<br />
				<code>$TextoBoton</code>: El texto que mostrara el boton.<br />
				<code>$Css</code>: el valor de la propiedad class del input. valor por defecto false<br />
				<code>$Style</code>: array asociativo con las propiedades de CSS, valor por defecto false<br />
				<code>$SaltoLinea</code>: cantidad de saltos de lineas &lt;br /&gt; despues del campo, esto para dar la separacion correspondiente. Valor por defecto 1.
				<br /><br />
				<div class="bs-docs-example">
					<strong>Titulo</strong>: <button>Enviar</button>
				</div>
				<pre class="prettyprint linenums" style="font-size: 11px;"><ol class="linenums"><li class="L0">$Formulario->AgregarSubmit($Nombre, $Id, $TextoBoton, $Css = false, $Style = false, $SaltoLinea = 1);</li><li class="L1">&lt;label&gt;Titulo&lt;/label&gt;: &lt;button&gt;....&lt;/button&gt;</li></ol></pre>
				<br /><br /><br />
				
				<strong>Campo Texto</strong><br /><br />
				<p>Genera un campo tipo text.</p>
				<code>$Titulo</code>: titulo del campo se imprimira en el campo label.<br />
				<code>$Nombre</code>: nombre el campo name="".<br />
				<code>$Id</code>: ID del campo<br />
				<code>$Valor</code>: el valor del campo, esta por defecto false en dado caso que no se requiera colocar un valor.<br />
				<code>$CssLabel</code>: el valor de la propiedad class del label. valor por defecto false<br />
				<code>$CssInput</code>: el valor de la propiedad class del input. valor por defecto false<br />
				<code>$StyleLabel</code>: array asociativo con las propiedades de CSS, valor por defecto false<br />
				<code>$StyleInput</code>: array asociativo con las propiedades de CSS, valor por defecto false<br />
				<code>$SaltoLinea</code>: cantidad de saltos de lineas &lt;br /&gt; despues del campo, esto para dar la separacion correspondiente. Valor por defecto 1.
				<br /><br />
				<div class="bs-docs-example">
					<strong>Titulo</strong>: <input type="text" />
				</div>
				<pre class="prettyprint linenums" style="font-size: 11px;"><ol class="linenums"><li class="L0">$Formulario->AgregarText($Titulo, $Nombre, $Id, $Valor = false, $CssLabel = false, $CssInput = false, $StyleLabel = false, $StyleInput = false, $SaltoLinea = 1);</li><li class="L1">&lt;label&gt;Titulo&lt;/label&gt;: &lt;input type="text" .... /&gt;</li></ol></pre>
				<br /><br /><br />
				
				<strong>Campo Textarea</strong><br /><br />
				<p>Genera un campo textarea.</p>
				<code>$Titulo</code>: titulo del campo se imprimira en el campo label.<br />
				<code>$Nombre</code>: nombre el campo name="".<br />
				<code>$Id</code>: ID del campo<br />
				<code>$Valor</code>: el valor del campo, esta por defecto false en dado caso que no se requiera colocar un valor.<br />
				<code>$CssLabel</code>: el valor de la propiedad class del label. valor por defecto false<br />
				<code>$CssInput</code>: el valor de la propiedad class del input. valor por defecto false<br />
				<code>$StyleLabel</code>: array asociativo con las propiedades de CSS, valor por defecto false<br />
				<code>$StyleInput</code>: array asociativo con las propiedades de CSS, valor por defecto false<br />
				<code>$SaltoLinea</code>: cantidad de saltos de lineas &lt;br /&gt; despues del campo, esto para dar la separacion correspondiente. Valor por defecto 1.<br />
				<code>$Ancho</code>: ancho del campo, valor por defecto 32.<br />
				<code>$Alto</code>: alto del campo, valor por defecto 8.
				<br /><br />
				<div class="bs-docs-example">
					<strong>Titulo</strong>: <textarea></textarea>
				</div>
				<pre class="prettyprint linenums" style="font-size: 11px;"><ol class="linenums"><li class="L0">$Formulario->AgregarTextArea($Titulo, $Nombre, $Id, $Valor = false, $CssLabel = false, $CssInput = false, $StyleLabel = false, $StyleInput = false, $SaltoLinea = 1, $Ancho = '32', $Alto = '8');</li><li class="L1">&lt;label&gt;Titulo&lt;/label&gt;: &lt;textarea&gt; .... &lt;/textarea&gt;</li></ol></pre>
				<br /><br /><br />
				
				<strong>Campo TextHidden</strong><br /><br />
				<p>Genera un campo tipo hidden.</p>
				<code>$Nombre</code>: nombre el campo name="".<br />
				<code>$Id</code>: ID del campo<br />
				<code>$Valor</code>: el valor del campo, esta por defecto false en dado caso que no se requiera colocar un valor.<br />
				<code>$Css</code>: el valor de la propiedad class del input. valor por defecto false<br />
				<code>$Style</code>: array asociativo con las propiedades de CSS, valor por defecto false
				<br /><br />
				<div class="bs-docs-example">
					<pre class="prettyprint linenums" style="font-size: 11px;"><ol class="linenums"><li class="L0">&lt;input type="hidden" .... /&gt;</li></ol></pre>
				</div>
				<pre class="prettyprint linenums" style="font-size: 11px;"><ol class="linenums"><li class="L0">$Formulario->AgregarTextHidden($Nombre, $Id, $Valor, $Css, $Style);</li><li class="L1">&lt;label&gt;Titulo&lt;/label&gt;: &lt;input type="hidden" .... /&gt;</li></ol></pre>
				<br /><br /><br />
				
				<strong>Campo Abrir Fieldset</strong><br /><br />
				<p>Genera un tag tipo fieldset.</p>
				<code>$Nombre</code>: nombre el campo name="".<br />
				<code>$Id</code>: ID del campo<br />
				<code>$Css</code>: el valor de la propiedad class del input. valor por defecto false<br />
				<code>$Style</code>: array asociativo con las propiedades de CSS, valor por defecto false
				<br /><br />
				<div class="bs-docs-example">
					<fieldset style="border: 1px solid blue;">
						<code>@fieldset</code>
					</fieldset>
				</div>
				<pre class="prettyprint linenums" style="font-size: 11px;"><ol class="linenums"><li class="L0">$Formulario->FieldsetAbrir($Css = false, $Style = false, $Id, $Nombre);</li><li class="L1">&lt;fieldset&gt;</li></ol></pre>
				<br /><br /><br />
				
				<strong>Campo Cerrar Fieldset</strong><br /><br />
				<p>Genera un tag tipo fieldset.</p>
				<div class="bs-docs-example">
					<fieldset style="border: 1px solid blue;">
						<code>/@fieldset</code>
					</fieldset>
				</div>
				<pre class="prettyprint linenums" style="font-size: 11px;"><ol class="linenums"><li class="L0">$Formulario->FieldsetCerrar();</li><li class="L1">&lt;/fieldset&gt;</li></ol></pre>
				<br /><br /><br />
				
				<strong>Campo Legend</strong><br /><br />
				<p>Genera un tag tipo Legend.</p>
				<code>$Texto</code>: Texto del Campo<br />
				<code>$Nombre</code>: nombre el campo name="".<br />
				<code>$Id</code>: ID del campo<br />
				<code>$Css</code>: el valor de la propiedad class del input. valor por defecto false<br />
				<code>$Style</code>: array asociativo con las propiedades de CSS, valor por defecto false
				<br /><br />
				<div class="bs-docs-example">
					<fieldset style="border: 1px solid blue;">
						<legend style="font-size: 10px; width: 100px; height: 28px; margin-left: 15px; text-align: left; padding-left: 15px; border: 1px solid red;">Texto Leyenda</legend>
					</fieldset>
				</div>
				<pre class="prettyprint linenums" style="font-size: 11px;"><ol class="linenums"><li class="L0">$Formulario->Legend($Texto, $Css = false, $Style = false, $Id = false, $Nombre = false);</li><li class="L1">&lt;legend&gt; .... &lt;/legend&gt;</li></ol></pre>
				<br />
				
				<strong>Construir / Mostrar Formulario</strong><br /><br />
				<p>Constructor del formulario.</p>
				<pre class="prettyprint linenums" style="font-size: 11px;"><ol class="linenums"><li class="L0">$Formulario->MostrarFormulario();</li></ol></pre>
				<br /><br /><br />
				
				<h3>Ejemplos de Formularios</h3>
				<p><strong>Formulario sencillo</strong></p>
				<div class="bs-docs-example">
					<fieldset style="border: 1px solid black; padding: 20px;">
						<strong>Nombre</strong>: <input type="text" /><br />
						<strong>Apellidos</strong>: <input type="text" /><br />
						<strong>Contrase�a</strong>: <input type="password" /><br />
						<button>Enviar</button>
					</fieldset>
				</div>
				<pre class="prettyprint linenums" style="font-size: 11px;"><ol class="linenums"><li class="L0">$Formulario = new NeuralFormularios;</li><li class="L0">$Formulario->ConfiguracionFormulario('http://localhost', 'POST', 'form', 'form', 'false', 'false', 'false');</li><li class="L0">$Formulario->AgregarText('Nombre', 'nombre', 'nombre', 'false', 'false', 'false', 'false', 'false');</li><li class="L0">$Formulario->AgregarText('Apellidos', 'Apellidos', 'Apellidos', 'false', 'false', 'false', 'false', 'false');</li><li class="L0">$Formulario->AgregarPassword('Constrase�a', 'pass', 'pass', 'false', 'false', 'false', 'false', 'false');</li><li class="L0">$Formulario->AgregarSubmit('procesar', 'procesar', 'Enviar', 'false', 'false');</li><li class="L0">return $Formulario->MostrarFormulario();</li></ol></pre>
				<br /><br />
				
				<p><strong>Formulario con Fieldset</strong></p>
				<div class="bs-docs-example">
					<fieldset style="border: 1px solid black; padding: 20px;">
						<legend style="font-size: 14px; font-weight: bold; width: 300px; height: 28px; margin-left: 15px; text-align: left; padding-top: 10px; padding-left: 15px; border: 1px solid green;">Informacion de Sesion</legend>
						<strong>Usuario</strong>: <input type="text" /><br />
						<strong>Contrase�a</strong>: <input type="password" /><br />
						<strong>Correo</strong>: <input type="text" /><br />				
					</fieldset>
					<br /><br />
					<fieldset style="border: 1px solid black; padding: 20px;">
						<legend style="font-size: 14px; font-weight: bold; width: 300px; height: 28px; margin-left: 15px; text-align: left; padding-top: 10px; padding-left: 15px; border: 1px solid green;">Datos Personales</legend>
						<strong>Nombres</strong>: <input type="text" /><br />
						<strong>Apellidos</strong>: <input type="text" /><br />
						<strong>Direccion</strong>: <textarea cols="32" rows="8"></textarea><br />
						<strong>Tipo de Sangre</strong>: <select><option>Escoja Una opci�n</option><option>A</option><option>AB</option><option>B</option><option>O</option></select>
					</fieldset>
					<br /><button>Enviar</button>
				</div>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Formulario = new NeuralFormularios;</li><li class="L0">$Formulario->ConfiguracionFormulario('http://localhost', 'POST', 'form', 'form', 'false', 'false', 'false');</li><li class="L0">$Formulario->FieldsetAbrir();</li><li class="L0">$Formulario->Legend('Informacion de Sesion');</li><li class="L0">	$Formulario->AgregarText('Usuario', 'Usuario', 'Usuario');</li><li class="L0">	$Formulario->AgregarPassword('Contrase�a', 'pass', 'pass');</li><li class="L0">	$Formulario->AgregarText('Correo', 'Correo', 'Correo');</li><li class="L0">$Formulario->FieldsetCerrar();</li><li class="L0">$Formulario->FieldsetAbrir();</li><li class="L0">$Formulario->Legend('Datos Personales');</li><li class="L0">	$Formulario->AgregarText('Nombres', 'Nombres', 'Nombres');</li><li class="L0">	$Formulario->AgregarText('Apellidos', 'Apellidos', 'Apellidos');</li><li class="L0">	$Formulario->AgregarTextArea('Direccion', 'Direccion', 'Direccion');</li><li class="L0">	$Formulario->AgregarSelect('Tipo de Sangre', 'tipo_sangre', 'tipo_sangre', array('A', 'AB', 'B', 'O'), array('A', 'AB', 'B', 'O'));</li><li class="L0">$Formulario->FieldsetCerrar();</li><li class="L0">return $Formulario->MostrarFormulario();</li></ol></pre>				
			</section>