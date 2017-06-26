<div id="footer">
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


        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        <script src="js/bootstrap.min.js"></script>

         <script src="js/vendor/modernizr-2.8.3.min.js"></script>
         <script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>

</div>
</div>
</body>
</html>
