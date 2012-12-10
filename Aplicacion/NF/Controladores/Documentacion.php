<?php

	class Documentacion extends Controlador {
		
		function __Construct() {
			parent::__Construct();
		}
		
		public function Index() {
			
			$this->Vista->GenerarVista('Documentacion/Index', 'DOCUMENTACION');
		}
		
		public function BasesDatos($Tipo = false) {
			
			if($Tipo=='CONEXION')
				$this->Vista->GenerarVista('Documentacion/BaseDatos/ConexionBD', 'DOCUMENTACION');
			elseif ($Tipo=='CONSULTAS')
				$this->Vista->GenerarVista('Documentacion/BaseDatos/ConsultasSQL', 'DOCUMENTACION');
			elseif ($Tipo=='GAB')
				$this->Vista->GenerarVista('Documentacion/BaseDatos/GAB', 'DOCUMENTACION');
			elseif ($Tipo=='GABARRAY')
				$this->Vista->GenerarVista('Documentacion/BaseDatos/GABArray', 'DOCUMENTACION');
			else
				$this->Vista->GenerarVista('Documentacion/BaseDatos/Index', 'DOCUMENTACION');
		}
		
		public function Formularios() {
			
			$this->Vista->GenerarVista('Documentacion/Formularios/Formulario', 'DOCUMENTACION');
		}
		
		public function Encriptacion() {
			
			$this->Vista->GenerarVista('Documentacion/Encriptacion/Encriptacion', 'DOCUMENTACION');
		}
		
		public function Correo() {
			
			$this->Vista->GenerarVista('Documentacion/Correo/Correo', 'DOCUMENTACION');
		}
		
		public function Exportar() {
			
			$this->Vista->GenerarVista('Documentacion/Exportar/Exportar', 'DOCUMENTACION');
		}
	}
