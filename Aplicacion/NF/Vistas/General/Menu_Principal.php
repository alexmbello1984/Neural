

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="https://github.com/NeuralFramework" target="_blank">Neural Framework</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="<?php echo AyudasMPActive::Active('Index'); ?>">
                <a href="<?php echo NeuralRutasApp::RutaURL('Index'); ?>">Inicio</a>
              </li>
              <li class="<?php echo AyudasMPActive::Active('Configuracion'); ?>">
                <a href="<?php echo NeuralRutasApp::RutaURL('Configuracion'); ?>">Configuracion</a>
              </li>
              <li class="<?php echo AyudasMPActive::Active('PrimerosPasos'); ?>">
                <a href="<?php echo NeuralRutasApp::RutaURL('PrimerosPasos'); ?>">Primeros Pasos</a>
              </li>
              <li class="<?php echo AyudasMPActive::Active('Documentacion'); ?>">
                <a href="<?php echo NeuralRutasApp::RutaURL('Documentacion'); ?>">Documentacion</a>
              </li>
              <li class="<?php echo AyudasMPActive::Active('JQuery'); ?>">
                <a href="<?php echo NeuralRutasApp::RutaURL('JQuery'); ?>">JQuery, Validacion, Ajax</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>