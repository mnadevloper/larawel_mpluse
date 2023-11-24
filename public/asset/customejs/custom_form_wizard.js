$(function () {

    /**Only accept alphabet */
    $(document).on('input', '.username', function () {
        var sanitizedValue = $(this).val().replace(/[^a-zA-Z\s\W]/g, '');
        $(this).val(sanitizedValue);
    });


    // Custom method to validate GST number format
    $.validator.addMethod("alphaSpecial", function (value, element) {
        return this.optional(element) || /^[A-Za-z\s\W]+$/.test(value);
    }, "The Username field is not in the correct format.");

    // Add custom methods for file validation (file size and accepted file types)
$.validator.addMethod('filesize', function(value, element, param) {
    return this.optional(element) || (element.files[0].size <= param);
}, 'File size must be less than 4MB.');

$.validator.addMethod('filetypes', function(value, element, param) {
    var fileTypeRegex = new RegExp('.(' + param.join('|') + ')$', 'i');
    return this.optional(element) || fileTypeRegex.test(value);
}, 'Please select a file of type: jpg, jpeg, png.');

$.validator.addMethod('accept', function(value, element, param) {
    var fileTypeRegex = new RegExp('.(' + param.join('|') + ')$', 'i');
    return this.optional(element) || fileTypeRegex.test(value);
}, 'Please select a file of type: pdf.');

    var form = $(".vertical-tab-steps").show();
    $(".vertical-tab-steps").steps({
        headerTag: "h6",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        stepsOrientation: "vertical",
        titleTemplate: '<span class="step">#index#</span> #title#',
        labels: {
            finish: "Submit"
        },
        onStepChanging: function (e, t, i) {
            return t > i || !(3 === i && Number($("#age-2").val()) < 18) && (t < i && (form.find(".body:eq(" + i + ") label.error").remove(), form.find(".body:eq(" + i + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
        },
        onFinishing: function (e, t) {
            return form.validate().settings.ignore = ":disabled", form.valid()
        },
        onFinished: function (e, t) {
            // alert("Submitted!")
            // $(".vertical-tab-steps form").submit();
            var form = document.querySelector('.vertical-tab-steps');
            form.submit();
        }
    }),
        $(".vertical-tab-steps").validate({
            ignore: "input[type=hidden]",
            // errorClass: "danger",
            // successClass: "success",
            // highlight: function(e, t) {
            //     $(e).removeClass(t)
            // },
            // unhighlight: function(e, t) {
            //     $(e).removeClass(t)
            // },
            // errorPlacement: function(e, t) {
            //     e.insertAfter(t)
            // },
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
            },
            rules: {
                email: {
                    required: true,
                    email: true
                },
                business_name: {
                    required: true,
                    alphaSpecial: true
                },
                mobile: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true,
                },
                authority_mobile: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true,
                },
                authority_email: {
                    required: true,
                    email: true
                },
                business_type: {
                    required:true
                },
                business_entity: {
                    required:true
                },
                business_category: {
                    required:true
                },
                gstin_no: {
                    required:true
                },
                business_desc: {
                    required:true
                },
                udyog_aadhar: {
                    required:true,
                    minlength:12,
                    maxlength:12,
                    digits:true
                },
                shop_no: {
                    required:true
                },
                website_url: {
                    required:true,
                    url:true
                },
                street_no: {
                    required:true
                },
                pincode: {
                    required:true
                },
                states: {
                    required:true
                },
                district: {
                    required:true
                },
                city: {
                    required:true
                },
                pan_img: {
                    required:true,
                    filetypes: ['jpg', 'jpeg', 'png'], // Accept only specified image types
                    filesize: 4194304 // Maximum file size in bytes (4MB)
                },
                certification_incorporation: {
                    required:true,
                    accept:['pdf'],
                    filesize: 4194304
                },
                gst_reg_img: {
                    required:true,
                    filetypes: ['jpg', 'jpeg', 'png'],
                    filesize: 4194304
                },
                director_name: {
                    required:true,
                    alphaSpecial: true
                },
                partner_pan: {
                    required:true,
                    filetypes: ['jpg', 'jpeg', 'png'],
                    filesize: 4194304
                },
                address_proof: {
                    required:true,
                },
                other_business_cat: {
                    required: true,
                    alphaSpecial: true
                },
                address_proof_front: {
                    required:true,
                    filetypes: ['jpg', 'jpeg', 'png'],
                    filesize: 4194304
                },
                address_proof_back: {
                    required:true,
                    filetypes: ['jpg', 'jpeg', 'png'],
                    filesize: 4194304
                }

            },
            // messages: {

            //     // username: {
            //     //        required: "Please enter your full name",
            //     //    },
            //     //    email: {
            //     //        required: "Please enter your email",
            //     //    },
            //     //    mobile: {
            //     //        required: "Please enter mobile number",
            //     //    }

            //    },

        });
});
