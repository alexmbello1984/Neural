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
	
	/**
	 * Ruta de Acceso a Carpeta Root
	 * 
	 * Se utiliza la opcion dirname(__DIR__) para tomar la ruta default de instalacion.
	 * Se puede reemplazar por la direccion fisica
	 *  
	 * @example Windows [C:\www\htdocs\]
	 * @example Linux [/opt/lampp/htdocs/]
	 * */
	define('__SysNeuralFileRoot__', dirname(__DIR__));
	
	/**
	 * Ruta de Acceso a Carpeta Root Aplicacion
	 * 
	 * Se utiliza la opcion dirname(__DIR__) para tomar la ruta default de instalacion.
	 * Se puede reemplazar por la direccion fisica
	 * 
	 * @example Windows [C:\www\htdocs\Aplicacion\]
	 * @example Linux [/opt/lampp/htdocs/Aplicacion/] 
	 * */
	define('__SysNeuralFileRootAplicacion__', dirname(__DIR__).'/Aplicacion/');
	
	/**
	 * Ruta de Acceso de Separador de Doctrine 2 DBAL
	 * 
	 * Necesario para generar el enrutamiento base de doctrine 2
	 * Se puede reemplazar por la direccion fisica
	 * 
	 * @example Windows [C:\www\htdocs\Vendors\]
	 * @example Linux [/opt/lampp/htdocs/Vendors/]
	 * */
	 define('__SysNeuralFileRootVendors__', dirname(__DIR__).'/Vendors/');
	 
	 /**
	  * Ruta de Acceso a las Librerias root del Framework
	  * Se puede reemplazar por la direccion fisica
	  * 
	  * @example Windows [C:\www\htdocs\Neural\Librerias\]
	  * @example Linux [/opt/lampp/htdocs/Neural/Librerias]
	  * 
	  * */
	  define('__SysNeuralFileRootNeuralLibrerias__', dirname(__DIR__).'/Neural/Librerias/');
	  
	  /**
	   * Configuración de la zona horaria del servidor
	   * Puede consultar listado de zonas soportadas por php
	   * http://www.php.net/manual/es/timezones.php
	   * 
	   */
	  date_default_timezone_set("America/Bogota");
	  
	  /**
	   * Configuracion del tiempo limite de ejecucion de un script
	   * Puede consultar informacion adicional 
	   * http://www.php.net/manual/es/function.set-time-limit.php
	   * El valor por omision es 30, pero si desea un tiempo infinito puede ingresar cero (0)
	   * 
	   */
	  set_time_limit (30);