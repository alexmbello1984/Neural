<?php
	class PrimerosPasos extends Controlador {
		
		function __Construct() {
			parent::__Construct();
		}
		
		public function Index() {
			
			$this->Vista->GenerarVista('PrimerosPasos/Index', 'PRIMEROS_PASOS');
		}
	}
