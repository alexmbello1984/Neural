<?php
	
	abstract class NeuralRutasApp {
		
		protected static $APLICACION = 'NF/';
		protected static $PUBLICO = 'Neural/';
		protected static $IMAGENES = 'images/';
		protected static $CSS = 'css/';
		protected static $JS = 'js/';
		
		public static function RutaURL($Ruta) {
			
			return NeuralRutasBase::RutaBase(self::$APLICACION.$Ruta);
		}
		
		public static function RutaPublico($Ruta) {
			
			return NeuralRutasBase::RutaBase('Public/'.self::$PUBLICO.$Ruta);
		}
		
		public static function RutaImagenes($Ruta) {
			
			return NeuralRutasBase::RutaBase('Public/'.self::$PUBLICO.self::$IMAGENES.$Ruta);
		}
		
		public static function RutaCss($Ruta) {
			
			return NeuralRutasBase::RutaBase('Public/'.self::$PUBLICO.self::$CSS.$Ruta);
		}
		
		public static function RutaJs($Ruta) {
			
			return NeuralRutasBase::RutaBase('Public/'.self::$PUBLICO.self::$JS.$Ruta);
		}
	}
