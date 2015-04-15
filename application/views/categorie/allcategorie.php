<?php $this->load->view("globals/header"); ?>


<style type="text/css">
    
    /*!
 * Start Bootstrap - Heroic Features HTML Template (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

body {
    padding-top: 70px; /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
}

.hero-spacer {
    margin-top: 50px;
}

.hero-feature {
    margin-bottom: 30px;
}

footer {
    margin: 50px 0;
}
</style>


    <!-- Page Content -->
    <div class="container">


    <?php    if (empty($produitsCategories) === false) : ?>
        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1><?php echo $produitsCategories[0]->nom ; ?></h1>
            <p>Voici les <?php echo $produitsCategories[0]->nom ; ?> disponibles</p>
            <p><a class="btn btn-primary btn-large">Call to action!</a>
            </p>
        </header>

        <hr>
          <?php else: ?>

          <p> Il n'y a pas de produit correspondant à cette categorie </p>

      <?php endif; ?>

  


        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Features</h3>
            </div>
        </div>



        <!-- /.row -->
          <div class="row text-center">

         <?php    if (empty($produitsCategories) === false) : ?>

        <?php foreach ($produitsCategories  as $key => $value) : ?>

        <!-- Page Features -->

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?= $value->displayImage(); ?>" alt="">
                    <div class="caption">
                        <h3><?php echo $value->titre ; ?></h3>
                        <p><?php echo $value->description; ?>.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

        <?php  endforeach;  ?> 

       <?php endif; ?>


           <!-- <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>-->

           <!--<div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>-->

           <!-- <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="http://placehold.it/800x500" alt="">
                    <div class="caption">
                        <h3>Feature Label</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>
                        </p>
                    </div>
                </div>
            </div>-->

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
