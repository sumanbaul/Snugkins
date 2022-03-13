<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
            $(function() {
                $("#contact-form").on("submit", function(event) {
                    event.preventDefault();
                                   
 
                    $.ajax({
                        url: "email.php",
                        type: "post",
                        data: $(this).serialize(),
                        success: function(d) {
                            $('#msg_output').html(d);
                            alert(d);
                        }
                    });
                });
            });
</script>
</head>

<body>
								<form class="contact-form" id="contact-form">

									<div class="input-container li_user">
										<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
									</div><!-- /.input-container-->


									<div class="input-container li_mail">
										<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
									</div><!-- /.input-container -->


									<div class="input-container li_pen">
										<textarea class="form-control" id="message" name="message" cols="45" placeholder="Message" rows="6"></textarea>
									</div><!-- /.input-container -->
									

									<button type="submit" class="btn custom-btn">Submit</button>
								</form><!-- /.contact-form -->

							<div id="msg_output" class="success">

							</div>

</body>

</html>