# ajax-jquery-validate-js-form
### Form validation
This is a repo that I'm making for myself to refer to in the future when developing forms.

It's a form that uses the jQuery Validation Plugin to validate the user's input client side. Once everything is validated and the user clicks the submit button, it opens a google recaptcha antibot in a lightbox. Once that is validated, it sends the data via ajax to a php file that will process it. The php sends out an email with the data to the user using ajax, and then shows a confirmation message on the screen, still using ajax.

![alt tag](http://www.startupwingman.com/wp-content/uploads/2014/05/jquery-form-validator.jpg)
![alt tag](https://www.google.com/recaptcha/intro/images/hero-recaptcha-demo.gif)
![alt tag](https://camo.githubusercontent.com/0d858d6dac4d3f6fab7d42de2c09d32ee2de9c5b/68747470733a2f2f7261772e6769746875622e636f6d2f5048504d61696c65722f5048504d61696c65722f6d61737465722f6578616d706c65732f696d616765732f7068706d61696c65722e706e67)

##TODO
- Prepare it for translations (for Polylang as well as google's recaptcha translations)
- Add some design and make transitions fadein/out
- Make it send another ajax request, this time sending the data to google spreadsheets
