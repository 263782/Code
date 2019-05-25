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
        <h1>CONTACT ONS</h1>
        <form action="" method="post">
            <input type="text" name="first_name" class="input" placeholder="Voornaam"><br>
            <input type="text" name="last_name" class="input" placeholder="Achternaam"><br>
            <input type="text" name="email" class="input" placeholder="Email"><br>
            <br><textarea rows="5" name="message" cols="30" placeholder="Bericht"></textarea><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php include 'includes/footer.php'; ?>
    </div>
</div>
</body>
</html>