<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ArxaTEC</title>
  <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/svg+xml">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body>

  <header class="header" data-header>

    <?php
    include 'encabezado.php';
    ?>

    <?php
    include 'navbar.php';
    ?>

  </header>

    <?php
    include 'cabeza.php';
    ?>

    <?php
    include 'about.php';
    ?>

    <?php
    include 'threeicons.php';
    ?>


    <!-- include 'cards.php'; -->
     
    <?php
    include 'webinars.php';
    ?>

    <?php
    include 'iconos.php';
    ?>

    <!-- include 'webinars.php'; -->
     
      <section class="cta">
        <div class="container">

          <div class="cta-card">
            <div class="card-content">
              <h2 class="h2 card-title">¿Buscas asesoría legal personalizada?</h2>

              <p class="card-text">Podemos ayudarte a hacer realidad tu sueño de obtener asesoría legal en línea.</p>
            </div>

            <button class="btn cta-btn">
              <span>Saber mas</span>

              <ion-icon name="arrow-forward-outline"></ion-icon>
            </button>
          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo-light.png" alt="Homeverse logo">
          </a>

          <p class="section-text">
            Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is dummy text of the printing.
          </p>

          <ul class="contact-list">

            <li>
              <a href="#" class="contact-link">
                <ion-icon name="location-outline"></ion-icon>

                <address>Brooklyn, New York, United States</address>
              </a>
            </li>

            <li>
              <a href="tel:+0123456789" class="contact-link">
                <ion-icon name="call-outline"></ion-icon>

                <span>+0123-456789</span>
              </a>
            </li>

            <li>
              <a href="mailto:contact@homeverse.com" class="contact-link">
                <ion-icon name="mail-outline"></ion-icon>

                <span>contact@homeverse.com</span>
              </a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Empresa</p>
            </li>

            <li>
              <a href="#" class="footer-link">Acerca de</a>
            </li>

            <li>
              <a href="#" class="footer-link">Blog</a>
            </li>

            <li>
              <a href="#" class="footer-link">Todos los Servicios</a>
            </li>

            <li>
              <a href="#" class="footer-link">Mapa de Ubicaciones</a>
            </li>

            <li>
              <a href="#" class="footer-link">Preguntas Frecuentes</a>
            </li>

            <li>
              <a href="#" class="footer-link">Contáctanos</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Servicios</p>
            </li>

            <li>
              <a href="#" class="footer-link">Seguimiento de Pedidos</a>
            </li>

            <li>
              <a href="#" class="footer-link">Lista de Deseos</a>
            </li>

            <li>
              <a href="#" class="footer-link">Iniciar Sesión</a>
            </li>

            <li>
              <a href="#" class="footer-link">Mi Cuenta</a>
            </li>

            <li>
              <a href="#" class="footer-link">Términos y Condiciones
</a>
            </li>

            <li>
              <a href="#" class="footer-link">Ofertas Promocionales</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Atención al Cliente</p>
            </li>

            <li>
              <a href="#" class="footer-link">Iniciar Sesión</a>
            </li>

            <li>
              <a href="#" class="footer-link">Mi Cuenta</a>
            </li>

            <li>
              <a href="#" class="footer-link">Lista de Deseos</a>
            </li>

            <li>
              <a href="#" class="footer-link">Seguimiento de Pedidos</a>
            </li>

            <li>
              <a href="#" class="footer-link">Preguntas Frecuentes</a>
            </li>

            <li>
              <a href="#" class="footer-link">Contáctanos</a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 <a href="#">codewithsadee</a>. All Rights Reserved
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>