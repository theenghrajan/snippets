// var $recaptchaV2SiteKey = '6Lcz0s4UAAAAAAUeszI6pjSO9aW8ZZwODz73VxzQ';
var $recaptchaV2SiteKey = '6LcLlBMqAAAAAMsZ2a9VlFGNsHrhaYo1PuKnwFZT';
var sendMailURL = 'mailer/index.php';
var form_fields = [];
var sections = [];
form_fields['form-id-0'] = {
  "full-name": {
    "presence": !0
  },
  "email": {
    "presence": !0,
    "email": !0
  },
  "phone": {
    "presence": !0,
    "format": {
      "pattern": /^(?:\+1\s?)?(\(?\d{3}\)?[\s.-]?)?\d{3}[\s.-]?\d{4}$/,
      "flags": "gi",
      "message": "can only be a valid phone number."
    }
  },
 "message": {
    "presence": !0,
    "format": {
      "pattern": /^[~`!@#$%^&*()_+=[\]\{}|;':",.\/<>? a-zA-Z0-9-]+$/,
      "flags": "gi",
      "message": "can only be english language."
    }
  },
  "g-recaptcha-response": {
    "presence": {
      "message": "must be validated"
    }
  },
  "google-recaptcha": {
    "presence": {
      "message": "must be validated"
    }
  }
};
form_fields['form-id-1'] = {
  "full-name": {
    "presence": !0
  },
  "email": {
    "presence": !0,
    "email": !0
  },
  "phone": {
    "presence": !0,
    "format": {
      "pattern": /^(?:\+1\s?)?(\(?\d{3}\)?[\s.-]?)?\d{3}[\s.-]?\d{4}$/,
      "flags": "gi",
      "message": "can only be a valid phone number."
    }
  },
  "message": {
    "presence": !0,
    "format": {
      "pattern": /^[~`!@#$%^&*()_+=[\]\{}|;':",.\/<>? a-zA-Z0-9-]+$/,
      "flags": "gi",
      "message": "can only be english language."
    }
  },
  "g-recaptcha-response": {
    "presence": {
      "message": "must be validated"
    }
  },
  "google-recaptcha": {
    "presence": {
      "message": "must be validated"
    }
  }
};
form_fields['form-id-2'] = {
  "first-name": {
    "presence": !0
  },
  "last-name": {
    "presence": !0
  },
  "phone": {
    "presence": !0,
    "format": {
      "pattern": /^(?:\+1\s?)?(\(?\d{3}\)?[\s.-]?)?\d{3}[\s.-]?\d{4}$/,
      "flags": "gi",
      "message": "can only be a valid phone number."
    }
  },
  "email": {
    "presence": !0,
    "email": !0
  },
  "message": {
    "presence": !0,
    "format": {
      "pattern": /^[~`!@#$%^&*()_+=[\]\{}|;':",.\/<>? a-zA-Z0-9-]+$/,
      "flags": "gi",
      "message": "can only be english language."
    }
  },
  "g-recaptcha-response": {
    "presence": {
      "message": "must be validated"
    }
  },
  "google-recaptcha": {
    "presence": {
      "message": "must be validated"
    }
  }
};


(function () {
  validate.validators.file_max_size = function (value, option, key, attributes) {
    let message = [];
    _.each(document.querySelector('input[name="' + key + '"]').files, function (file) {
      if (file.size > option) {
        message.push(file.name + ' is larger than the allowed size of ' + option)
      }
    });
    return message
  };
  validate.validators.allowed_ext = function (value, options, key, attributes) {
    let message = [];
    _.each(document.querySelector('input[name="' + key + '"]').files, function (file) {
      let explode = file.name.split('.');
      if (explode.length > 1) {
        let ext = typeof (explode[explode.length - 1]) === 'undefined' ? null : explode[explode.length - 1]
      } else {
        message.push(file.name + ' is no allowed file type ')
      }
    });
    return message
  };

  function enableForm(form) {
    $(form).find('button').attr('disabled', !1)
  }

  function disableForm(form) {
    $(form).find('button.submitButton').attr('disabled', !0)
  }

  function showLoader(form) {
    $(form).find('.loader').show()
  }
  _.each(document.querySelectorAll("form.validate"), function (form) {
    var fields = form_fields[form.getAttribute('id')];
    form.addEventListener("submit", function (ev) {
      ev.preventDefault();
      handleFormSubmit(form, fields)
    });
    var inputs = form.querySelectorAll("input, textarea, select");
    for (var i = 0; i < inputs.length; ++i) {
      inputs.item(i).addEventListener("change", function (ev) {
        handleEvent(this, form, fields)
      });
      inputs.item(i).addEventListener("keyup", function (ev) {
        handleEvent(this, form, fields)
      })
    }
    if (sections[form.id]) {
      var next = form.querySelector('.next');
      next.addEventListener('click', function (ev) {
        var errors = validate(form, fields) || {};
        nextSection(form, errors)
      })
    }
  });

  function handleEvent(elm, form, fields) {
    var errors = validate(form, fields) || {};
    if (_.isEmpty(errors)) {
      enableForm(form)
    } else {
      disableForm(form)
    }
    showErrorsForInput(elm, errors[elm.name])
  }

  function handleFormSubmit(form, input) {
    var errors = validate(form, input);
    showErrors(form, errors || {});
    if (!errors) {
      showSuccess(form)
    } else {
      disableForm(form)
    }
  }

  function showErrors(form, errors) {
    _.each(form.querySelectorAll("input[name], select[name], textarea[name]"), function (input) {
      showErrorsForInput(input, errors && errors[input.name])
    })
  }

  function showErrorsForInput(input, errors) {
    try {
      var formGroup = closestParent(input.parentNode, "form-group"),
        messages = formGroup.querySelector(".messages")
    } catch (e) { }
    resetFormGroup(formGroup);
    if (errors) {
      formGroup.classList.add("has-error");
      _.each(errors, function (error) {
        addError(messages, error)
      })
    } else {
      formGroup.classList.add("has-success")
    }
  }

  function closestParent(child, className) {
    if (!child || child == document) {
      return null
    }
    if (child.classList.contains(className)) {
      return child
    } else {
      return closestParent(child.parentNode, className)
    }
  }

  function resetFormGroup(formGroup) {
    try {
      formGroup.classList.remove("has-error");
      formGroup.classList.remove("has-success");
      _.each(formGroup.querySelectorAll(".help-block.error"), function (el) {
        el.parentNode.removeChild(el)
      })
    } catch (e) { }
  }

  function addError(messages, error) {
    var block = document.createElement("p");
    block.classList.add("help-block");
    block.classList.add("error");
    block.innerText = error;
    messages.appendChild(block)
  }

  function showSuccess(form) {
    var payload = $(form).serialize();
    disableForm(form);
    showLoader(form);
    $.ajax({
      type: "POST",
      url: sendMailURL,
      data: payload,
      success: function (data) {
        $(form).html(data)
      },
      error: function (data) {
        alert('Some error occured, please try again.');
        console.error('Error', data)
      }
    })
  }
  var currentPage = [];
  var currentForm = null;

  function nextSection(form, errors) {
    var current = currentPage[form.id];
    var next = null;
    var currentErrors = 0;
    if (!current) {
      current = currentPage[form.id] = 0
    }
    sections[form.id][current].map(function (a) {
      if (errors[a]) {
        currentErrors++
      }
    });
    if (currentErrors) {
      _.each(form.querySelectorAll("input[name]:not([type='hidden']), select[name], textarea[name]"), function (input) {
        if (sections[form.id][current].indexOf(input.name) >= 0)
          showErrorsForInput(input, errors && errors[input.name])
      })
    } else {
      var nextSection = $(form).find('.form-section-' + (current + 1));
      var nextSection1 = $(form).find('.form-section-' + (current + 2));
      if (nextSection.length) {
        $(form).find('.form-section-' + current).hide();
        nextSection.show("slide", {
          direction: "right"
        }, 800)
      }
      if ((nextSection1.length === 0) && $.isEmptyObject(errors)) {
        $(form).find('button.submitButton').show("slow");
        $(form).find('button.next').hide()
      }
      currentPage[form.id]++
    }
  }
})();

function changeInputAndTriggerChange(input, val) {
  input.val(val);
  setTimeout(function () {
    triggerChange(input[0])
  }, 100)
}

function triggerChange(input) {
  if (typeof window.xTriggerChange === 'undefined' || window.xTriggerChange === 0) {
    window.xTriggerChange = 1;
    input.dispatchEvent(new Event('change'))
  }
  window.xTriggerChange = 0;
  return !1
}

function triggerChangeObject(obj) {
  triggerChange(obj.target);
  obj.preventDefault()
}
var onReCaptchaLoadCallback = function () {
  $(function () {
    $('.g-recaptcha-v2-visible').each(function (i, elm) {
      grecaptcha.render(elm.id, {
        'sitekey': $recaptchaV2SiteKey,
        'callback': function (res) {
          changeInputAndTriggerChange($('#input-' + elm.id), res)
        },
        'theme': 'light'
      })
    })
  })
};