<?php 

    if($_POST['submit']) {

        if(!$_POST['name']){
            $error  = "Please enter your name!";
        }

        if(!$_POST['email']){
            $error  = "Please enter your email!";
        }

        if(!$_POST['message']){
            $error  = "Please enter your message!";
        }

        if($error){
            $result ="whoopss.. there is an error. Please correct the following $error";
        }
    }

?>

<div class="well well-sm">
                            <form class="form-horizontal" method="post" role="form" action="" >
                            <fieldset>
                        <!-- Name input-->
                        <div class="form-group">
                        <div class="col-md-8 col-md-offset-2">
                            <input id="name" name="name" type="text" placeholder="Name" class="form-control" required >
                            <div class="help-block with-errors"></div>
                        </div>
                        </div>
                
                        <!-- Email input-->
                        <div class="form-group">
                        <div class="col-md-8 col-md-offset-2">
                            <input id="email" name="email" type="text" placeholder="Email" class="form-control" required >
                            <div class="help-block with-errors"></div>
                        </div>
                        </div>
                
                        <!-- Message body -->
                        <div class="form-group">
                        <div class="col-md-8 col-md-offset-2">
                            <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5" required ></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        </div>

                        <!-- Form actions -->
                     <div class="form-group">
                        <div class="col-button col-md-8 col-md-offset-2">
                           <button type="submit" class="btn btn-primary btn-md ">Submit</button>
                        </div>
                        </div>
                    </fieldset>
                    </form>
                    </div>
