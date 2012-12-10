<?php

	class Configuracion extends Controlador {
		
		function __Construct() {
			parent::__Construct();
		}
		
		public function Index() {
			
			$this->Vista->GenerarVista('Configuracion/Index', 'CONFIGURACION');
		}
		
		public function ConfiguracionAcceso() {
			
			$this->Vista->GenerarVista('Configuracion/ConfigAcceso', 'CONFIGURACION');
		}
		
		public function ConfiguracionBaseDatos() {
			
			$this->Vista->GenerarVista('Configuracion/ConfigBaseDatos', 'CONFIGURACION');
		}
		
		public function ConfiguracionCorreo() {
			
			$this->Vista->GenerarVista('Configuracion/ConfigCorreo', 'CONFIGURACION');
		}
	}
