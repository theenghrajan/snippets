/*
All Input Constraints are based on name attribute and Form is identified by form's id attribute

Add validators for the fields you want to validate. You don't have to add all the fields.
Also don't add fields that are not present in the form

 */


var field_for_form_one = {
    "users-first-or-last-name": {
        // You need to pick a username too
        presence: true,
        // And it must be between 3 and 20 characters long
        length: {
            minimum: 3,
            maximum: 200
        },
        format: {
            // We don't allow anything that a-z and 0-9
            pattern: "[a-z A-Z]+",
            // but we don't care if the username is uppercase or lowercase
            flags: "i",
            message: "can only contain a-z letters"
        }
    },
    "message-or-any-non-critical-inpu-or-text-fields": {
        // You need to pick a username too
        presence: true,
        // And it must be between 3 and 20 characters long
        length: {
            minimum: 3,
        },
    },
    "email": {
        // Email is required
        presence: true,
        // and must be an email (duh)
        email: true
    },
    "password": {
        // Password is also required
        presence: true,
        // And must be at least 5 characters long
        length: {
            minimum: 5
        }
    },
    "confirm-password": {
        // You need to confirm your password
        presence: true,
        // and it needs to be equal to the other password
        equality: {
            attribute: "password",
            message: "^The passwords does not match"
        }
    },


    "date-age-vaidation": {
        // The user needs to give a birthday
        presence: true,
        // and must be born at least 18 years ago
        date: {
            latest: moment().subtract(18, "years"),
            message: "^You must be at least 18 years old to use this service"
        }
    },

    "zip-codes": {
        presence: true,
        // Zip is optional but if specified it must be a 5 digit long number
        format: {
            pattern: "\\d{5}"
        }
    },
    "number-inputs": {
        presence: true,
        // Number input has to be an integer >= 0
        numericality: {
            onlyInteger: true,
            greaterThanOrEqualTo: 0
        }
    }
};