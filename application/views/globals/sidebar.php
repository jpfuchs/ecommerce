

  <div class="col-md-3">
                <!--<p class="lead">Shop Name</p> -->
			
				<?php
             
             	   $allCategories = $this->Categorie_model->getCategorie();

             	  

             	   foreach ($allCategories as $key => $value) { ?>
             	   	
             	   	 <a href="<?=site_url("categorie/information/".$value->idCategorie."");?>" class="list-group-item"><?php echo $value->titre;    ?></a>
             	   
             	   <?php } ?>
 

               

               <!-- <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div> -->

       </div>