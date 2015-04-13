<?php $this->load->view("globals/header"); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

    <!--<?php var_dump ($unproduit); ?>-->

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="<?= $unproduit->displayImage(); ?>" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right"><?php echo $unproduit->prix." euros" ; ?></h4>
                        <h4><a href="#"><?php echo $unproduit->titre; ?> </a>
                        </h4>
                        <p> <?php echo $unproduit->description; ?> </p>
                        <!--<p>See more snippets like these online store reviews at <a target="_blank" href="http://bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                        <p>Want to make these reviews work? Check out
                            <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                            </strong>over at maxoffsky.com!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>-->

                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>

                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-success">Leave a Review</a>
                    </div>

                    <hr>
                    
                    <!--<form method="post" accept-charset="utf-8" action="">
                    
                        <input type="text" name="auteur" value="" />
                        <input type="text" name="note" value="" />
                        <input type="text" name="contenu" value="" />

                         <input type="submit" name="valider" value="" />
                    
                    </form>-->

                    <?php echo form_open("produit/information/".$unproduit->id); ?>

                    <?php

                    $data=[ 
                            "name"=>"auteur",
                            "placeholder"=>"saisissez votre nom",
                            "class"=>"form-control",
                            "value"=>set_value("auteur")
                          ];

                    echo form_input($data);

                    ?>

                      <!--<input type="text" name="note" value="" />-->
                       
                       <?php

                    $data=[ 
                            "name"=>"note",
                            "placeholder"=>"saisissez votre note",
                            "class"=>"form-control",
                            "value"=>set_value("note")
                          ];

                    echo form_input($data);

                    ?> 


                      <textarea name="contenu" value="" rows="2" cols="30"/></textarea>
                      <br/>
                      
                      <!--<button type="submit" class="btn btn-success" name="valider">Valider</button>-->
                     <?php
                        
                        $data = [
                            'name'          => 'button',
                            'id'            => 'button',
                            'value'         => 'true',
                            'type'          => 'submit',
                            'content'       => 'Valider'];


                            echo form_button($data);


                        ?>

                        <?= validation_errors(); ?>

                       <?php echo form_close(); ?>


                    <?php echo $this->session->flashdata('success_comm'); ?>


                    <div class="row">
                     
                         <?php foreach ($commentaire  as $key => $value) : ?>

                        <div class="col-md-12">

                    

                            <!--<span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star-empty"></span>-->
                           
                             <?php   for($i=1;$i<=$value->note;$i++) { ?>
                                   
                                        <span class="glyphicon glyphicon-star"></span>

                               <?php     } ?>

                             

                             <?php echo $value->note ; ?>



                            <?php echo $value->auteur ; ?>
                            <span class="pull-right"><?php echo $value->datecommentaire ; ?></span>
                            <p> <?php echo $value->contenu ; ?></p>
                        </div>

                        <?php endforeach; ?>


                      

                    </div>

                    <hr>

                 <!--   <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">12 days ago</span>
                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">15 days ago</span>
                            <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                        </div>
                    </div>-->

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
     <?php $this->load->view("globals/footer"); ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>

</html>
