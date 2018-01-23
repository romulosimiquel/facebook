<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Social Network</title>

  <link type="text/css" href="<?php echo BASE; ?>assets/css/home.css" rel="stylesheet">
  <link href="<?php echo BASE; ?>assets/css/materialize.min.css" rel="stylesheet">
  <link href="<?php echo BASE; ?>assets/css/template.css" rel="stylesheet">
  <link href="<?php echo BASE; ?>assets/css/style.css" rel="stylesheet" type="text/css"> 

  <!-- CSS -->
  <script type="text/javascript" src="<?php echo BASE; ?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo BASE; ?>assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="<?php echo BASE; ?>assets/js/script.js"></script>
  <script type="text/javascript" src="<?php echo BASE; ?>assets/js/jquery-3.2.1.min.js"></script>

  <!-- Icon -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body>

 <!-- Começo da barra superior -->	
 <div class="navbar-fixed">

  <!-- Aqui define os icones da barra superior -->

  <!-- Esse menininho aqui é o drop do botão de settings -->
  <ul id="dropdown69" class="dropdown-content  modal-trigger">
   <li><a class="modal-trigger" href="#modal1">Editar Conta</a></li>
   <li class="divider"></li>
   <li><a href="<?php echo BASE; ?>login/sair" class=" blue-text">Sair</a></li>
 </ul>

 <nav class="light-blue accent-4">
   <div class="nav-wrapper container">
     <a href="<?php echo BASE; ?>" class="brand-logo">Facebook</a>
     <ul class="right hide-on-med-and-down">
      <li><a href="<?php echo BASE; ?>perfil">Perfil</a></li>
      <li><a href="<?php echo BASE; ?>">Página Inícial</a></li>
      <li><a href="#"> <i class="material-icons new badge">face</i></a></li>

      <!-- Dropdown Trigger, ou seja, o que faz o dropdown aparecer -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons">settings
      </i></a><ul id="dropdown1" class="dropdown-content modal-trigger">
       <li><a class="modal-trigger" href="#modal1">Editar Conta</a></li>
       <li class="divider"></li>
       <li><a href="<?php echo BASE; ?>login/sair" class=" blue-text">Sair</a></li>
     </ul></li>
   </ul>
 </div>
</nav>
</div>

<!-- Modal Structure -->
    <form method="POST">
      <div id="modal1" class="modal">
        <div class="modal-content">
          <h4>Editar Conta</h4>
          <!-- <p>Edite sua conta aqui</p> -->

          <!-- Formulario Editar Perfil -->
            <div class="row">
              <form method="POST" action="" class="col s12 editarperfil">
                <div class="row">
                  <div class="input-field col s6">
                    <input id="nome" type="text" name="nome" value="<?php echo($viewData['info']['bio']); ?>" class="validate">
                    <label for="nome"></label>
                  </div>
                  
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="password" type="password" class="validate">
                      <label for="password">Senha</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email" type="email" class="validate">
                      <label for="email">E-Mail</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <textarea id="bio" name="bio" class="materialize-textarea"><?php echo($viewData['info']['bio']); ?></textarea>
                      <label for="bio">Bio</label>
                    </div>
                  </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button href="#!" class="modal-action modal-close waves-effect  btn-flat">Confirmar</button>
            <a href="<?php echo BASE; ?>perfil" class="modal-action modal-close waves-effect  btn-flat">Cancelar</a>
          </div>
        </div> 
    </form>

<div>
 <?php
  // print_r($viewData['info']);
  // echo "<hr>";
  // echo "<h1>".$viewData['info']['email']."</h1>";
 $this->loadViewInTemplate($viewName, $viewData);
 ?>
</div>

<!-- Inicialização Dropdown -->
<script>
 $('.dropdown-button').dropdown({
  inDuration: 300,
  outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
    );
  </script>

  <!-- Inicialização Modal -->
  <script>
   $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
</script>

<!-- Configuração Modal -->
<script>
  $('.modal').modal({
      dismissible: false, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        alert("Ready");
        console.log(modal, trigger);
      },
      complete: function() { alert('Closed'); } // Callback for Modal close
    }
    );
  </script>
</body>
</html>
