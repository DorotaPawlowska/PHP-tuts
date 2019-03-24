<?php
 
    // message vars
    $msg = '';
    $msgClass = '';

    // check for submit
    if(filter_has_var(INPUT_POST, 'submit')){
        //get the form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        //check required fields
        if(!empty($email) && !empty($name) && !empty($message)){
            // passed
            // check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                // failed
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            } else {
                // passed
                // recipient email
                $toEmail = 'test@test.com'; // test !!!!!!! zmienić  
                $subject = 'Contact Request From ' . $name; 
                $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>
                ';
                // email headers
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

                // additional headers
                $headers .= "From: " . $name. "<".$email.">" . "\r\n";
                if(mail($toEmail, $subject, $body, $headers)){
                    // email sent
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                } else {
                    // failed
                    $msg = 'Your email was not sent';
                    $msgClass = 'alert-danger';
                }
            }
        } else {
            // failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }

    } 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link 
    href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/sketchy/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-N8DsABZCqc1XWbg/bAlIDk7AS/yNzT5fcKzg/TwfmTuUqZhGquVmpb5VvfmLcMzp" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
    <?php if($msg != ''): ?>
    <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
            </div>
            <br>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>