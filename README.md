# ajax-jquery-validate-js-form
### Form validation
This is a repo that I'm making for myself to refer to in the future when developing forms

It's a form that uses the jQuery Validation Plugin to validate the user's input client side. Once everything is validated and the user clicks the submit button, it does not submit right away. It opens a google recaptcha antibot in a lightbox. Once that is validated, it sends the data via ajax to a php file that will process it. The php sends out an email with the data to the user using ajax, and then shows a confirmation message on the screen, still using ajax.
![alt tag](http://www.startupwingman.com/wp-content/uploads/2014/05/jquery-form-validator.jpg)
