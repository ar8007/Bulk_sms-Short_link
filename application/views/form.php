<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Form</title>
	<?php echo link_tag('assests/css/bootstrap.min.css'); ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <form class="form-inline my-2 my-lg-0" action="<?php echo base_url('home/table');?>" method="POST">
      <button class="btn btn-primary my-2 my-sm-0" type="submit">customers table</button>
    </form>
  </div>
</nav>
<div class="container" style="margin-top:100px">
<form action="<?php echo base_url('home/submit');?>" method="POST">
<fieldset>
  <div class="form-group">
	<label for="exampleInputEmail1"><strong>Contats</strong></label>
	<input name="phone" required class="form-control col-lg-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter contacts numbers">
  </div>
  <fieldset class="form-group">
      <legend>Do you want to add link</legend>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" onclick="document.getElementById('demo').style.display='block'" >
          yes
        </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked="" onclick="document.getElementById('demo').style.display='none'">
          no
        </label>
      </div>
    </fieldset>
  <div id="demo" class="form-group" style="display:none">
	<label for="exampleInputEmail1"><strong>Link</strong></label>
	<input type="url" name="link" class="form-control col-lg-6" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="link">
  </div>
  <div class="form-group">
      <label for="exampleTextarea"><strong>Message</strong></label>
      <textarea class="form-control col-lg-6" id="exampleTextarea" rows="3" name="message" placeholder="type your message here..."></textarea>
    </div>
  <button type="submit" class="btn btn-primary">Send sms</button>
</fieldset>
</form>
</div>

</body>
<script src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</html>