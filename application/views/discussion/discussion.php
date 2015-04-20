<!--<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    
    <title>BOOTSTRAP CHAT EXAMPLE</title>
   
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

</head>-->

<?php $this->load->view("globals/header"); ?>


<body style="font-family:Verdana">


<div id="divChat">


<?= form_create("chat",
 [
    "auteur"=>"text",
    "contenu"=>"textarea",
    "valider"=>"submit"

 ]); ?>

</div>


                    <?php echo $this->session->flashdata('success_comm'); ?>




  <div class="container">
<div class="row " style="padding-top:40px;">
    <h3 class="text-center" >BOOTSTRAP CHAT EXAMPLE </h3>
    <br /><br />
    <div class="col-md-8">
        <div class="panel panel-info">
            <div class="panel-heading">
                RECENT CHAT HISTORY
            </div>
            <div class="panel-body">

<ul id="ChatMessages"  class="media-list">

   
                                    <?php foreach ($allMessages  as $key => $value) : ?>                         

                                   <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle " src="assets/img/user.png" />
                                                </a>
                                                <div class="media-body" >
                                                   <?php echo $value->contenu; ?> 
                                                    <br />
                                                   <small class="text-muted">Alex Deo | 23rd June at 5:00pm</small>
                                                    <hr />
                                                </div>
                                            </div>

                                        </div>
                                    </li>
     <li class="media">

         <?php endforeach; ?>
     <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle " src="assets/img/user.gif" />
                                                </a>
                                                <div class="media-body" >
                                                    Donec sit amet ligula enim. Duis vel condimentum massa.
              
              Donec sit amet ligula enim. Duis vel condimentum massa.Donec sit amet ligula enim. 
                                                    Duis vel condimentum massa.
                                                    Donec sit amet ligula enim. Duis vel condimentum massa.
                                                    <br />
                                                   <small class="text-muted">Jhon Rexa | 23rd June at 5:00pm</small>
                                                    <hr />
                                                </div>
                                            </div>

                                        </div>
                                    </li>
     <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle " src="assets/img/user.png" />
                                                </a>
                                                <div class="media-body" >
                                                    Donec sit amet ligula enim. Duis vel condimentum massa.
              
              Donec sit amet ligula enim. Duis vel condimentum massa.Donec sit amet ligula enim. 
                                                    Duis vel condimentum massa.
                                                    Donec sit amet ligula enim. Duis vel condimentum massa.
                                                    <br />
                                                   <small class="text-muted">Alex Deo | 23rd June at 5:00pm</small>
                                                    <hr />
                                                </div>
                                            </div>

                                        </div>
                                    </li>
     <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle " src="assets/img/user.gif" />
                                                </a>
                                                <div class="media-body" >
                                                    Donec sit amet ligula enim. Duis vel condimentum massa.
              
              Donec sit amet ligula enim. Duis vel condimentum massa.Donec sit amet ligula enim. 
                                                    Duis vel condimentum massa.
                                                    Donec sit amet ligula enim. Duis vel condimentum massa.
                                                    <br />
                                                   <small class="text-muted">Jhon Rexa | 23rd June at 5:00pm</small>
                                                    <hr />
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
            </div>
            <div class="panel-footer">
                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Message" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-info" type="button">SEND</button>
                                    </span>
                                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
               ONLINE USERS
            </div>
            <div class="panel-body">
                <ul class="media-list">

                                    <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.png" />
                                                </a>
                                                <div class="media-body" >
                                                    <h5>Alex Deo | User </h5>
                                                    
                                                   <small class="text-muted">Active From 3 hours</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
     <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.gif" />
                                                </a>
                                                <div class="media-body" >
                                                    <h5>Jhon Rexa | User </h5>
                                                    
                                                   <small class="text-muted">Active From 3 hours</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                    <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.png" />
                                                </a>
                                                <div class="media-body" >
                                                    <h5>Alex Deo | User </h5>
                                                    
                                                   <small class="text-muted">Active From 3 hours</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                    <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.gif" />
                                                </a>
                                                <div class="media-body" >
                                                    <h5>Jhon Rexa | User </h5>
                                                    
                                                   <small class="text-muted">Active From 3 hours</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                     <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.png" />
                                                </a>
                                                <div class="media-body" >
                                                    <h5>Alex Deo | User </h5>
                                                    
                                                   <small class="text-muted">Active From 3 hours</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
     <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.gif" />
                                                </a>
                                                <div class="media-body" >
                                                    <h5>Jhon Rexa | User </h5>
                                                    
                                                   <small class="text-muted">Active From 3 hours</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                    <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.png" />
                                                </a>
                                                <div class="media-body" >
                                                    <h5>Alex Deo | User </h5>
                                                    
                                                   <small class="text-muted">Active From 3 hours</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                    <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.gif" />
                                                </a>
                                                <div class="media-body" >
                                                    <h5>Jhon Rexa | User </h5>
                                                    
                                                   <small class="text-muted">Active From 3 hours</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                </div>
            </div>
        
    </div>
</div>
  </div>
</body>

 <script src="<?= base_url(); ?>assets/js/jquery.js"></script>


<script>

    var token_csrf = "<?= $this->security->get_csrf_hash(); ?>";

    console.log(token_csrf) ; 
</script>



 <script src="<?= base_url(); ?>assets/js/chat.js"></script>

  <?php $this->load->view("globals/footer"); ?>
</html>
