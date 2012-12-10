<?php
	
	class Index extends Controlador {
		
		function __Construct() {
			parent::__Construct();
		}
		
		public function Index() {
			
			$this->Vista->GenerarVista('Index', 'ESTRUCTURA');
		}
	}