<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/contact.css" />
</head>
<body>
<?php include 'includes/nav.php'; ?>
<?php include 'includes/sendmail.php'; ?>
<div class="contactphp">
    <div class="forms1">
        <div class="box">
            <h1>CONTACT ONS</h1>
            <form action="" method="post">
                <div class="input-container"> <input type="text" name="first_name" class="input" placeholder="Voornaam">
            </div>
            <div class="input-container">
                <input type="text" name="last_name" class="input" placeholder="Achternaam">
            </div>
            <div class="input-container">
                <input type="text" name="email" class="input" placeholder="Email">
            </div>
            <div class="input-container">
                <textarea rows="5" name="message" cols="30" placeholder="Bericht"></textarea>
            </div>
                <input type="submit" name="submit" class="button" value="Submit">
            </form>
    </div>  
    </div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>