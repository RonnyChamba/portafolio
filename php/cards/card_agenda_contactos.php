<div class="col-md-4">
      <div class="card mb-3 me-sm-3">

        <div class="content-card-img">
          <img src="assets/img/contacto/contacto_0.png" class="card__img" alt="...">
        </div>
        <div class="card-body">
          <h5 class="card-title">Agenda Contactos</h5>
          <p class="card-text">Desarrollo de una aplicación con SpringBoo que permite administrar una agenda de contactos.
            </p>

          <div class="tecnologias">
            <h6 class="tecnologias__title">Lenguajes</h6>

            <!-- <span class="lenguaje lenguaje--java"><i class="fa-brands fa-java"></i> Java</span> -->
            <span class="lenguaje lenguaje--spring"><i class="fa-solid fa-leaf"></i> SpringBoot</span>
            <span class="lenguaje lenguaje--mysql"><i class="fa-solid fa-database"></i> MySQL</span>
            <span class="lenguaje lenguaje--spring"><i class="fa-solid fa-leaf"></i> Thymeleaf</span>
          </div>
          <div class="d-flex justify-content-between mt-3 align-items-end">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropContacto">Detalles</button>
            <p class="fecha"><span class="icon-calendar"></span> 2022</p>
          </div>
        </div>
      </div>

      <div class="modal fade" id="staticBackdropContacto" tabindex="-1" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <div class="modal-dialog" style="max-width: 800px !important;">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Agenda Contactos</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div id="carouselExampleControlsContacto" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/contacto/contacto_0.png" class="d-block w-100 modal__img" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/contacto/contacto_1.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/contacto/contacto_2.png" class="d-block w-100" alt="...">
                  </div>
                
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsContacto"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsContacto"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

              <div>

                <h5 class="mt-3">Detalles</h5>

                <p>Aplicación Desarrollada con SpringBoot y Thymeleaf, permite crear un CRUD para una agenda de contactos.
                
                </p>

                <div>
                  <h6>Repositorios</h6>


                  <a href="https://github.com/RonnyChamba/agenda-contactos" target="_blank" style="color: green;">
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