<div class="col-md-4">
      <div class="card mb-3">

        <div class="content-card-img">
          <img src="assets/img/biblioteca/biblioteca_1.png" class="card__img" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Biblioteca</h5>
          <p class="card-text">Desarrollo de una aplicación FullStack con SpringBoot, Angular, Jwt, Hibernate, JPA,
            Maven </p>

          <div class="tecnologias">
            <h6 class="tecnologias__title">Lenguajes</h6>

            <span class="lenguaje lenguaje--java"><i class="fa-brands fa-java"></i> Java</span>
            <span class="lenguaje lenguaje--spring"><i class="fa-solid fa-leaf"></i> SpringBoot</span>
            <span class="lenguaje lenguaje--angular"><i class="fa-brands fa-angular"></i> Angular</span>
            <span class="lenguaje lenguaje--mysql"><i class="fa-solid fa-database"></i> MySQL</span>
          </div>
          <div class="d-flex justify-content-between mt-3 align-items-end">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Detalles</button>
            <p class="fecha"><span class="icon-calendar"></span> 2022</p>
          </div>
        </div>
      </div>

      <!-- MODAL BIBLIOTECA -->

      <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <div class="modal-dialog" style="max-width: 800px !important;">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Biblioteca</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div id="carouselExampleControlsBiblioteca" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/biblioteca/biblioteca_0.png" class="d-block w-100 modal__img" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/biblioteca/biblioteca_1.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/biblioteca/biblioteca_3.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/biblioteca/biblioteca_4.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsBiblioteca"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsBiblioteca"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

              <div>

                <h5 class="mt-3">Detalles</h5>

                <p>Aplicación Desarrollada con SpringBoot y Angular, permite manejar usuarios y roles (ROLE_ADMIN Y
                  ROLE_USER), la autenticaci&oacute;n de usuarios y autorizacion para el acceso a recursos se maneja
                  con
                  <span>JWT</span>.
                  Los usuarios con ROLE_ADMIN podr&aacute;n
                  realizar todas las operaciones, incluido la eliminaci&oacute;n de registros.
                </p>

                <div>
                  <h6>Repositorios</h6>

                  <a href="https://github.com/RonnyChamba/crud-api-frontend" target="_blank" style="color: red;">

                    <span class="lenguaje lenguaje--angular"><i class="fa-brands fa-angular"></i> Angular</span>
                  </a>

                  <a href="https://github.com/RonnyChamba/crud-api-biblioteca" target="_blank" style="color: green;">
                    <span class="lenguaje lenguaje--spring"><i class="fa-solid fa-leaf"></i> SpringBoot</span>
                  </a>

                </div>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <!-- <button type="button" class="btn btn-primary"></button> -->
            </div>
          </div>
        </div>
      </div>

    </div>