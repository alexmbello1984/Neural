<?php
	
	class Requerimientos extends Controlador {
		
		function __Construct() {
			parent::__Construct();
		}
		
		public function Index() {
			
			$this->Vista->GenerarVista('Requerimientos/Index', 'ESTRUCTURA');
		}
	}