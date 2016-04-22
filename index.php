<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>

    <div class="container">
      <h1>Example</h1>
      <div id="primary">
        <form role="form" id="myform">
          <div class="form-group row">
            <label for="pwd" class="col-sm-4">Name</label>
            <input type="text" class="col-sm-8" id="name" name="name">
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-4">Email address:</label>
            <input type="email" class="col-sm-8" id="email" name="email">
          </div>
          <div class="g-recaptcha" data-sitekey="6LcD0h0TAAAAAHC2W6f6k1zIhVzZ4es2nsV-VeAd" data-callback="submitForm"></div>

          <button type="submit" class="btn btn-default col-sm-offset-5 col-sm-2">Submit</button>
        </form>
        <div id="confirmation"><p>Email has been sent, check your inbox!</p></div>
      </div>
      <!-- Text that will appear after form is sent. -->
      <div class="row explanations">
        <p class="col-sm-8">The goal here is to use the <a href="https://jqueryvalidation.org/">jquery validation plugin</a> to check the form client side.
        Once the validation is done and the submit button is clicked, making a lightbox for google's recaptcha to avoid spam.
        After that, once the user validates the recaptcha, send an email with phpmailer via ajax to the user using a php file that processes the data.
        Do different things depending on the ajax response: Either show the error or fade in a confirmation that an email has been sent.</p>
        <div class="col-sm-4">
          <img class="logos" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/AJAX_logo_by_gengns.svg/2000px-AJAX_logo_by_gengns.svg.png" alt="">
          <img class="logos" src="https://www.google.com/recaptcha/intro/images/hero-recaptcha-demo.gif" alt="">
        </div>
      </div>

    </div>
    

    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="validating.js"></script>
  </body>
</html>