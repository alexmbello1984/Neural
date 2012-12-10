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
	
	class Bootstrap {
		
		//construimos el Nucleo base
		public function __Construct() {
			
			//Tomamos la variable del Mod_Rewrite y validamos el url para determinar el path correspondiente
			$Url = SysMisNeural::LeerURLModReWrite();
			
			//Leemos el archivo de configuracion de accesos y lo convertimos en un array
			$Array = SysMisNeural::CargarArchivoYAMLAplicacion('Configuracion/ConfiguracionAcceso.yaml');
			
			//generamos la validacion si se establecio una aplicacion en la URL
			if(!empty($Url[0]))
			{
				//Validamos si existe la aplicacion correspondiente
				if(array_key_exists(mb_strtoupper($Url[0]), $Array['APLICACIONES']))
				{
					//Generamos las rutas de accesos
					$Carpeta = $Array['APLICACIONES'][mb_strtoupper($Url[0])]['CARPETA'];
					$Configuraciones = $Array['APLICACIONES'][mb_strtoupper($Url[0])]['CONFIGURACION'];
					$Ayudas = $Array['APLICACIONES'][mb_strtoupper($Url[0])]['AYUDAS'];
					$Controladores = $Array['APLICACIONES'][mb_strtoupper($Url[0])]['CONTROLADORES'];
					
					//Cargamos las Configuraciones de las ayudas y configuraciones aplicacion
					SysMisNeural::IncluirAyudasConfiguracionesAplicacion($Carpeta, $Configuraciones, $Ayudas);
					
					//generamos la validacion si se establecio un Controlador en la URL
					if(!empty($Url[1]))
					{
						//Generamos la ruta del Controlador
						$Archivo = SysMisNeural::GenerarRutasArchivoAplicacion($Carpeta, $Controladores, $Url[1].'.php');
						
						//Validamos si el controlador existe
						if(file_exists($Archivo))
						{
							//Validamos si se establecio un controlador
							if(!empty($Url[2]))
							{
								//generamos el proceso de control para no ingresar metodos magicos y globales de construccion y destruccion
								if(mb_strtoupper($Url[2]) <> '__CONSTRUCT' AND mb_strtoupper($Url[2]) <> '__DESTRUCT')
								{
									//Generamos el require del controlador correspondiente
									require $Archivo;
									
									//Validamos si el metodo existe dentro de la clase del controlador
									if(method_exists($Url[1], $Url[2]))
									{
										//Validamos si se envian variables en el url
										if(!empty($Url[3]))
										{
											//Generamos la validacion de datos ingresados por URL datos hasta 6 Variables
											if(isset($Url[8]))
											{
												//Cargamos el Controlador correspondiente
												$Controlador = new $Url[1];
												$Controlador->CargarModelo($Url[1]);
												$Controlador->$Url[2]($Url[3], $Url[4], $Url[5], $Url[6], $Url[7], $Url[8]);
											}
											elseif(isset($Url[7]))
											{
												//Cargamos el Controlador correspondiente
												$Controlador = new $Url[1];
												$Controlador->CargarModelo($Url[1]);
												$Controlador->$Url[2]($Url[3], $Url[4], $Url[5], $Url[6], $Url[7]);
											}
											elseif(isset($Url[6]))
											{
												//Cargamos el Controlador correspondiente
												$Controlador = new $Url[1];
												$Controlador->CargarModelo($Url[1]);
												$Controlador->$Url[2]($Url[3], $Url[4], $Url[5], $Url[6]);
											}
											elseif(isset($Url[5]))
											{
												//Cargamos el Controlador correspondiente
												$Controlador = new $Url[1];
												$Controlador->CargarModelo($Url[1]);
												$Controlador->$Url[2]($Url[3], $Url[4], $Url[5]);
											}
											elseif(isset($Url[4]))
											{
												//Cargamos el Controlador correspondiente
												$Controlador = new $Url[1];
												$Controlador->CargarModelo($Url[1]);
												$Controlador->$Url[2]($Url[3], $Url[4]);
											}
											else
											{
												//Cargamos el Controlador correspondiente
												$Controlador = new $Url[1];
												$Controlador->CargarModelo($Url[1]);
												$Controlador->$Url[2]($Url[3]);
											}
										}
										else
										{
											//Cargamos el Controlador correspondiente
											$Controlador = new $Url[1];
											$Controlador->CargarModelo($Url[1]);
											$Controlador->$Url[2]();
										}
									}
									else
									{
										$this->ErrorAplicacion();
									}
								}
								else
								{
									$this->ErrorAplicacion();
								}
							}
							else
							{
								//Generamos el require del controlador correspondiente
								require $Archivo;
								
								//Cargamos el Controlador correspondiente
								$Controlador = new $Url[1];
								$Controlador->CargarModelo($Url[1]);
								$Controlador->Index();
							}
						}
						else
						{
							$this->ErrorAplicacion();
						}
					}
					else
					{
						//Generamos el require para incluir el controlador correspondiente
						require SysMisNeural::GenerarRutasArchivoAplicacion($Carpeta, $Controladores, 'Index.php');
						$Controlador = new Index;
						$Controlador->CargarModelo('Index');
						$Controlador->Index();
					}
				}
				else
				{
					$this->ErrorAplicacion();
				}
			}
			else
			{
				//Generamos las rutas de accesos
				$Carpeta = $Array['APLICACIONES']['DEFAULT']['CARPETA'];
				$Configuraciones = $Array['APLICACIONES']['DEFAULT']['CONFIGURACION'];
				$Ayudas = $Array['APLICACIONES']['DEFAULT']['AYUDAS'];
				$Controladores = $Array['APLICACIONES']['DEFAULT']['CONTROLADORES'];
				
				//Cargamos las Configuraciones de las ayudas y configuraciones aplicacion
				SysMisNeural::IncluirAyudasConfiguracionesAplicacion($Carpeta, $Configuraciones, $Ayudas);
				
				//Generamos el require para incluir el controlador correspondiente
				require SysMisNeural::GenerarRutasArchivoAplicacion($Carpeta, $Controladores, 'Index.php');
				$Controlador = new Index;
				$Controlador->CargarModelo('Index');
				$Controlador->Index();
			}
		}
		
		public function ErrorAplicacion() {
			
			//Tomamos la variable del Mod_Rewrite y validamos el url para determinar el path correspondiente
			$Url = SysMisNeural::LeerURLModReWrite();
			
			//Leemos el archivo de configuracion de accesos y lo convertimos en un array
			$Array = SysMisNeural::CargarArchivoYAMLAplicacion('Configuracion/ConfiguracionAcceso.yaml');
			
			if(!empty($Url[0]))
			{
				
				if(array_key_exists(mb_strtoupper($Url[0]), $Array['APLICACIONES']))
				{
					//Generamos las rutas de accesos
					$Carpeta = $Array['APLICACIONES'][mb_strtoupper($Url[0])]['CARPETA'];
					$Configuraciones = $Array['APLICACIONES'][mb_strtoupper($Url[0])]['CONFIGURACION'];
					$Ayudas = $Array['APLICACIONES'][mb_strtoupper($Url[0])]['AYUDAS'];
					$Controladores = $Array['APLICACIONES'][mb_strtoupper($Url[0])]['CONTROLADORES'];
					
					//Generamos el require para incluir el controlador correspondiente
					require SysMisNeural::GenerarRutasArchivoAplicacion($Carpeta, $Controladores, 'Error.php');
					$Controlador = new Error;
					$Controlador->CargarModelo('Error');
					$Controlador->Index();
				}
				else 
				{
					//Generamos las rutas de accesos
					$Carpeta = $Array['APLICACIONES']['DEFAULT']['CARPETA'];
					$Configuraciones = $Array['APLICACIONES']['DEFAULT']['CONFIGURACION'];
					$Ayudas = $Array['APLICACIONES']['DEFAULT']['AYUDAS'];
					$Controladores = $Array['APLICACIONES']['DEFAULT']['CONTROLADORES'];
					
					//Generamos el require para incluir el controlador correspondiente
					require SysMisNeural::GenerarRutasArchivoAplicacion($Carpeta, $Controladores, 'Error.php');
					$Controlador = new Error;
					$Controlador->CargarModelo('Error');
					$Controlador->Index();
				}
			}
			else
			{
				//Generamos las rutas de accesos
				$Carpeta = $Array['APLICACIONES']['DEFAULT']['CARPETA'];
				$Configuraciones = $Array['APLICACIONES']['DEFAULT']['CONFIGURACION'];
				$Ayudas = $Array['APLICACIONES']['DEFAULT']['AYUDAS'];
				$Controladores = $Array['APLICACIONES']['DEFAULT']['CONTROLADORES'];
				
				//Generamos el require para incluir el controlador correspondiente
				require SysMisNeural::GenerarRutasArchivoAplicacion($Carpeta, $Controladores, 'Error.php');
				$Controlador = new Error;
				$Controlador->CargarModelo('Error');
				$Controlador->Index();
			}
		}
	}