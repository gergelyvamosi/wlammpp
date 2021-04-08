<?php
        $my_base_url = '/apartman/';
?>
                                <div class="row">
                                        <div class="col-sm-2">
                                                <div id="fh5co-logo"><a href="index.html">Apartman<span>.</span></a></div>
                                        </div>
                                        <div class="col-sm-10 text-right menu-1">
                                                <ul>
                                                        <li><a href="photos"><?php echo $this->lang->line('menu_photos'); ?></a></li>
                                                        <li><a href="booking"><?php echo $this->lang->line('menu_booking'); ?></a></li>
                                                        <li class="active"><a href="contact"><?php echo $this->lang->line('menu_contact'); ?></a></li>
                                                </ul>
                                        </div>
                                </div>
                                
                        </div>
                </div>
        </nav>
        <div class="container">
                <div id="fh5co-intro">
                        <div class="row animate-box">
                                <div class="col-md-8 col-md-offset-2 col-md-pull-2">
                                        <h2><?php echo $this->lang->line('menu_contact'); ?></h2>
                                </div>
                        </div>
                </div>
                <div id="fh5co-contact">
                        <div class="row">
                                <div class="col-md-8 animate-box">
                                        <div class="form-wrap">
                                                <div class="row">
							<form action="send" method="POST">
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <input type="text" name="name" class="form-control" placeholder="Your name">
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <input type="text" name="email" class="form-control" placeholder="Your email">
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <textarea id="message" name="message" class="form-control" id="" cols="30" rows="15" placeholder="Your message"></textarea>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="form-group">
									<input type="submit" value="Send message" class="btn btn-primary btn-modify">
                                                                </div>
                                                        </div>
							</form>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div><!-- END container -->
