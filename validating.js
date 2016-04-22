var $ = jQuery.noConflict();

$(function () {
  // TODO: ajouter google spreadsheets....

  var validator = $("#myform").validate({

    //Callback for handling the actual submit when the form is valid.
    submitHandler: function(form) {

      // The form is valid, show the captcha (in the callback function of the recaptcha we submit via ajax)
      $("#primary").addClass('recaptcha-showing');

    }, // end of SubmitHandler

    keyup: function(element){
      return element.valid();
    },

    wrapper: 'div', //wrap errors in div 

    rules: {
      name: {
        required: true
      },
      email: {
        required: true
      }
    },

    debug: true,
    highlight: function(element, errorClass, validClass) {
      $(element).parent().parent().addClass(errorClass).removeClass(validClass);

    },
    unhighlight: function(element, errorClass, validClass) {
      $(element).parent().parent().removeClass(errorClass).addClass(validClass);

    }
  }); //end of validate

});

// =========================
// Ajax submit (callback function of the recaptcha)
// =========================
function submitForm(){
  $.ajax({
          type: 'POST',
          data: $('form').serialize(),
          url: 'process.php',
          success: function (msg) {
            $("#primary").removeClass('recaptcha-showing').addClass('confirm');
            // console.log('success!');
          },
          error: function(xhr) { // if error occured
            alert("An error occured. Please contact the administrators. Error: "+xhr);
            //
          },

        }); // end of ajax for emails
}
