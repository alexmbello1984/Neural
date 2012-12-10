			<section id="Correo">
				<div class="page-header">
					<h1>Documentacion - Enviar Correo Electronico</h1>
					<h2>Envio de Correos Electronicos</h2>
				</div>
				<h3>Introduccion</h3>
				<p></p>
				<h3>Ejecucion</h3>
				<p>
					<strong>Nombre de la Clase:</strong> <code>NeuralEnviarCorreos</code>
				</p>
				
				<p>Instanciamiento la Clase</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Correo = new NeuralEnviarCorreos;</li></ol></pre>
				
				<p><strong>Emisor</strong>: <code>$Nombre</code> Nombre de quien envia el correo electronico.</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Correo->Emisor($Nombre);</li></ol></pre>
				
				<p><strong>Respuesta al Manesaje</strong>:<br /> 
					<code>$Correo</code>: Correo electronico al cual se generara la respuesta del correo.<br />
					<code>$Nombre</code>: Nombre para mostrar de la respuesta correspondiente.
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Correo->ResponderMensajeEnviado($Correo, $Nombre);</li></ol></pre>
				
				<p><strong>Archivos Adjuntos</strong>:<br /> 
					<code>$Ruta</code>: Ruta fisica del archivo.<br />
					<strong>Linux:</strong> <code>/home/Documentos/archivo.tar</code><br />
					<strong>Windows:</strong> <code>c:\Usuario\Mis Documentos\archivo.zip</code>
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Correo->ArchivosAdjuntos($Ruta);</li></ol></pre>
				
				<p>
					<strong>Asunto del Mensaje</strong>: <code>$Asunto</code>, Asunto del correo electronico.
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Correo->AsuntoCorreo($Asunto);</li></ol></pre>
				
				<p>
					<strong>Enviar Correo A:</strong><br />
					<code>$Correo</code>: Correo electronico a enviar.<br />
					<code>$Nombre</code>: Nombre del destinatario del Correo.
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Correo->EnviarCorreoA($Correo, $Nombre);</li></ol></pre>
				
				<p>
					<strong>Enviar Correo Copia:</strong><br />
					<code>$Correo</code>: Correo electronico a enviar.<br />
					<code>$Nombre</code>: Nombre del destinatario del Correo.
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Correo->EnviarCorreoCopia($Correo, $Nombre);</li></ol></pre>
				
				<p>
					<strong>Enviar Correo Oculto:</strong><br />
					<code>$Correo</code>: Correo electronico a enviar.<br />
					<code>$Nombre</code>: Nombre del destinatario del Correo.
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Correo->EnviarCorreoOculto($Correo, $Nombre);</li></ol></pre>
				
				<p>
					<strong>Mensaje Alternativo No HTML:</strong> Mensaje alternativo para dispositivos que no admitan HTML<br />
					<code>$Mensaje</code>: Mensaje no HTML para enviar, texto alternativo
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Correo->MensajeAlternativoNoHTML($Mensaje);</li></ol></pre>
				
				<p>
					<strong>Mensaje HTML:</strong><br />
					<code>$Mensaje</code>: Mensaje HTML para enviar, cuerpo del mensaje.
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Correo->MensajeHTML($Mensaje);</li></ol></pre>
				
				<p>
					<strong>Envio de Mensaje Electronico:</strong><br />
					<code>$AplicacionEnvia</code>: Aplicacion que envia el correo electronico.
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Correo->EnviarCorreo($AplicacionEnvia);</li></ol></pre>
				
				<p>
					<strong>Debug:</strong><br />
					<code>$Opcion</code>: tipo de debug para visualizar algun error.<br />
					<code>1</code>: Errores y mensajes.<br />
					<code>2</code>: Solo mensajes.
				</p>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Correo->SMTPDebug($Opcion);</li></ol></pre>
				
				<h3>Ejemplo de Uso</h3>
				<div class="bs-docs-example">
					Apertura de Ticket 123456789 <strong>Completado</strong>
				</div>
				<pre class="prettyprint linenums"><ol class="linenums"><li class="L0">$Correo = new NeuralEnviarCorreos;</li><li class="L1">$Correo->Emisor('Administrador de Tickets');</li><li class="L2">$Correo->ResponderMensajeEnviado('tickets_bog123@gmail.com', 'Administrador de Tickets');</li><li class="L3">$Correo->AsuntoCorreo('Notificación de Ticket 123456789');</li><li class="L4">$Correo->EnviarCorreoA('usuario@correo.com', 'Usuario');</li><li class="L5">$Correo->EnviarCorreoCopia('usuario1@correo.com', 'Usuario 1');</li><li class="L6">$Correo->EnviarCorreoCopia('usuario2@correo.com', 'Usuario 2');</li><li class="L7">$Correo->EnviarCorreoCopia('usuario3@correo.com', 'Usuario 3');</li><li class="L8">$Correo->EnviarCorreoOculto('usuario4@correo.com', 'Usuario 4');</li><li class="L9">$Correo->EnviarCorreoOculto('usuario5@correo.com', 'Usuario 5');</li><li class="L0">$Correo->EnviarCorreoOculto('usuario6@correo.com', 'Usuario 6');</li><li class="L1">$Correo->MensajeAlternativoNoHTML('Apertura de Ticket 123456789 Completado');</li><li class="L2">$Correo->MensajeHTML('&lt;p&gt;Apertura de Ticket 123456789 &lt;strong&gt;Completado&lt;/strong&gt;&lt;/p&gt;');</li><li class="L3">$Correo->EnviarCorreo('MI_APLICACION');</li></ol></pre>
			</section>