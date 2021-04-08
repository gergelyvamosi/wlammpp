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
                                                        <li><a href="booking_ajax"><?php echo $this->lang->line('menu_booking'); ?></a></li>
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
<table border="1">
<tr>
<th>Name</th><th>Email</th><th>Message</th><th>Checkin</th><th>Checkout</th><th>Created at</th><th>Updated at</th><th>Locale</th><th>Approved</th><th></th>
</tr>
<?php foreach ($query as $item):?>
<tr>
<form>
<td><?php echo $item->name;?></td>
<td><?php echo $item->email;?></td>
<td><?php echo $item->message;?></td>
<td><?php echo $item->checkin;?></td>
<td><?php echo $item->checkout;?></td>
<td><?php echo $item->created_at;?></td>
<td id="updated<?php echo $item->id;?>"><?php echo $item->updated_at;?></td>
<td><?php echo $item->locale;?></td>
<td id="approved<?php echo $item->id;?>"><?php echo $item->approved==1?'true':'false';?></td>
<td><input id="approve_button<?php echo $item->id;?>" type="button" value="Approve" class="btn btn-primary btn-modify" <?php echo $item->approved==1?'disabled':'';?>></td>
</form>
<script>
    $(document).ready(function(){
        $( "#approve_button<?php echo $item->id;?>" ).click(function(event)
        {
            $.ajax(
                {
                    type:"post",
                    url: "<?php echo $my_base_url; ?>index.php/apartments/admin_approve_ajax/<?php echo $item->id;?>",
                    data:{ },
		    contentType: "application/json",
		    dataType:"json", 
                    success:function(response)
                    {
                        console.log(response);
			var obj = $.parseJSON(JSON.stringify(response));
                        $("#updated<?php echo $item->id;?>").html(obj.updated_at);
                        $('#approved<?php echo $item->id;?>').html(obj.approved==1?'true':'false');
                        $('#approve_button<?php echo $item->id;?>').prop('disabled', obj.approved==1?true:false);
                    },
                    error: function(response)
                    {
                        console.log(response);
                        alert("Invalide id=<?php echo $item->id;?>!");
                    }
                }
            );
        });
    });
</script>
</tr>
<?php endforeach;?>
</table>
                                </div>
                        </div>
                </div>
        </div><!-- END container -->
