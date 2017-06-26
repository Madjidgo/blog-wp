<?php get_header(); ?>


        
        <!-- end header -->
        <!-- end header.php -->




      <!-- index.php -->

        <!-- start jumbotron -->
            <div class="container jumbotron">
                <div class="text-center">
                        <h2 >Nouvelles Technologies</h2>

                        <p><strong>A travers ce blog, nous souhaitons présenter une technologie
                          qui marie culture et digitale. Nous souhaitons analyser l’impact des nouvelles
                          technologies sur votre quotidien  et  vous faire découvirir la formation Simplon  .</strong></p>
                        <p>Horloge actualisée en direct ! Il est <span id='t'></span></p>
                        <button type="button" class="btn btn-secondary" onclick="this.textContent='Merci !';"><div id="chrono" > </div> click </button>
                </div>
            </div>

        <!-- end jumbotron -->




        <section class="container">
            <div class="row">

                <aside class="col-lg-4">
                <h3>Recherche:</h3>

                <nav class="navbar  navbar-light bg-faded">
                      <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-info my-2 my-sm-0" " type="submit" id="button1 onclick="myFunction()">Search</button>
                      </form>
                </nav>

                    <!-- start aside.php -->
                    <!-- start reseaux sociaux -->
                   <!-- <nav>

                            <h3 class="mt-3" onclick="alert('Fais toi plaisir !');">Suivez-nous sur :</h3>
                             <div class="list-group mt-1">
                                 <a class="list-group-item" href="#"><i class="fa fa-2x fa-facebook-official" aria-hidden="true"></i>
                                 </i>&nbsp; Facebook</a>
                                 <a class="list-group-item" href="#"><i class="fa fa-2x fa-twitter" aria-hidden="true"></i>
                                </i>&nbsp; Twitter</a>
                                 <a class="list-group-item" href="#"><i class="fa fa-2x fa-linkedin" aria-hidden="true"></i>
                                 </i>&nbsp; Linkedin</a>
                                <a class="list-group-item" href="#"><i class="fa fa-2x fa-google-plus-square" aria-hidden="true"></i>
                                    </i>&nbsp; Google+</a>
                            </div>
                     </nav>
                     <!-- end reseaux sociaux -->

                </aside>
                <!-- end aside.php -->


                    <!-- start Caroussel -->
                <article class="col-lg-8 mt-2">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner" role="listbox">


                        <div class="carousel-item active">
                         <!--  -->
                          <img src="<?php bloginfo('template_directory'); ?>/img/index111.jpeg" alt="hoverboard" />
                        </div>

                        <div class="carousel-item">
                          <img class="d-block img-fluid" src="img/index222.jpeg" alt="Second slide">
                        </div>

                        <div class="carousel-item">
                          <img class="d-block img-fluid" src="img/index333.jpeg" alt="Third slide">
                        </div>

                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </article>
                <!-- end caroussel -->
            </div>

        </section>
        <!-- end section1 -->


        <!-- start section2 -->
        <section class="container my-5">
            <article class="row">

            <div class="bd-example bd-example-tabs" role="tabpanel">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab"  role="tab" aria-controls="home" aria-expanded="true">Article1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-expanded="false">Article2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#dropdown1" role="tab" aria-controls="profile" aria-expanded="false">Article3</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent" >
    <div role="tabpanel" class="tab-pane fade active show" id="home" aria-labelledby="home-tab" aria-expanded="true">
      <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>

    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
      <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>

    </div>

    <div class="tab-pane fade" id="dropdown1" role="tabpanel" aria-labelledby="dropdown2-tab">
      <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>


    </div>
  </div>
</div>
            <!-- start art1 -->
            <div class="col-lg-8 my-3 hi" >
            <img class="d-block img-fluid"  src="<?php echo esc_url (get_template_directory_uri() );?>/img/index111.jpeg" alt="One img">
            <p id="text">
            </div>
            <div class="col-lg-4 my-3">
            <h2>Energy  5 –  cloud  data au bon rapport qualité/prix</h2>
                <div >
                    <span class="post-author"><i class="fa  fa-user" aria-hidden="true"></i><a href="mailto:adresse@serveur.com"> Madmax </a></span>
                    <span >le 16 juin 2017</span>
                    </div><br>
                    <p>
                        Bonjour à tous ! Je test pour vous aujourd'hui Energy 5 venues  de chez Energy Simplon Roubaix.
                    </p>

                    <button type="button" class="btn btn-primary btn-lg btn-block " onclick="this.textContent='Ne soit pas si pressé !';">Lire la suite>> </button>
                </div>


                <!-- end art1 -->


                <!-- start art2 -->
            <div class="col-lg-4 my-3">
            <h2>Energy  5 –  cloud  data au bon rapport qualité/prix</h2>
                <div >
                    <span class="post-author"><i class="fa  fa-user" aria-hidden="true"></i><a href="mailto:adresse@serveur.com"> Madmax </a></span>
                    <span >le 16 juin 2017</span>
                    </div><br>
                    <p>
                        Bonjour à tous ! Je test pour vous aujourd'hui Energy 5 venues  de chez Energy Simplon Roubaix.
                    </p>

                    <button type="button" class="btn btn-primary btn-lg btn-block" onclick="this.textContent='Laisse toi faire!';" >Lire la suite>> </button>
                </div>


             <div class="col-lg-8 my-3" >
            <img class="d-block img-fluid hi" src="img/index222.jpeg" alt="Second img" >
            <p id="text">
            </div>
            <!-- end art2 -->



                <!-- start art3 -->
             <div class="col-lg-8 my-3" >
            <img class="d-block img-fluid hi" src="img/index333.jpeg" alt=" three img">
            <p id="text">
            </div>
           <div class="col-lg-4 my-3">
            <h2>Energy  5 –  cloud  data au bon rapport qualité/prix</h2>
                <div >
                    <span class="post-author"><i class="fa  fa-user" aria-hidden="true"></i><a href="mailto:adresse@serveur.com"> Madmax </a></span>
                    <span >le 16 juin 2017</span>
                    </div><br>
                    <p>
                        Bonjour à tous ! Je test pour vous aujourd'hui Energy 5 venues  de chez Energy Simplon Roubaix.
                    </p>

                    <button type="button" class="btn btn-primary btn-lg btn-block" onclick="this.textContent='Tu te sent mieux !';">Lire la suite>> </button>
                </div>
                <!-- end art3 -->



            </div>
           </article>
        </section>

        <!-- start plagination -->
            <nav aria-label="Page navigation  ">
                  <ul class="pagination justify-content-center">
                    <li class="page-item ">
                      <a class="page-link" href="#" tabindex="-1">Previous</a>
                      <li class="page-item active">
                      <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
            </nav>

        <!-- end plagination -->
        <!-- end index.php -->

<?php get_footer(); ?>
