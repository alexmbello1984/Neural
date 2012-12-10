		</div>
    </div>

  </div>



    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <p class="pull-right"><a href="#">Arriba</a></p>
      </div>
    </footer>

    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="<?php echo NeuralRutasApp::RutaJs('jquery.js'); ?>"></script>
    <script src="<?php echo NeuralRutasApp::RutaJs('google-code-prettify/prettify.js'); ?>"></script>
    <script src="<?php echo NeuralRutasApp::RutaJs('bootstrap-transition.js'); ?>"></script>
    <script src="<?php echo NeuralRutasApp::RutaJs('bootstrap-alert.js'); ?>"></script>
    <script src="<?php echo NeuralRutasApp::RutaJs('bootstrap-modal.js'); ?>"></script>
    <script src="<?php echo NeuralRutasApp::RutaJs('bootstrap-dropdown.js'); ?>"></script>
    <script src="<?php echo NeuralRutasApp::RutaJs('bootstrap-scrollspy.js'); ?>"></script>
    <script src="<?php echo NeuralRutasApp::RutaJs('bootstrap-tab.js'); ?>"></script>
    <script src="<?php echo NeuralRutasApp::RutaJs('bootstrap-tooltip.js'); ?>"></script>
    <script src="<?php echo NeuralRutasApp::RutaJs('bootstrap-popover.js'); ?>"></script>
    <script src="<?php echo NeuralRutasApp::RutaJs('bootstrap-button.js'); ?>"></script>
    <script src="<?php echo NeuralRutasApp::RutaJs('bootstrap-collapse.js'); ?>"></script>
    <script src="<?php echo NeuralRutasApp::RutaJs('bootstrap-carousel.js'); ?>"></script>
    <script src="<?php echo NeuralRutasApp::RutaJs('bootstrap-typeahead.js'); ?>"></script>
    <script src="<?php echo NeuralRutasApp::RutaJs('bootstrap-affix.js'); ?>"></script>
    <script src="<?php echo NeuralRutasApp::RutaJs('application.js'); ?>"></script>
    
    <script>
		$(document).ready(function(){
			$("#validacion1").load('<?php echo NeuralRutasApp::RutaURL('JQuery/EjemplosValidacion/REQUERIDO'); ?>');
			$("#validacion2").load('<?php echo NeuralRutasApp::RutaURL('JQuery/EjemplosValidacion/RANGOLONGITUD'); ?>');
			$("#validacion3").load('<?php echo NeuralRutasApp::RutaURL('JQuery/EjemplosValidacion/RANGOVALOR'); ?>');
			$("#validacion4").load('<?php echo NeuralRutasApp::RutaURL('JQuery/EjemplosValidacion/REMOTE'); ?>');
			$("#validacion5").load('<?php echo NeuralRutasApp::RutaURL('JQuery/EjemplosValidacion/NUMERO'); ?>');
			$("#validacion6").load('<?php echo NeuralRutasApp::RutaURL('JQuery/EjemplosValidacion/MAIL'); ?>');
			$("#validacion7").load('<?php echo NeuralRutasApp::RutaURL('JQuery/EjemplosValidacion/CANTMINCARACT'); ?>');
			$("#validacion8").load('<?php echo NeuralRutasApp::RutaURL('JQuery/EjemplosValidacion/CANTMAXCARACT'); ?>');
			$("#validacion9").load('<?php echo NeuralRutasApp::RutaURL('JQuery/EjemplosValidacion/VALMIN'); ?>');
			$("#validacion10").load('<?php echo NeuralRutasApp::RutaURL('JQuery/EjemplosValidacion/VALMAX'); ?>');
			$("#validacion11").load('<?php echo NeuralRutasApp::RutaURL('JQuery/EjemplosValidacion/URL'); ?>');
			$("#validacion12").load('<?php echo NeuralRutasApp::RutaURL('JQuery/EjemplosValidacion/FECHA'); ?>');
			$("#validacion13").load('<?php echo NeuralRutasApp::RutaURL('JQuery/EjemplosValidacion/FECHAISO'); ?>');
			$("#validacion14").load('<?php echo NeuralRutasApp::RutaURL('JQuery/EjemplosValidacion/DIGITO'); ?>');
			$("#validacion15").load('<?php echo NeuralRutasApp::RutaURL('JQuery/EjemplosValidacion/IGUAL'); ?>');
		});
	</script>



  </body>
</html>