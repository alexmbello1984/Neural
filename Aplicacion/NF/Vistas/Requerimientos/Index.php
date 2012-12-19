			<section id="Requerimientos">
				<div class="page-header">
					<h1>Requerimientos</h1>
					<h2>Requerimiento de Funcionamiento</h2>
				</div>
				<h3>Introduccion</h3>
				<p>Neural Framework requiere las siguientes Condiciones:</p>
				
				<p>
					<strong>Versión de PHP</strong><br />
					La Versión de PHP debe ser igual o superior a <code>5.3.2</code><br />
					<?php AyudasRequerimientos::ValidarVersionPHP(); ?>
				</p>
				
				<p>
					<strong>Extensión ctype_alpha</strong><br />
					Extensión requerida para el funcionamiento del Framework<br />
					<?php AyudasRequerimientos::ValidarCtypeAlpha(); ?>
					
				</p>
				
				<p>
					<strong>Extensión MCrypt</strong><br />
					Extensión requerida para el funcionamiento del Framework<br />
					<?php AyudasRequerimientos::ValidarMCrypt(); ?>
				</p>
				
				<p>
					<strong>Directorio Cache</strong><br />
					Es necesario que la carpeta de cache tenga los permisos de lectura y escritura para su buen funcionamiento.<br />
					<?php AyudasRequerimientos::EscribirEnCache(); ?>
				</p>
				
				<p>
					<strong>Extensión PDO</strong><br />
					Extensión requerida para el funcionamiento del Framework<br />
					<?php AyudasRequerimientos::ValidarPDO(); ?>
				</p>
				
				
				
				

			</section>