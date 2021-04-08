<?php
        $my_base_url = '/apartman/';
?>
                                <div class="row">
                                        <div class="col-sm-2">
                                                <div id="fh5co-logo"><a href="index.html">Apartman<span>.</span></a></div>
                                        </div>
                                        <div class="col-sm-10 text-right menu-1">
                                                <ul>
                                                        <li class="active"><a href="photos"><?php echo $this->lang->line('menu_photos'); ?></a></li>
                                                        <li><a href="booking_ajax"><?php echo $this->lang->line('menu_booking'); ?></a></li>
                                                        <li><a href="contact"><?php echo $this->lang->line('menu_contact'); ?></a></li>
                                                </ul>
                                        </div>
                                </div>
                                
                        </div>
                </div>
        </nav>
        <div class="container">
<div id="mylike"></div>
<script>$("#mylike").load("http://localhost/perl/mylike-dbi.cgi");</script>
                <div id="fh5co-intro">
                        <div class="row animate-box">
                                <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                                        <h2><?php echo $this->lang->line('menu_photos'); ?></h2>
                                </div>
                        </div>
                </div>
                <div id="fh5co-portfolio">
                        <div class="row">

                                <div class="col-md-4 col-md-push-8 sticky-parent">
                                        <div class="detail" id="sticky_item">
                                                <div class="animate-box">
                                                        <h2>Lorem ipsum</h2>
                                                        <span>Lorem ipsum dolor sit amet</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                        <p><a class="btn btn-primary btn-demo" href="#"></i> Lorem ipsum</a></p>
                                                </div>
                                        </div>
                                </div>

                                <div class="col-md-7 col-md-pull-4 image-content">
                                        <div class="image-item  animate-box">
                                                <img src="<?php echo $my_base_url?>assets/images/kitchen_480_.jpg" class="img-responsive" alt="Photo by Dmitry Zvolskiy from Pexels">
                                        </div>
                                        <div class="image-item  animate-box">
                                                <img src="<?php echo $my_base_url?>assets/images/interior_480.jpg" class="img-responsive" alt="Photo by Daria Shevtsova from Pexels">
                                        </div>
                                        <div class="image-item  animate-box">
                                                <img src="<?php echo $my_base_url?>assets/images/livingroom_480.jpg" class="img-responsive" alt="Photo by Daria Shevtsova from Pexels">
                                        </div>
                                        <div class="image-item  animate-box">
                                                <img src="<?php echo $my_base_url?>assets/images/bedroom_480.jpg" class="img-responsive" alt="https://www.pexels.com/">
                                        </div>
                                        <div class="image-item  animate-box">
                                                <img src="<?php echo $my_base_url?>assets/images/bathroom_480.jpg" class="img-responsive" alt="Photo by Jean van der Meulen from Pexels">
                                        </div>
                                </div>

                        </div>
                </div>
        </div><!-- END container-wrap -->
