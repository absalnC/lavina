<!-- Parte superior de la declaracion de documento-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="author" content="absalnc">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $head;?></title>
	<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi|Oswald|Yanone+Kaffeesatz" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="
		<?php echo base_url("css/bootstrap.min.css"); ?>" />
		<link rel="stylesheet" href="
			<?php echo base_url("css/own.css")."?r=".rand(1,1000); ?>" />
				<link rel="stylesheet" href="
					<?php echo base_url("css/style.css")."?r=".rand(1,1000); ?>" />
					<script type="text/javascript" src="
					<?php echo base_url("js/modernizr.js")?>"defer></script>
			<script type="text/javascript" src="
				<?php echo base_url("js/jquery.js"); ?>" defer></script>
			<script type="text/javascript" src="
			<?php echo base_url("js/jquery.swatchbook.js")?>"defer></script>

</head>
<body>
<!-- Fin de parte superior de la declaracion de documento-->
<!-- Barra de navegacion-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle </span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url("/");
				?>">La Vina Zacatecas</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo site_url("/");
					?>">Inicio <span class="sr-only">(current)
          </span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
          aria-expanded="false">Nosotros <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url("Nosotros/valores");
              ?>">Valores</a></li>
            <li><a href="<?php echo site_url("Nosotros/historia");
              ?>">Historia</a></li>
            <li><a href="<?php echo site_url("Nosotros/equipo");
              ?>">Equipo  </a></li>
            <li class="divider"></li>
            <li><a href="<?php echo site_url("Nosotros/ubicacion");
              ?>">Ubicacion</a></li>
          </ul>
        </li>
        <!-- Fin de dropdown-->

				<li class="active"><a href="<?php
          echo site_url("ministerios");
          ?>">Ministerios <span class="sr-only">(current)
          </span></a></li>
        <li class="active"><a href="<?php
          echo site_url("eventos");
          ?>">Eventos <span class="sr-only">(current)
          </span></a></li>
					<!--Idea: Dropdown con recursos como links a blogs relacionados
						,otras vinas, podcast y transmision en vivo-->

    </ul>    <!-- Fin de lado izquierdo-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url("Contacto");
          ?>">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid" id="super">
