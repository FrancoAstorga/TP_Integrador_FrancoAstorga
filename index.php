<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Codo a Codo 4.0</title>
    <link rel="shortcut icon" href="img/codoacodo.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="activePage.js"></script><!--le indicas al navegador que no ejecute el script hasta que se haya cargado todo el contenido de la página.-->
</head>


<body>

    <?php include('header.html'); ?>

    <!--Imagen principal-->
    <div class="container-fluid p-0 ">
        <div class="row align-items-center justify-content-end">
            <!--overflow hidden oculta la parte que sobresale-->
            <div class="overflow-hidden d-flex justify-content-center">
                 <!--img-fluid se ajusta al div padre, alternativa a width 100vw-->
                <img src="img/ba1.jpg" class="img-fluid" alt="Descripción de la imagen" id="imagen_BsAs">
            </div>
      
            <div class="col-5 position-absolute text-white text-end text_image ps-3">
                <h1>Conf Bs As</h1>
                <p>
                    Bs As llega por primera vez a Argentina. Un evento para compartir con
                    nuestra comunidad el conocimiento y expereiencia de los expertos que
                    están creando el futuro de Internet. Ven a conocer a miembros del
                    evento, a otros estudiantes de Codo a Codo y los oradores de primer
                    nivel que tenemos para ti. Te esperamos!
                </p>
                
                <!--btn-light->borde blanco-->
                    <button type="button" class="btn btn-light btn-md bg-transparent text-white me-3">Quiero ser orador</button>
                    <button type="button" class="btn btn-success btn-md me-3">Comprar tickets</button><!--mx-margin-left-right-->
            </div>
          
        </div>
    </div>

    <main>

        <div class="container">
            <div class="row justify-content-center mt-3">
                <div class="col-4 text-center">
                    CONOCE A LOS
                    <h2>ORADORES</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="card border-0" style="width: 20rem;">
                    <img src="img/steve.jpg" class="card-img-top" alt="image_steve_jobs">
                    <div class="card-body ">
                        <span class="badge bg-warning text-dark">Javascript</span>
                        <span class="badge bg-info text-dark">React</span>
                        <h5>Steve Jobs</h5>
                        <p class="card-text ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt neque
                            omnis
                            cupiditate amet voluptas debitis sequi, necessitatibus quas, est harum quisquam odit quae
                            fugit
                            veniam ea quibusdam autem nihil? Iste.</p>
                    </div>
                </div>

                <div class="card border-0" style="width: 20rem;">
                    <img src="img/bill.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark">Javascript</span>
                        <span class="badge bg-info text-dark">React</span>
                        <h5>Bill Gates</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint, magnam
                            assumenda. Nobis esse provident, dignissimos, nemo quasi reiciendis alias tempore dolorum
                            perferendis corporis numquam dicta et est adipisci, a recusandae!</p>
                    </div>
                </div>

                <div class="card border-0" style="width: 20rem;">
                    <img src="img/ada.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <span class="badge bg-secondary">Negocios</span>
                        <span class="badge bg-danger">Startups</span>
                        <h5>Ada Lovelace</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet repellat
                            nobis
                            maiores quibusdam accusantium? Ipsa alias blanditiis et, mollitia nesciunt in reiciendis
                            corporis placeat eveniet! Quaerat quia iusto ut recusandae!</p>
                    </div>
                </div>
            </div>


        </div>


    </main>

     <!--container-fluid establece un alto de 500px, con img-fluid llena esa altura y todo el ancho
    si necesitaramos mas altura habria que usar css y poner a cada imagen height 100%-->
    <div class="container-fluid">
        <div class="row mt-4">
            <!--col-md-6 para pantallas mas chicas que se adapte bien, siempre ocupa 6 columnas-->
            <div class="col-md-6 p-0 col-sin-margen">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="3000">
                        <img src="img/honolulu .jpg" class="img-fluid" alt="fondo_bs_1">
                      </div>
                      <div class="carousel-item" data-bs-interval="3000">
                        <img src="img/hawaii2.jpg" class="img-fluid" alt="fondo_bs_2">
                      </div>
                      <div class="carousel-item" data-bs-interval="3000">
                        <img src="img/hawaii3.jpg" class="img-fluid" alt="fondo_bs_3">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 bg-dark text-white pt-3 BsAs_info" id="carousel_text">
                <h3>Bs As - Octubre</h3>
                <p>
                    Buenos Aires es la provincia y localidad mas grande del estado de Argentina, en los
                    Estados Unidos. Honolulu es la más sureña de entre las principales ciudades estadounidenses.
                    Aunque el nombre de Honolulu se refiere al área  urbana en la costa sureste de la isla de Oahu,
                    la ciudad y el condado de Honolulu han formado una ciudad-condado consolidada que cubre toda la
                    ciudad
                    (aproximadamente 600 km<sup>2</sup> de superficie).
                </p>
                <button type="button" class="btn btn-light bg-transparent  text-white">Conocé más</button>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-4 text-center">
                CONVIÉTE EN
                <h2>ORADOR</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8 text-center">
                <p>Anótate como orador para dar una <a href="#" style="text-decoration-style: dotted;">charla
                        ignite.</a> Cuéntanos de qué quieres hablar!</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <!--La clase "col-md-6" indica que la columna tendrá un ancho de 6 columnas en dispositivos de tamaño medio (md). Esto significa que la columna ocupará la mitad del ancho disponible en dispositivos de tamaño medio. Si la pantalla es más pequeña o más grande, la clase de columna correspondiente se utilizará para ajustar el tamaño de la columna en consecuencia.-->
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Apellido">
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <!--rows para especificar el número de filas de texto visible de una etiqueta textarea. -->
                <textarea class="form-control" rows="5" placeholder="Sobre qué quieres hablar? "></textarea>
                <p class="text-muted">Recuerda incluir un título para tu charla</p>
                <button type="button" class="btn btn-success w-100">Enviar</button><!--btn-block esta deprecado-->
            </div>
        </div>
    </div>


   
    <!--necesario para el carrousel-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>


<?php include 'footer.html';?>


</html>