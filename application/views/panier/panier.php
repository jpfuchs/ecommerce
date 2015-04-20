<?php $this->load->view("globals/header"); ?>


<!--<?php var_dump($lesproduits);   ?> -->

<!--<?php var_dump($lepannier);   ?>-->

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>

                    <?php $total= 0 ;?>

            <?php foreach ($lesproduits  as $key => $value) : ?>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                               <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?= base_url()?>assets/images/<?=$value->image?>" style="width: 72px; height: 72px;"> </a>
               

                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?= $value->titre ; ?></a></h4>
                              <!--  <h5 class="media-heading"> by <a href="#">Brand name</a></h5>-->
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">

              
                         <a class="glyphicon form-control" href="<?=site_url('panier/action/ajouter/'.$value->id)?>">+</a>
   
                              <input id="test" style="width:75px;" type="email" class="form-control" id="exampleInputEmail1" value="<?= $lepannier[$value->id] ; ?>">
                  
                        <a class="glyphicon form-control" href="<?=site_url('panier/action/enlever/'.$value->id)?>">-</a>
       
                        </td class="col-sm-1 col-md-1" style="text-align: center">
                       




                        <td class="col-sm-1 col-md-1 text-center"><strong><?= $value->prix ; ?>€</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?= $lepannier[$value->id] * $value->prix ; ?>€</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger">
                            <a href="<?=site_url("panier/action/supprimer/".$value->id."");?>"</a><span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr>

                    <?php  $total = $total + $lepannier[$value->id] * $value->prix ; ?>


        <?php  endforeach;  ?> 

                    <!--<tr>
                        <td class="col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Product name</a></h4>
                                <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                <span>Status: </span><span class="text-warning"><strong>Leaves warehouse in 2 - 3 weeks</strong></span>
                            </div>
                        </div></td>
                        <td class="col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="2">
                        </td>
                        <td class="col-md-1 text-center"><strong>$4.99</strong></td>
                        <td class="col-md-1 text-center"><strong>$9.98</strong></td>
                        <td class="col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr>-->
                  
                    <!--<tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>$24.59</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>$6.94</strong></h5></td>
                    </tr>-->
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong><?php echo $total; ?>€</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                       <?php if ( !empty( $this->session->flashdata('success_comm')) ) : ?>
                            
                            <div style="width:50%;color:red" class="alert alert-success">
                                <?php echo $this->session->flashdata('success_comm'); ?>
                            </div>

                      <?php endif; ?>

                 </tbody>
            </table>
        </div>
    </div>
</div>

    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>

    <!-- Footer -->
     <?php $this->load->view("globals/footer"); ?>