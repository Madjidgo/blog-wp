<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head profile="http://gmpg.org/xfn/11">   <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>   <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats --> <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" /> <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" /> <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" /> <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>   <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>   </head> <body>

  <!-- start /header -->
<header  class="container">
 <nav class="navbar navbar-toggleable-md navbar-light bg-faded ">

<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-brand" href="#">BlogTech</a>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="navbar-nav">
<a class="nav-item nav-link active" href="#">Blog<span class="sr-only">(current)</span></a>
<a class="nav-item nav-link" href="#">Article1</a>
<a class="nav-item nav-link" href="#">Article2</a>
<a class="nav-item nav-link " href="#">Article3</a>
</div>

</div>
</nav>

</header>
<!-- end header -->
<!-- end header.php -->




<!-- index.php -->

<!-- start jumbotron -->
  <div class="container jumbotron">
      <div class="text-center">
              <h2 >Nouvelles Technologies</h2>

              <p><strong>A travers ce blog, nous souhaitons présenter une technologie qui marie culture et digitale. Nous souhaitons analyser l’impact des nouvelles technologies sur votre quotidien  et  vous faire découvirir la formation Simplon  .</strong></p>
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
         <nav>

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
                <img class="d-block img-fluid " src="img/index111.jpeg" alt="First slide">
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
  <img class="d-block img-fluid"  src="img/index111.jpeg" alt="One img">
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




<!-- start footer.php -->
<!-- start footer -->

<footer>


  <!-- start form -->
  <div class="container mt-5">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                  <h4 class="text-uppercase">Madjid Goumidi</h4>
                  <p>94 rue Leon Marlot,<br> Simplon Roubaix</p>
                  <address>
                    <p><a href="mailto:madjidgo@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>: Madjid</a></p>
                  </address>
                  <div class="form-group col-md-12 col-sm-12" name="horloge">
                       <button TYPE="submit" class="btn btn-small btn-dark-solid" onclick="times()">Click times</button>

                        <!-- <button TYPE="submit" class="btn btn-small btn-dark-solid" onclick="times1()">Click times</button> -->
                  </div>

                  <!--  forms -->
                </div>
                <div class="col-md-8 col-sm-8">
                  <h4 class="text-uppercase">Avez une question?</h4>

                  <form action="#" method="post" class=" m-top-50">
                    <div class="row">
                      <div class="col-md-6 form-group col-sm-6">
                        <label>Nom *</label>
                        <input id="name" name="name" maxlength="100" required="" class="form-control" type="text">
                      </div>
                      <div class="col-md-6 form-group col-sm-6">
                        <label>Email *</label>
                        <input id="email" name="email" maxlength="100" required="" class="form-control" type="email">
                      </div>

                      <div class="form-group col-md-6 col-sm-6">
                        <label>Phone</label>
                        <input id="phone" name="phone" maxlength="100" class="form-control" type="text">
                      </div>
                      <div class="form-group col-md-6 col-sm-6">
                        <label>Sujet</label>
                        <input id="subject" name="subject" maxlength="100" class="form-control" type="text">
                      </div>

                      <div class="form-group col-md-12 col-sm-12">
                        <label>Comments</label>
                        <textarea id="comments" name="comments" rows="6" class="cmnt-text form-control"></textarea>
                      </div>
                      <div class="form-group col-md-12 col-sm-12">
                        <button type="submit" class="btn btn-small btn-dark-solid" id="button2" onclick="myFunction2()">Envoyer</button>
                      </div>

                    </div>
                  </form>
                </div>
                <p>copyright<a href="mailto:madjidgo@gmail.com">.Madjid Goumidi 2017</a></p>
              </div>
            </div>
            <!-- end forms -->

        </footer>
<!-- end footer -->
<!-- end footer.php -->









<!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
