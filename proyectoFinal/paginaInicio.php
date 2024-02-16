<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--AJAX + jQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <title>Inicio</title>
  <!--Estilos de la página-->
  <link rel="stylesheet" href="Pinicio.css" />
</head>

<body class="nav-open">
  <header>
    <nav class="nav">
      <!--Barra de navegación lateral-->
      <div class="nav-links-container">
        <a href="#" class="nav__link" onclick="toggleNav()">
          <span class="nav__text">Cerrar</span>
          <ion-icon name="close-outline" size="large"></ion-icon>
        </a>
        <a href="AboutUs.php" class="nav__link">
          <span class="nav__text">Sobre Nosotros</span>
          <ion-icon name="paper-plane-outline" size="large"></ion-icon>
        </a>
        <a href="http://localhost/Github/FinalProject/proyectoFinal/index.php" class="nav__link">
          <span class="nav__text">Soporte</span>
          <ion-icon name="information-circle-outline" size="large"></ion-icon>
        </a>
        <a href="index.html" class="nav__link">
          <span class="nav__text">TypeScript</span>
          <ion-icon name="git-compare-outline" size="large"></ion-icon>
        </a>
        <a href="transactionSQL.php" class="nav__link">
          <span class="nav__text">Transacciones SQL</span>
          <ion-icon name="analytics-outline" size="large"></ion-icon>
        </a>
        <a href="salir.php" class="nav__link">
          <span class=" nav__text">Salir</span>
          <ion-icon name="exit-outline" size="large"></ion-icon>
        </a>
      </div>
    </nav>
    <main class="main">
      <img src="fotoPerfil.png" alt="fotoPerfil" class="fotoPerfil" onclick="toggleNav()" />
      <!--Enlace con la función para abrir y cerrar la navegación-->
      <a href="paginaInicio.php" class="inicio">Inicio</a>
      <!--Enlace con inicio-->
  </header>
  <hr />
  <div align="center" class="planes-a">
    <div class="plan-container">
      <div class="standart">
        <h2 align="center">Standart</h2>
        <p align="center">
          Plan estándar en el que el usuario podrá tener las siguientes
          ventajas:
        </p>
        <p align="center">Se incluyen, gestión de páginas web, CVs, CMs para Social Media del cliente, enlaces de interés como repositorios GitHub, etc.</p>
        <p align="center">458,33€/mes</p>
      </div>
      <!--API para pasarela de pago con buy.stripe-->
      <button class="elegir-button" title="Choose standard plan" onclick="location.href='https://buy.stripe.com/test_cN29Cpd32g6J8ykdQQ'">Elegir</button>
    </div>

    <div class="line"></div>

    <div class="plan-container">
      <div class="premium">
        <h2 align="center">Premium</h2>
        <p align="center">
          Plan premium en el que el usuario podrá tener las siguientes
          ventajas:
        </p>
        <p align="center">Incluye plan Standart, contacto con empresas del sector, desarrolladores y asesores personales. Este plan está dirigido para aquellos que busquen la excelencia y cuiden su imagen y presencia de cara a otras empresas y redes. *Pago único (Vitalicio)*</p>
        <p align="center">5.500,00€</p>
      </div>
      <!--API para pasarela de pago con buy.stripe-->
      <button class="elegir-button" title="Choose premium plan" onclick="location.href='https://buy.stripe.com/test_6oE8yl5AAaMp3e0289'">Elegir</button>
    </div>
  </div>
  </main>
  <!--scripts de JavaScript-->
  <script>
    function toggleNav() {
      document.body.classList.toggle("nav-open"); //función para abrir y cerrar el menu
    }

    document.querySelector(".nav-close").addEventListener("click", () => {
      toggleNav();
    });
  </script>
  <!--Implementación de API's para Iconos-->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!--Implementación de jQuery a través de AJAX-->
  <script>
    $(document).ready(function() { //jQuery a través de AJAX

      // Pasa de estar 'escondido' a hacer una 'aparición' a 0.450ms
      $('.main').hide().fadeIn(450); // 1000ms = 1 segundo

      // Anima el scroll de la página
      $('a[href^="#"]').click(function(e) { //al hacer click
        e.preventDefault();
        $('html, body').animate({ //animar el html y el body
          scrollTop: $($(this).attr('href')).offset().top
          //el scroll que se hace desde el Top de la página, atributo href y el offset.
        }, 450); // 1000ms = 1 segundo
      });

    });
  </script>
</body>

</html>