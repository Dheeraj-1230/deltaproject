<?php


$msg="hii this is dheeraj";
$msg=wordwrap($msg,70);
mail("dkjha8766@gmail.com","my subject",$msg);
 if(isset($_POST['send']))
 {
     $to="dkjha8766@gmail.com";
     $subject=wordwrap($_POST['subject'],70);
     $body=$_POST['body'];
     $header=$_POST['email'];
 }

?>





    <div class="container">
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Send Email</h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                    <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                        <div class="form-group">
                            <label for="username" class="sr-only">Event from Below</label>
                            <input type="subject" name="subject" id="subject" class="form-control" placeholder="Enter Event from Below">
                        </div>
                         

                         <div class="form-group">
                            <textarea class="form-control" name="body" id="body" cols="50" rows="10"></textarea>
                        </div>
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Send">
                    </form>                 
                </div>
            </div> 
        </div> 
    </div> 
</section>
