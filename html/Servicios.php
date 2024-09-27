
<!DOCTYPE html>
<html>
  <head>
    <title>Servicios - Monster Gym "The Muscle Factory"</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap"
      rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="../css/servicios.css">
    <link rel="stylesheet" href="../css/nav.css">
  </head>

  <body class="bg-custom">
  <header class="fonts">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
      <div>
        <a class="navbar-brand iconPage" href="#">
          <img src="../Imagenes/logo2.png" alt="logo empresa" width="190" class="rounded">
        </a>
      </div>
      <button class="navbar-toggler justify-content-end" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end m-2" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white p-3" href="main.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white p-3" href="Membresias.php">Membresias</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white p-3" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">Entrenamiento</a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item text-white p-3" href="EntrenamientoPersonal.php">Entrenamiento Personalizado</a>
              </li>
              <li>
                <a class="dropdown-item text-white p-3" href="CentroDeBienestar.php">Centro de Bienestar</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white p-3" href="Servicios.php">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white p-3" href="galeria.php">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white p-3" href="calculadorafit.php">CalculadoraFit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white p-3" href="Contacto.php">Contacto</a>
          </li>
          <?php
session_start();
if(isset($_SESSION['usuario'])) {
  echo '<li>
          <a href="../php/cerrar_sesion.php" >
            <button class="Btn" style="background-color: red;">
              <div class="sign">
                <svg viewBox="0 0 512 512">
                  <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                </svg>
              </div>
              <div class="text">Logout</div>
            </button>
          </a>
        </li>
        <li style="margin-left: 10px;">
  <a href="profile.php">
    <button class="Btn" style="background-color: green; padding: 10px 17px; font-size: 1.2em;">
      <div class="signn">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
        </svg>
      </div>
      <div class="text">Perfil</div>
    </button>
  </a>
</li>

';
} else {
  echo '<li class="nav-item">
          <a class="nav-link text-white p-3" href="../html/login.php" style="background-color: #1b1a55">
            <button class="Btn">
              <div class="sign">
                <svg viewBox="0 0 512 512">
                  <path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"></path>
                </svg>
              </div>
              <div class="text">Login</div>
            </button>
          </a>
        </li>';
}
?>
        </ul>
      </div>
    </div>
  </nav>
</header>
      <main>
        <div class="container">
          <h1 class="text-center mb-5 fontstwo text-light">Servicios</h1>
          <div class="row fontstwo">
            <div class="col-md-4">
              <div class="card h-100">
                <img src="../GaleriaGYM/Foto14.jpg" class="card-img-top"
                  alt="Imagen del gym 1" />
                <div class="card-body">
                  <h5 class="card-title text-center">Máquinas</h5>
                  <p class="card-text">
                    Nuestro gimnasio ofrece una amplia gama de máquinas para
                    entrenamiento de fuerza y ejercicios cardiovasculares.
                    Nuestras máquinas se mantienen y actualizan regularmente
                    para garantizar la mejor experiencia de entrenamiento
                    posible para nuestros miembros.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card h-100">
                <img src="../GaleriaGYM/Foto9.jpg" class="card-img-top"
                  alt="Imagen del gym 2" />
                <div class="card-body">
                  <h5 class="card-title text-center">Suplementos</h5>
                  <p class="card-text">
                    Ofrecemos una variedad de suplementos para ayudar a nuestros
                    miembros a alcanzar sus objetivos de fitness. Desde
                    proteínas de alta calidad hasta diversos tipos de
                    suplementos como pre-entreno y otras variedades, tenemos
                    todo lo que necesitas para alimentar tus entrenamientos y
                    recuperarte adecuadamente.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card h-100">
                <img src="../GaleriaGYM/Foto13.jpg" class="card-img-top"
                  alt="Imagen del gym 3" />
                <div class="card-body">
                  <h5 class="card-title text-center">Ropa y Accesorios</h5>
                  <p class="card-text">
                    Nuestro gimnasio también cuenta con una tienda de ropa donde
                    puedes encontrar las últimas prendas de fitness y entre
                    otros accesorios, que garantizan un entrenamiento eficaz y
                    necesitas para lucir, sentirte mejor mientras haces
                    ejercicio.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </main>
      <footer class="containerfoot">
        <div
          class="container mt-4 text-light d-flex flex-wrap justify-content-center align-items-start footerContainer fontstwo">
          <div class="p-3">
            <h3>Redes Sociales</h3>
            <div class="d-flex justify-content-center">
              <a
                target="_blank"
                href="https://www.facebook.com/Monstergym.themusclefactory"
                class="btn btn-primary me-3 d-flex flex-column align-items-center m-2"
                role="button"><svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="25"
                  height="25"
                  fill="currentColor"
                  class="bi bi-facebook"
                  viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                </svg>
                <span style="margin-top: 5px">Facebook</span></a>
              <a
                target="_blank"
                href="https://wa.me/+51983917650"
                class="btn btn-success me-3 d-flex flex-column align-items-center m-2"
                role="button"><svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="25"
                  height="25"
                  fill="currentColor"
                  class="bi bi-whatsapp"
                  viewBox="0 0 16 16">
                  <path
                    d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                </svg>
                <span style="margin-top: 5px">WhatsApp</span>
              </a>
              <a
                target="_blank"
                href="https://www.instagram.com/monster_themusclefactory/"
                class="btn btn-danger d-flex flex-column align-items-center m-2"
                role="button"><svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="25"
                  height="25"
                  fill="currentColor"
                  class="bi bi-instagram"
                  viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg>
                <span style="margin-top: 5px">Instagram</span>
              </a>
            </div>
          </div>
          <div class="p-3">
            <h4>Contacto</h4>
            <p>Ubicado en la ciudad del eterno calor</p>
            <p>Miraflores II Etapa Piura - Piura - Castilla.</p>
            <p>
              Av. Luis Montero Mz. L Lote. 1-2 Urb.
              <a
                href="mailto:info@montergym.com"
                target="_blank"
                rel="noopener noreferrer"
                class="text-light"><b>info@montergym.com</b></a>
            </p>
            <p>Telefono: 983 917 650</p>
          </div>
          <div class="p-3">
            <h3>Ubicación</h3>
            <div class="iframe-container ifrContainer">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.3429465506971!2d-80.61763133350648!3d-5.185827221941258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904a11dd1c503ff9%3A0x2ad862f2cec75881!2sMonsterGym%20%22The%20Muscle%20Factory%22!5e0!3m2!1ses-419!2spe!4v1714184992229!5m2!1ses-419!2spe"
                width="400"
                height="300"
                style="border: 0; border-radius: 15px"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12" style="text-align: center;">

              <img src="../Imagenes/logo.png" alt="El logo de Monster Gym"
                style="width: 15%" />
              <p class="copyright text-light">&copy Copyright Monster
                Gym "The Muscle Factory" - 2024</p>

            </div>
          </div>
        </div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
  </html>