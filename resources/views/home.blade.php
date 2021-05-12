@extends('app')

@section('content')

<!-- MAIN -->
<main id="main">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/img3.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="overlay">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 offset-md-6 text-md-right text-center">
                                <h1>TecnoEduca</h1>
                                <p class="d-none d-md-block">Por fin disponible en linea, un evento que vale la pena compartir.
                                    la primera experiencia online con profesionales que llevan aprendizaje a otro nivel.
                                </p>
                                <a href="{{route('registro')}}" class="btn btn-outline-light">Quiero ser alumno</a>
                                <button class="btn btn-tecnoeduca">Mas información</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
                <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> -->
        </div>
    </main>
    <!-- END MAIN -->

    <!-- CURSOS -->
    <section id="cursos" class="mb-4">
        <div class="container">
            <div class="row">
                <div class="col text-center text-uppercase">
                    <small>Conoce nuestros cursos</small><h2>Cursos</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="images/html.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">HTML</h5>
                          <p class="card-text">
                              HTML es un lenguaje de marcado que se utiliza para el desarrollo de paginas de internet.
                          </p>
                          <a href="#" class="btn btn-tecnoeduca" data-toggle="modal" data-target="#HTMLModal">Ver curso</a>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="images/css.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">CSS</h5>
                          <p class="card-text">
                              Hojas de estilo en cascada, es el lenguaje de estilos utilizado para describir la presentación de documentos HTML.
                          </p>
                          <a href="#" class="btn btn-tecnoeduca">Ver curso</a>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="images/javascript.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">JavaScript</h5>
                          <p class="card-text">
                              Es un lenguaje de programación ligero, interpretado, o compilado con funciones de primera clase.
                          </p>
                          <a href="#" class="btn btn-tecnoeduca">Ver curso</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CURSOS -->

    <!-- clase online -->
    <section id="clase-online">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 pl=0 pr=0">
                    <img src="images/img2.jpg" alt="">

                </div>
                <div class="col-lg-6 col-12 pb-4">
                    <h2>Clase de prueba online Agosto 2021</h2>
                    <p>
                        Registrate a la clase de prueba online, rellena el formulario de contacto para que podamos tener
                        mas informacion sobre las necesidades especificas y puedas concretar una clase gratuita de 30 minutos
                        con el profesor que mejor se adapte a tus necesidades academicas.
                    </p>
                    <a href="" class="btn btn-outline-light"> Registrarme</a>

                </div>

            </div>

        </div>
    </section>
    <!-- fin clase online -->

    <!-- se maestro -->
    <section id="semaestro" class="pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <small class="text-uppercase"> Conviertete en un</small>
                    <h2>Maestro</h2>

                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    Participa en el proceso de seleccion y forma parte del equipo<abbr data-toggle="tooltip" title="Es nombre de tu nueva familia"> TecnoEduca
                </div>

            </div>

            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 pt-2">
                    <form>
                        <div class="form-row">
                          <div class="col-12 col-md-6 form-group">
                            <input type="text" class="form-control" placeholder="Nombre">
                          </div>
                          <div class="col-12 col-md-6 form-group">
                            <input type="text" class="form-control" placeholder="Apellidos">
                          </div>
                        </div>

                        <div class="form-row">
                            <div class="col form-group">
                                <textarea name="Descripcion" class="form-control" ></textarea>
                                <small>Incluye un titulo en tu descripcion</small>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="col form-group">
                                <button type="button" class="btn btn-tecnoeduca btn-block">Enviar</button>
                                <!-- <small>Incluye un titulo en tu descripcion</small> -->
                            </div>
                      </form>

                </div>

            </div>

        </div>
    </section>
    <!-- fin se maestro -->
@endsection
