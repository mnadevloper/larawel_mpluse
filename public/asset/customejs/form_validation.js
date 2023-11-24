
$(document).ready(function () {

    /**Only accept alphabet */
    $(document).on('input', '#username', function() {
       var sanitizedValue = $(this).val().replace(/[^a-zA-Z\s\W]/g, '');
       $(this).val(sanitizedValue);
   });


   // Custom method to validate GST number format
   $.validator.addMethod("alphaSpecial", function (value, element) {
       return this.optional(element) || /^[A-Za-z\s\W]+$/.test(value);
   }, "The Username field is not in the correct format.");



   $('.register-form').validate({
       rules: {
           // Define validation rules for form fields
           username: {
               required: true,
               alphaSpecial: true
           },
           email: {
               required: true,
               email: true
           },
           mobile: {
               required: true,
               minlength: 10,
               maxlength: 10,
               digits: true,
           },
           password: {
               required: true
           },
       },
       messages: {
        username: {
               required: "Please enter your full name",
           },
           email: {
               required: "Please enter your email",
           },
           mobile: {
               required: "Please enter mobile number",
           },
           password: {
               required: "Please create your password",
           },

       },
       errorElement: 'span',
       errorPlacement: function (error, element) {
           error.addClass('valid_err invalid-feedback');
           error.insertAfter(element);
       },
       highlight: function (element, errorClass, validClass) {
           $(element).addClass('is-invalid').removeClass('is-valid');
       },
       unhighlight: function (element, errorClass, validClass) {
           $(element).removeClass('is-invalid').addClass('is-valid');
       },
       submitHandler: function (form) {
           // Handle the form submission here if it's valid
           form.submit();
       }
   });

   
});
