<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Newcastle Locksmiths</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="fonts/bebas_neue/stylesheet.css">
  <meta name="google-site-verification" content="dTvjb_flh1ovpWP9J6K9i_8PLQ1wJYm1EbA4Yz39Q_c" />
  <!-- <meta name="format-detection" content="telephone=no"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>  

<?php require'header.php'; ?>
<?php require'nav.php' ?>

</section>
<section id="contact">
  <h1>Contact us</h1>
  <h2>For emergency 24 / 7 service please call 0404 785 921</h2>
  <div class="contactLeft">
    <form method="POST" action="email.php">
    <label for="from_email">Your email</label>
    <input 
      id="from_email"
      name="from_email" 
      size="64" 
      maxlength="64" 
      placeholder="Please enter your email"/>
    <label for="realname">Your name</label>
    <input 
      id="realname"
      name="realname" 
      size="64" 
      maxlength="64" 
      placeholder="Please enter your name"/>
    <label for="subject">Subject</label>
    <input 
      id="subject"
      name="subject" 
      size="64" 
      maxlength="64"
      placeholder="please enter the subject of your message"/> 
    </div>
    <div class="contactRight">
      <label for="mainText">Type your message</label>
      <textarea 
        id="mainText"
        name="body" 
        rows="10" 
        cols="60"></textarea>
      <p>
      <input class="formButton" type="submit" name="send" value="Send Your Message"/>
      </p>
      <input 
        type="hidden"
        name="returnurl" 
        value="<?php echo $escapedReturnUrl?>"/>
    </div>
  </form>

</section>

<?php require'footer.php' ?>
  
</body>
</html>