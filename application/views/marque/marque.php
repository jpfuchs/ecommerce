<?php $this->load->view("globals/header"); ?>

 
    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Présentation des marques</h1>
          </div>
         
          <div class="row">

               <?php foreach ($lesmarques  as $key => $value) : ?>


              <div class="col-xs-6 col-lg-4">
                  <h2> <?php echo $value->nom ; ?></h2>
                  <p><?php echo $value->description ; ?> </p>
                  <p><a class="btn btn-default" href="<?=site_url("produit/produit_marque/".$value->idmarque."");?>" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            
             <?php  endforeach;  ?> 



           

        <!--<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
          </div>-->
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

          <!-- Footer -->
     <?php $this->load->view("globals/footer"); ?>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>-->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="offcanvas.js"></script>-->
  </body>
</html>
