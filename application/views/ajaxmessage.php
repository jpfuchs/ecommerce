
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