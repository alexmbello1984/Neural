<?php
	
	# #####################################################################################
	#
	#	Neural Framework (Framework en PHP)
	#
	#	@author: 	Zyos Ilusionista <neural.framework@gmail.com> <Zyos_Ilusionista@hotmail.com>
	#	@license: 	Licencia GNU/GPL (http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt)
	#
	#	Edicion Beta de Lanzamiento de Neural Framework.
	#
	#	http://github.com/neuralframework/
	#
	# #####################################################################################
	
	class NeuralScriptAdministrador {
		
		/**
		 * NeuralScriptAdmin::OrganizarScript($Persistencia = false, $Script = false, $Aplicacion = 'DEFAULT')
		 * 
		 * Regla: Organiza e implementa los diferentes archivos publicos y organiza script js
		 * @param $Persistencia: array asociativo con los archivos que deben ser persistentes
		 * @example array('JS' => array('JQUERY', 'VALIDATE'))
		 * @param $Script: array asociativo creado por los diferentes constructores NeuralJQuery....
		 * @param $Aplicacion: Aplicacion configurada en Aplicacion/Configuracion/ConfiguracionScripts.yaml
		 * 
		 * */
		public static function OrganizarScript($Persistencia = false, $Script = false, $Aplicacion = 'DEFAULT') {
			
			$Librerias = SysMisNeural::CargarArchivoYAMLAplicacion('Configuracion/ConfiguracionScripts.yaml');
			
			if(is_array($Persistencia))
			{
				$Constructor[] = self::ConstructorPersistente($Persistencia, $Librerias[$Aplicacion]);
			}
						
			if(is_array($Script))
			{
				$Constructor[] = self::OrganizarArrayScript($Script, $Librerias[$Aplicacion], self::OrganizarArrayPersistencia($Persistencia));
			}
			
			unset($Persistencia, $Script);
			
			if(isset($Constructor))
			{
				return implode("\n", $Constructor);
			}
		}
		
		private function OrganizarArrayPersistencia($Array) {
			
			if(is_array($Array))
			{
				foreach ($Array AS $Llave => $Valor)
				{
					if($Llave == 'JS')
					{
						$Cantidad = count($Valor);
						for ($i=0; $i<$Cantidad; $i++)
						{
							$Datos['JS'][$Valor[$i]] = $Valor[$i];
						}
					}
					elseif($Llave == 'CSS')
					{
						$Cantidad = count($Valor);
						for ($i=0; $i<$Cantidad; $i++)
						{
							$Datos['CSS'][$Valor[$i]] = $Valor[$i];
						}
					}
				}
				
				unset($Array);
				
				return $Datos;
			}
			else
			{
				return array('JS' => array(), 'CSS' => array());
			}
		}
		
		private function OrganizarArrayScript($Array, $Librerias, $ArrayValidacion) {
			
			$Cantidad = count($Array);
			
			for ($i=0; $i<$Cantidad; $i++)
			{
				foreach ($Array[$i] AS $Llave => $Valor)
				{
					if($Llave=='JS')
					{
						foreach ($Valor AS $LlaveArray => $Valorarray)
						{
							if(!array_key_exists($Valorarray, $ArrayValidacion['JS']))
							{
								$Datos['JS'][$Valorarray] = $Valorarray;
							}
						}
					}
					elseif($Llave=='CSS')
					{
						foreach ($Valor AS $LlaveArray => $Valorarray)
						{
							if(!array_key_exists($Valorarray, $ArrayValidacion['CSS']))
							{
								$Datos['CSS'][$Valorarray] = $Valorarray;
							}
						}
					}
					elseif($Llave=='SCRIPT')
					{
						$Datos['SCRIPT'][] = $Valor;
					}
				}
			}
			
			unset($Array, $Cantidad, $ArrayValidacion);
			
			return self::ConstructorOrgScript($Datos, $Librerias);
		}
		
		private function ConstructorOrgScript($Array, $Librerias) {
			
			foreach ($Array AS $Llave => $Valor)
			{
				if($Llave == 'JS')
				{
					$Datos[] = self::ConstructorScriptJS($Valor, $Librerias);
				}
				elseif($Llave == 'CSS')
				{
					$Datos[] = self::ConstructorScriptCSS($Valor, $Librerias);
				}
				elseif($Llave == 'SCRIPT')
				{
					$Datos[] = self::ConstructorOrganizarScriptScript($Valor);
				}
			}
			
			unset($Array, $Librerias);
			
			return implode("\n", $Datos);
		}
		
		private function ConstructorOrganizarScriptScript($Array) {
			
			foreach ($Array AS $Llave => $Valor)
			{
				$Datos[] = $Valor;
			}
			
			unset($Array);
			
			return implode("\n", $Datos);
		}
		
		private function ConstructorScriptJS($Array, $Librerias) {
			
			foreach ($Array AS $Llave => $Valor)
			{
				$Datos[] = $Valor;
			}
			
			unset($Array);
			
			return self::ConstructorJS($Datos, $Librerias);
		}
		
		private function ConstructorScriptCSS($Array, $Librerias) {
			
			foreach ($Array AS $Llave => $Valor)
			{
				$Datos[] = $Valor;
			}
			
			unset($Array);
			
			return self::ConstructorCSS($Datos, $Librerias);
		}
		
		private function ConstructorPersistente($Array, $ArrayLibrerias) {
			
			foreach ($Array AS $Llave => $Valor)
			{
				if($Llave == 'JS')
					$Datos[] = self::ConstructorJS($Valor, $ArrayLibrerias);
				elseif($Llave == 'CSS')
					$Datos[] = self::ConstructorCSS($Valor, $ArrayLibrerias);
			}
			
			unset($Array, $ArrayLibrerias);
			
			return implode("\n", $Datos);
		}
		
		private function ConstructorJS($Array, $ArrayLibrerias) {
			
			$Cantidad = count($Array);
			
			for ($i=0; $i<$Cantidad; $i++)
			{
				$Libreria = $Array[$i];
				$Constructor[] = '<script type="text/javascript" src="'.NeuralRutasBase::RutaBase($ArrayLibrerias['JS'][$Libreria]).'"></script>';
			}
			
			unset($Cantidad, $Array, $ArrayLibrerias);
			
			return implode("\n", $Constructor);
		}
		
		private function ConstructorCSS($Array, $ArrayLibrerias) {
			
			$Cantidad = count($Array);
			
			for ($i=0; $i<$Cantidad; $i++)
			{
				$Libreria = $Array[$i];
				$Constructor[] = '<link href="'.NeuralRutasBase::RutaBase($ArrayLibrerias['CSS'][$Libreria]).'" rel="stylesheet">';
			}
			
			unset($Cantidad, $Array, $ArrayLibrerias);
			
			return implode("\n", $Constructor);
		}
	}