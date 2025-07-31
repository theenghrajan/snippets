(function () {
    var sendMailURL = 'https://lpmailer.smartsites.com/office-flip/mailer/index.php';
    //If any issues regarding php v < 5.2 or SMTP Blocked
    // var sendMailURL = 'https://mailer.smartsitesnepal.com/sites_dir/mailer/index.php';

    // validate.extend(validate.validators.datetime, {
    //     parse: function (value, options) {
    //         return +moment.utc(value);
    //     },
    //     format: function (value, options) {
    //         var format = options.dateOnly ? "YYYY-MM-DD" : "YYYY-MM-DD hh:mm:ss";
    //         return moment.utc(value).format(format);
    //     }
    // });

    // These are the constraints used to validate the form
    // Find more References in reference folder
    var fields_for_form_1 = {
        "full-name": {
            presence: true,
            length: {
                minimum: 3,
                maximum: 20
            },
            format: {
                // We don't allow anything that a-z and 0-9
                // pattern: "[a-zA-Z]+",
                pattern: "[a-z A-Z ]+",
                message: "can only be letters"
            }
        },
        "email": {
            // Email is required
            presence: true,
            // and must be an email (duh)
            email: true
        },
        "phone": {
            // Phone Number Required
            presence: true,
            format: {
                // We don't allow anything that a-z and 0-9
                pattern: "[0-9]+",
                flags: "i",
                message: "can only be numbers"
            }
        },
        "zip": {
            presence: true,
            length: {
                minimum: 5,
                maximum: 5
            },
            format: {
                // We don't allow anything that a-z and 0-9
                pattern: "[0-9]+",
                flags: "i",
                message: "can only be numbers"
            }
        },
        "company": {
            // Job location is required
            format: {
                // We don't allow anything that a-z and 0-9
                pattern: "[0-9]+",
                flags: "i",
                message: "can only be numbers"
            }
        },

        "message": {

        }

    };

    // Assign field constraints to forms by ID
    var form_fields = {
        'contact-form': fields_for_form_1,
        'header-form': fields_for_form_1
    };


    //All Done

    function enableForm(form) {
        $(form).find('button').attr('disabled', false);
    }

    function disableForm(form) {
        $(form).find('button').attr('disabled', true);
    }

    _.each(document.querySelectorAll("form"), function (form) {
        var fields = form_fields[form.getAttribute('id')];
        form.addEventListener("submit", function (ev) {
            ev.preventDefault();
            handleFormSubmit(form, fields);
        });
        var inputs = form.querySelectorAll("input, textarea, select");
        for (var i = 0; i < inputs.length; ++i) {
            inputs.item(i).addEventListener("change", function (ev) {
                var errors = validate(form, fields) || {};
                if (_.isEmpty(errors)) {
                    enableForm(form)
                } else {
                    disableForm(form)
                }
                showErrorsForInput(this, errors[this.name])
            });
        }
    });

    function handleFormSubmit(form, input) {
        var errors = validate(form, input);
        // then we update the form to reflect the results
        showErrors(form, errors || {});
        if (!errors) {
            showSuccess(form);
        } else {
            disableForm(form);
        }
    }

    // Updates the inputs with the validation errors
    function showErrors(form, errors) {
        // We loop through all the inputs and show the errors for that input
        _.each(form.querySelectorAll("input[name], select[name], textarea[name]"), function (input) {
            // Since the errors can be null if no errors were found we need to handle
            // that
            showErrorsForInput(input, errors && errors[input.name]);
        });
    }

    // Shows the errors for a specific input
    function showErrorsForInput(input, errors) {
        // This is the root of the input
        try {
            var formGroup = closestParent(input.parentNode, "form-group")
                // Find where the error messages will be insert into
                ,
                messages = formGroup.querySelector(".messages");
        } catch (e) {}
        // First we remove any old messages and resets the classes
        resetFormGroup(formGroup);
        // If we have errors
        if (errors) {
            // we first mark the group has having errors
            formGroup.classList.add("has-error");
            // then we append all the errors
            _.each(errors, function (error) {
                addError(messages, error);
            });
        } else {
            // otherwise we simply mark it as success
            formGroup.classList.add("has-success");
        }
    }

    // Recursively finds the closest parent that has the specified class
    function closestParent(child, className) {
        if (!child || child == document) {
            return null;
        }
        if (child.classList.contains(className)) {
            return child;
        } else {
            return closestParent(child.parentNode, className);
        }
    }

    function resetFormGroup(formGroup) {
        try {
            // Remove the success and error classes
            formGroup.classList.remove("has-error");
            formGroup.classList.remove("has-success");
            // and remove any old messages
            _.each(formGroup.querySelectorAll(".help-block.error"), function (el) {
                el.parentNode.removeChild(el);
            });
        } catch (e) {}
    }

    // Adds the specified error with the following markup
    // <p class="help-block error">[message]</p>
    function addError(messages, error) {
        var block = document.createElement("p");
        block.classList.add("help-block");
        block.classList.add("error");
        block.innerText = error;
        messages.appendChild(block);
    }

    function showSuccess(form) {
        var payload = $(form).serialize();
        disableForm(form);
        $.ajax({
            type: "POST",
            // dataType: 'json',
            url: sendMailURL,
            data: payload,
            success: function (data) {
                $(form).html(data);
                // console.log('Success', data)
            },
            error: function (data) {
                alert('Some error occured, please try again.');
                console.error('Error', data)
            }
        });
    }

    $(document).ajaxStart(function () {
        $('.loader').show();
    }).ajaxStop(function () {
        $('.loader').hide();
    });
})();