<!-- Parte superior de la declaracion de documento-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $head;?></title>
	<link rel="stylesheet" href="
		<?php echo base_url("css/bootstrap.min.css"); ?>" />
		<link rel="stylesheet" href="
			<?php echo base_url("css/own.css"); ?>" />
</head>
<body>
<!-- Fin de parte superior de la declaracion de documento-->

<!-- Barra de navegacion-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">La Vina Zacatecas</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio <span class="sr-only">(current)
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

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
          aria-expanded="false">Ministerios <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url("Ministerios/centro");
            ?>">Centro</a></li>
            <li><a href="<?php echo site_url("Ministerios/ctm");?>">
              CTM</a></li>
            <li><a href="<?php echo site_url("Ministerios/estudiantes");
              ?>">Estudiantes</a></li>
            <li><a href="<?php echo site_url("Ministerios/comedores");?>"
              >Comedores</a></li>
            <li><a href="<?php echo site_url("Ministerios/comunidades");?>"
              >Comunidades</a></li>
          </ul>
        </li>
        <!-- Fin de dropdown-->
        <li class="active"><a href="<?php
          echo site_url("eventos");
          ?>">Eventos <span class="sr-only">(current)
          </span></a></lieueu>
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

<div class="container-fluid">
