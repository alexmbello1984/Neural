<?php

	class Estructura extends Controlador {
		
		function __Construct() {
			parent::__Construct();
		}
		
		public function Index() {
			
			$this->Vista->GenerarVista('Estructura/Estructura', 'ESTRUCTURA');
		}
	}
