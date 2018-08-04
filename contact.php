<?php
    //Message Vars
    $msg = '';
    $msgClass = '';

    //Check for submit
    if(filter_has_var(INPUT_POST, 'submit')) {
        //Get form data
        $name = htmlspecialchars($_POST['name']);
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        //Check required fields
        if(!empty($name) && !empty($email) && !empty($message)) {
            //Passed
            //Check Email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                //Failed
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            } else {
                //Passed
                $toEmail = 'nidzgorskiadrian@gmail.com';
                $subject = 'Contact Request From '.$name;
                $body = '<h2>Contact Request</h2>
                         <h4>Name</h4><p>'.$name.'</p>
                         <h4>Email</h4><p>'.$email.'</p>
                         <h4>Message</h4><p>'.$message.'</p>';

                    if(!empty($phone))
                        $body .= '<h4>Phone</h4><p>'.$phone.'</p>';

                    //Email Headers
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";
                    //Additional Headers
                    $headers .= "From: ".$name."<".$email.">"."\r\n";

                    if(mail($toEmail, $subject, $body, $headers)) {
                        $msg = 'Your email has been sent';
                        $msgClass = 'alert-success';
                    } else {
                        $msg = 'Your email was not sent';
                        $msgClass = 'alert-danger';
                    }
            }
        } else {
            //Failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    } 
?>

<?php include('inc/header.php') ?>

    <div class="main">
        <div class="container-fluid">
            <h1 class="mainTitle">Wypełnij formularz, a skontaktuję się z Tobą !</h1>

            <div class="row mt-5">
                <div class="col-md-6 offset-md-3">
                    
                    <?php if($msg != ''): ?>
                        <div class="alert <?php echo $msgClass; ?>">
                            <?php echo $msg ?>
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <form class="form-login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="form-group">
                                <label class="labelMessageForm" for="name">Imię:</label>
                                <input type="text" class="form-control" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                            </div>
                            <div class="form-group">
                                <label class="labelMessageForm" for="phone">Telefon:</label>
                                <input type="text" class="form-control" name="phone" value="<?php echo isset($_POST['phone']) ? $phone : '' ?>">
                            </div>
                            <div class="form-group">
                                <label class="labelMessageForm" for="email">Email:</label>
                                <input type="email" class="form-control" name="email" value="<?php echo isset($_POST['email']) ? $email : '' ?>">
                            </div>
                            <div class="form-group">
                                <label class="labelMessageForm" for="message">Wiadomość:</label>
                                <textarea class="form-control" rows="5" name="message"><?php echo isset($_POST['message']) ? $message : '' ?></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-send">Wyślij</button>
                        </form> 
                    </div>
                </div>
            </div>
           
        </div>
    </div>

<?php include('inc/footer.php') ?>