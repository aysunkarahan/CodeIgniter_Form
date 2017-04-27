<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>My Form</title>
<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<script src="assets/js/angular.min.js"/> </script>
</head>
<body>
<div ng-app="" class="container">  

<?php echo validation_errors(); ?>
  <form id="contact" action="form" method="post" enctype="multipart/form-data">
    <h3>Başvuru Formu</h3>
    <h4>Contact us for custom quote</h4>
    <fieldset>
      <input ng-model="name" placeholder="Your name" name="username" type="text" tabindex="1" value="<?php echo set_value('username'); ?>" required autofocus>
      <p>You entered: {{name}}</p>
    </fieldset>
    <fieldset>
      <input ng-model="email" placeholder="Your Email Address" name="email" type="email" value="<?php echo set_value('email'); ?>" tabindex="2" required>
      <p>You entered: {{email}}</p>
    </fieldset>
    <fieldset>
      <input ng-model="tel"  placeholder="Your Phone Number (optional)" name="phone" value="<?php echo set_value('phone'); ?>" type="tel" tabindex="3" required>
      <p>You entered: {{tel}}</p>
    </fieldset>
    <fieldset>
      <input ng-model="url" placeholder="Your Web Site (optional)" name="url" value="<?php echo set_value('url'); ?>"type="url" tabindex="4" required>
      <p>You entered: {{url}}</p>
    </fieldset>

    <fieldset>
      <textarea ng-model="mesaj" placeholder="Type your message here...." name="mesaj" value="<?php echo set_value('mesaj'); ?>"tabindex="5" required></textarea>
      <p>You entered: {{mesaj}}</p>
    </fieldset>
    <fieldset>
      <div><strong>Resim Seçin:</strong> <input type="file" name="resim" /></div>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
   
  </form>
</div>
</body>
</html>