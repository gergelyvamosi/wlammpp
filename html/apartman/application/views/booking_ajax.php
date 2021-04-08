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
                                                        <li class="active"><a href="booking_ajax"><?php echo $this->lang->line('menu_booking'); ?></a></li>
                                                        <li><a href="contact"><?php echo $this->lang->line('menu_contact'); ?></a></li>
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
                                        <h2><?php echo $this->lang->line('menu_booking'); ?></h2>
                                </div>
                        </div>
                </div>
                <div id="fh5co-contact">
                        <div class="row">
                                <div class="col-md-4 animate-box">
                                        <h3>Contact Information</h3>
                                        <ul class="contact-info">
                                                <li><i class="icon-location4"></i>1117 Budapest, Irinyi J. utca 42.</li>
                                                <li><i class="icon-phone3"></i>+ 1235 2355 98</li>
                                                <li><i class="icon-location3"></i><a href="#">info@yoursite.com</a></li>
                                                <li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
                                        </ul>
                                </div>
                                <div class="col-md-8 animate-box">
                                        <div class="form-wrap">
                                                <div class="row">
							<form id="ajax_form" action="book_ajax" method="POST">
                                                        <div class="col-md-12" id="response_message" style="display: none;">
                                                                <div class="form-group" id="response_message_text">
									<!--<h3><font color="red">MESSAGE</font></h3>-->
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <input id="name" type="text" name="name" class="form-control" placeholder="Name">
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <input id="email" type="text" name="email" class="form-control" placeholder="Email">
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <input id="phone" type="text" name="phone" class="form-control" placeholder="Phone">
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <textarea id="message" name="message" class="form-control" id="" cols="30" rows="15" placeholder="Message"></textarea>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <input id="checkin" type="text" name="checkin" class="form-control" placeholder="Check-in">
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <input id="checkout" type="text" name="checkout" class="form-control" placeholder="Check-out">
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <input id="submit_button" type="button" value="Book" class="btn btn-primary btn-modify">
                                                                </div>
                                                        </div>
							</form>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div><!-- END container -->
<script>
    $(document).ready(function(){
        $( "#submit_button" ).click(function(event)
        {
            event.preventDefault();
            var name = $("#name").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var message = $("#message").val();
            var checkin = $("#checkin").val();
            var checkout = $("#checkout").val();
	    var data = $("#ajax_form").serialize();

            $.ajax(
                {
                    type:"post",
                    url: "<?php echo $my_base_url; ?>index.php/apartments/book_ajax",
                    data:{ name: name, email: email, phone: phone, message: message, checkin: checkin, checkout: checkout },
                    success:function(response)
                    {
                        console.log(response);
                        $("#response_message_text").html("<h3><font color=\"red\">" + response + "</font></h3>");
                        $('#response_message').show();
                    },
                    error: function()
                    {
                        alert("Invalide!");
                    }
                }
            );
        });
	$( "#checkin" ).datepicker({ dateFormat: "yy-mm-dd" });
	$( "#checkout" ).datepicker({ dateFormat: "yy-mm-dd" });
    });
</script>
