<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/contact.css" />
<?php include 'includes/sendmail.php'; ?>
</head>
<body>
<?php include 'includes/nav.php'; ?>

<div class="contactphp">
    <div class="forms1">
        <div class="box">
        <h1>CONTACT ONS</h1>
        <form action="" class="whip" method="post">
                <div class="input-container"> 
                <input type="text" id="firstname" name="first_name" class="input">
                <label class="input_label" for="firstname">Voornaams</label>
                <div class="input_underline"></div>
            </div>
            <div class="input-container">
                <input type="text" name="last_name" id="lastname" class="input">
                <label class="input_label" for="lastname">Achternaam</label>
                <div class="input_underline"></div>
            </div>
            <div class="input-container">
                <input type="text" name="email" id="email" class="input">
                <label class="input_label" for="email">Email</label>
                <div class="input_underline"></div>
            </div>
            <div class="input-container msg-container">
                <textarea class="input" type="text" name="message" id="bericht"></textarea>
                <label for="bericht" class="input_label">Message</label>
                <div class="input_underline"></div>
            </div>
                <input type="submit" name="submit" class="button " value="Submit">
        </form>
        </div>  
    </div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>