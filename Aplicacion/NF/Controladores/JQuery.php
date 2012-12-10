<?php
	
	class JQuery extends Controlador {
		
		function __Construct() {
			parent::__Construct();
		}
		
		public function Index() {
			
			$this->Vista->GenerarVista('JQuery/Index', 'JQUERY');
		}
		
		public function ValidacionFormularios() {
			
			$this->Vista->GenerarVista('JQuery/ValidacionFormularios/Validacion', 'JQUERY');
		}
		
		public function EjemplosValidacion($Ejemplo = false) {
			
			if($Ejemplo=='REQUERIDO')
			{
				$Validar = new NeuralJQueryValidacionFormulario;
				$Validar->Requerido('requerido', 'Este Campo es Requerido');
				$this->Vista->Script[] = $Validar->MostrarValidacion('form1');
				$this->Vista->GenerarVista('JQuery/ValidacionFormularios/Ejemplos/requerido');
			}
			elseif($Ejemplo=='RANGOLONGITUD')
			{
				$Validar = new NeuralJQueryValidacionFormulario;
				$Validar->RangoLongitud('requerido', 4, 6, 'Los Datos deben ser entre 4 y 6 Caracteres');
				$this->Vista->Script[] = $Validar->MostrarValidacion('form2');
				$this->Vista->GenerarVista('JQuery/ValidacionFormularios/Ejemplos/rango_longitud');
			}
			elseif($Ejemplo=='RANGOVALOR')
			{
				$Validar = new NeuralJQueryValidacionFormulario;
				$Validar->RangoValor('requerido', 4, 6, 'Debe Ingresar Numeros entre 4 y 6');
				$this->Vista->Script[] = $Validar->MostrarValidacion('form3');
				$this->Vista->GenerarVista('JQuery/ValidacionFormularios/Ejemplos/rango_valor');
			}
			elseif($Ejemplo=='REMOTE')
			{
				$Validar = new NeuralJQueryValidacionFormulario;
				$Validar->Remote('requerido', NeuralRutasApp::RutaURL('JQuery/EjemplosValidacion/EJEMPLOREMOTE'), "POST", 'El Dato se Encuentra en la Base de Datos, Seleccione Otro');
				$this->Vista->Script[] = $Validar->MostrarValidacion('form4');
				$this->Vista->GenerarVista('JQuery/ValidacionFormularios/Ejemplos/remote');
			}
			elseif($Ejemplo=='EJEMPLOREMOTE')
			{
				$Dato = trim(mb_strtoupper($_POST['requerido']));
				
				if($Dato == 'NEURAL')
				{ echo 'false'; }
				else { echo 'true'; }
			}
			elseif($Ejemplo=='NUMERO')
			{
				$Validar = new NeuralJQueryValidacionFormulario;
				$Validar->Numero('requerido', 'Solo Se aceptan datos Numericos');
				$this->Vista->Script[] = $Validar->MostrarValidacion('form5');
				$this->Vista->GenerarVista('JQuery/ValidacionFormularios/Ejemplos/numero');
			}
			elseif($Ejemplo=='MAIL')
			{
				$Validar = new NeuralJQueryValidacionFormulario;
				$Validar->EMail('requerido', 'No es Un Formato de Correo valido');
				$this->Vista->Script[] = $Validar->MostrarValidacion('form6');
				$this->Vista->GenerarVista('JQuery/ValidacionFormularios/Ejemplos/mail');
			}
			elseif($Ejemplo=='CANTMINCARACT')
			{
				$Validar = new NeuralJQueryValidacionFormulario;
				$Validar->CantMinCaracteres('requerido', 5, 'La Cantidad Minima de Caracteres es 5');
				$this->Vista->Script[] = $Validar->MostrarValidacion('form7');
				$this->Vista->GenerarVista('JQuery/ValidacionFormularios/Ejemplos/cantidadmincaracteres');
			}
			elseif($Ejemplo=='CANTMAXCARACT')
			{
				$Validar = new NeuralJQueryValidacionFormulario;
				$Validar->CantMaxCaracteres('requerido', 5, 'La Cantidad Maxima de Caracteres es 5');
				$this->Vista->Script[] = $Validar->MostrarValidacion('form8');
				$this->Vista->GenerarVista('JQuery/ValidacionFormularios/Ejemplos/cantidadmaxcaracteres');
			}
			elseif($Ejemplo=='VALMIN')
			{
				$Validar = new NeuralJQueryValidacionFormulario;
				$Validar->ValorMinimo('requerido', 5, 'El Valor Minimo es 5');
				$this->Vista->Script[] = $Validar->MostrarValidacion('form9');
				$this->Vista->GenerarVista('JQuery/ValidacionFormularios/Ejemplos/valmin');
			}
			elseif($Ejemplo=='VALMAX')
			{
				$Validar = new NeuralJQueryValidacionFormulario;
				$Validar->ValorMaximo('requerido', 5, 'El Valor Maximo es 5');
				$this->Vista->Script[] = $Validar->MostrarValidacion('form10');
				$this->Vista->GenerarVista('JQuery/ValidacionFormularios/Ejemplos/valmax');
			}
			elseif($Ejemplo=='URL')
			{
				$Validar = new NeuralJQueryValidacionFormulario;
				$Validar->URL('requerido', 'Direccion Web no Valida');
				$this->Vista->Script[] = $Validar->MostrarValidacion('form11');
				$this->Vista->GenerarVista('JQuery/ValidacionFormularios/Ejemplos/URL');
			}
			elseif($Ejemplo=='FECHA')
			{
				$Validar = new NeuralJQueryValidacionFormulario;
				$Validar->Fecha('requerido', 'Fecha No Valida');
				$this->Vista->Script[] = $Validar->MostrarValidacion('form12');
				$this->Vista->GenerarVista('JQuery/ValidacionFormularios/Ejemplos/fecha');
			}
			elseif($Ejemplo=='FECHAISO')
			{
				$Validar = new NeuralJQueryValidacionFormulario;
				$Validar->FechaISO('requerido', 'Fecha No Valida');
				$this->Vista->Script[] = $Validar->MostrarValidacion('form13');
				$this->Vista->GenerarVista('JQuery/ValidacionFormularios/Ejemplos/fechaiso');
			}
			elseif($Ejemplo=='DIGITO')
			{
				$Validar = new NeuralJQueryValidacionFormulario;
				$Validar->Digitos('requerido', 'Numero No Valido');
				$this->Vista->Script[] = $Validar->MostrarValidacion('form14');
				$this->Vista->GenerarVista('JQuery/ValidacionFormularios/Ejemplos/digito');
			}
			elseif($Ejemplo=='IGUAL')
			{
				$Validar = new NeuralJQueryValidacionFormulario;
				$Validar->IgualACampo('requerido', 'base', 'Los Campos No Son Iguales');
				$this->Vista->Script[] = $Validar->MostrarValidacion('form15');
				$this->Vista->GenerarVista('JQuery/ValidacionFormularios/Ejemplos/igual');
			}
			else
			{
				$this->Vista->GenerarVista('Error/404');
			}
		}
		
		public function Ajax() {
		
			$this->Vista->GenerarVista('JQuery/Ajax/index', 'JQUERY');
		}
		
		public function AdminScript() {
			
			$this->Vista->GenerarVista('JQuery/AdminScript/AdminScript', 'JQUERY');
		}
	}