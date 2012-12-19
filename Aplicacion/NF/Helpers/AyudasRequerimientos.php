<?php

	abstract class AyudasRequerimientos {
		
		public static function ValidarVersionPHP() {
			
			if(version_compare(phpversion(), '5.3.2', '>=')) {
				
				echo '<div class="alert alert-success"><strong>Versión PHP ',phpversion(),':</strong> La versión de PHP es Correcta.</div>';
			}
			else {
				echo '<div class="alert alert-error"><strong>Versión PHP ',phpversion(),' Incorrecta:</strong> Se requiere que tenga una versión o igual a <strong>5.3.2</strong> para su buen funcionamiento.</div>';
			}
		}
		
		public function ValidarCtypeAlpha() {
			
			if(function_exists('ctype_alpha')) {
				
				echo '<div class="alert alert-success"><strong>Extensión ctype_alpha Disponible</strong>.</div>';
			}
			else {
				echo '<div class="alert alert-error"><strong>No Se Encuentra Extensión:</strong> Es Necesaria la Extensión <strong>ctype_alpha</strong> para el funcionamiento del Framework, por favor instale dicha Extensión.</div>';
			}
		}
		
		public static function ValidarMCrypt() {
			
			if(extension_loaded('mcrypt')) {
				
				echo '<div class="alert alert-success"><strong>Extensión Mcrypt Disponible</strong>.</div>';
			}
			else {
				echo '<div class="alert alert-error"><strong>No Se Encuentra Extensión:</strong> Es Necesaria la Extensión <strong>Mcrypt</strong> para el funcionamiento del Framework, por favor instale dicha Extensión.</div>';
			}
		}
		
		public static function EscribirEnCache() {
			
			if(is_writable(__SysNeuralFileRootCache__)) {
				
				echo '<div class="alert alert-success"><strong>Directorio Cache</strong>: Disponible.</div>';
			}
			else {
				echo '<div class="alert alert-error"><strong>Directorio Cache Sin Permisos:</strong> Es necesario que de permisos de lectura y escritura a la carpeta de cache correspondiente.</div>';
			}
		}
		
		
		
		public function ValidarPDO() {
			
			if(extension_loaded('PDO')) {
				
				$Datos = '<div class="alert alert-success"><strong>Extensión PDO Disponible</strong>.<br /><br />Drivers Disponibles:<ol>';
				foreach (PDO::getAvailableDrivers() AS $Driver)
				{
					$Datos .= '<li>'.mb_strtoupper($Driver).'</li>';
				}
				$Datos .= '</ol></div>';
				
				echo $Datos;
			}
			else {
				echo '<div class="alert alert-error"><strong>No Se Encuentra Extensión:</strong> Es Necesaria la Extensión <strong>PDO</strong> para el funcionamiento del Framework, por favor instale dicha Extensión.</div>';
			}
		}
	}