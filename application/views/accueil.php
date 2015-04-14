
<?php $this->load->view("globals/header"); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

           <?php $this->load->view("globals/sidebar"); ?>

           <!--<?php echo $firstname; ?>-->

          <!-- <?php var_dump ($allArticles); ?>-->

       <!--   <?php var_dump ($allArticlesPlusCher); ?> -->
 

         


            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                
                                 <?php foreach ($allArticlesPlusCher  as $key => $value) : ?>
                                   
                                    <?php if ($key ===0) {  ?>  

                                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>

                                     <?php }else { ?>
                               
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                   

                                     <?php  } ?>
                            
                                <?php  endforeach;  ?> 
                            </ol>

                            <div class="carousel-inner">
                            <?php foreach ($allArticlesPlusCher  as $key => $value) : ?>
                                 <?php if ($key ===0) {  ?>    
                                
                                <div class="item active">
                                    <img class="slide-image" src="<?= base_url(); ?>assets/images/<?= $value->image ?>" alt="">
                                </div>

                                <?php }else { ?>
                                
                                <div class="item">
                                    <img class="slide-image" src="<?= base_url(); ?>assets/images/<?= $value->image ?>" alt="">
                                </div>
                                
                                <?php  } ?>
                            <?php  endforeach;  ?> 

                            </div> 

                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>

                    </div>

                </div>

                 

                <div class="row">

                    <?php foreach ($allArticles  as $key => $value) : ?>

                   

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                           <!-- <img src="<?= base_url(); ?>assets/images/<?php echo $value->image ; ?>" alt="">-->
                             <img src="<?= $value->displayImage(); ?>" >
                            <div class="caption">
                                <h4 class="pull-right"><?php echo $value->prix." euros" ; ?></h4>
                                <h4><a href="<?=site_url("produit/information/".$value->id."");?>"><?php echo $value->titre ; ?></a>
                                </h4>
                                <!--<p><a href=""><?php echo $value->description ; ?></a></p>-->
                                <p><a href=""><?= word_limiter($value->description,5); ?></a></p>
                            </div>
                            <div class="ratings">
                                  <?php for($i=1;$i<=5;$i++) { ?>
                                    <?php if($i <= round($value->moyenne)):  ?>
                                        <span class="glyphicon glyphicon-star"></span>
                                    <?php else: ?>
                                         <span class="glyphicon glyphicon-star-empty"></span>
                                    <?php endif; ?>

                                  <?php     } ?>
                                    
                                 <?php if ( ($value->nombre === '0')  ||  ($value->nombre === '1') ): ?>
                                     <p class="pull-right"><?php echo $value->nombre ; ?>  commentaire</p>
                                 <?php  else : ?>
                                    <p class="pull-right"><?php echo $value->nombre ; ?>  commentaires</p>
                                 <?php endif; ?>

                               <!-- <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>-->
                            </div>
                        </div>
                    </div>

                    <?php  endforeach;  ?> 

                  <!--  <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="#">Second Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$74.99</h4>
                                <h4><a href="#">Third Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$84.99</h4>
                                <h4><a href="#">Fourth Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$94.99</h4>
                                <h4><a href="#">Fifth Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>-->



                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

       <?php $this->load->view("globals/footer"); ?>

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>

</html>
