<?php
	
	abstract class NeuralAsignacionVistas {
		
		/**
		 * SeleccionVista($Vista)
		 * 
		 * Se ingresan el orden de las vistas en un array no asociativo 
		 * Ejemplo: $Array[]=array('archivo.php', 'carpeta/archivo.php', 'NOMBREARCHIVO');
		 * el termino "NOMBREARCHIVO": es el nombre asignado para a�adir el archivo creado para agregar la informacion
		 * Recordar: estos archivos se crearan dentro de la ruta de la siguiente ruta:
		 * Aplicacion/Nombre de la Aplicacion/vistas/
		 */
		public static function SeleccionVista($Vista = 0) {
			
			$Array[0] = array(
					'NOMBREARCHIVO'
			);
			
			$Array['ESTRUCTURA'] = array(
					'General/Head.php', 
					'General/Menu_Principal.php', 
					'General/Menu_Izquierdo.php', 
					'NOMBREARCHIVO', 
					'General/Footer.php'
			);
			
			$Array['CONFIGURACION'] = array(
					'General/Head.php', 
					'General/Menu_Principal.php', 
					'Configuracion/Menu_Izquierdo.php', 
					'NOMBREARCHIVO', 
					'General/Footer.php'
			);
			
			$Array['PRIMEROS_PASOS'] = array(
					'General/Head.php', 
					'General/Menu_Principal.php', 
					'PrimerosPasos/Menu_Izquierdo.php', 
					'NOMBREARCHIVO', 
					'General/Footer.php'
			);
			
			$Array['DOCUMENTACION'] = array(
					'General/Head.php', 
					'General/Menu_Principal.php', 
					'Documentacion/Menu_Izquierdo.php', 
					'NOMBREARCHIVO', 
					'General/Footer.php'
			);
			
			$Array['JQUERY'] = array(
					'JQuery/Head.php', 
					'General/Menu_Principal.php', 
					'JQuery/Menu_Izquierdo.php', 
					'NOMBREARCHIVO', 
					'JQuery/Footer.php'
			);
			
			/**********************NO EDITAR**************************/
			
			
			return SysMisNeural::ValidarAsignacionVista($Array, $Vista);
		}
	}