var $recaptchaV2SiteKey = '6Lcz0s4UAAAAAAUeszI6pjSO9aW8ZZwODz73VxzQ';
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
      // "pattern": "^[\\+]?[(]?[0-9]{3}[)]?[-\\s\\.]?[0-9]{3}[-\\s\\.]?[0-9]{4,6}$", // Default
      "pattern": /^(?:\+1\s?)?(\(?\d{3}\)?[\s.-]?)?\d{3}[\s.-]?\d{4}$/, // Valid US phone number only
      "flags": "gi",
      "message": "can only be a valid phone number."
    }
  },
  "event-date": {
    "presence": !0
  },
  "message": [],
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
    document.querySelectorAll('input[name="' + key + '"]').forEach(function (input) {
      Array.from(input.files).forEach(function (file) {
        if (file.size > option) {
          message.push(file.name + ' is larger than the allowed size of ' + option)
        }
      })
    });
    return message
  };
  validate.validators.allowed_ext = function (value, options, key, attributes) {
    let message = [];
    document.querySelectorAll('input[name="' + key + '"]').forEach(function (input) {
      Array.from(input.files).forEach(function (file) {
        let explode = file.name.split('.');
        if (explode.length > 1) {
          let ext = typeof (explode[explode.length - 1]) === 'undefined' ? null : explode[explode.length - 1]
        } else {
          message.push(file.name + ' is no allowed file type ')
        }
      })
    });
    return message
  };

  function enableForm(form) {
    form.querySelectorAll('button').forEach(item => {
      item.removeAttribute('disabled')
    })
  }

  function disableForm(form) {
    form.querySelector('button.submitButton').setAttribute('disabled', 'true')
  }

  function showLoader(form) {
    form.querySelector('.loader').style.display = 'block'
  }
  document.querySelectorAll("form.validate").forEach(function (form) {
    var fields = form_fields[form.getAttribute('id')];
    form.addEventListener("submit", function (ev) {
      ev.preventDefault();
      handleFormSubmit(form, fields)
    });
    var inputs = form.querySelectorAll("input, textarea, select");
    inputs.forEach(function (input) {
      input.addEventListener("change", function (ev) {
        handleEvent(this, form, fields)
      });
      input.addEventListener("keyup", function (ev) {
        handleEvent(this, form, fields)
      })
    });
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
    if (Object.keys(errors).length === 0) {
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
    form.querySelectorAll("input[name], select[name], textarea[name]").forEach(function (input) {
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
      errors.forEach(function (error) {
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
      formGroup.querySelectorAll(".help-block.error").forEach(function (el) {
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
    var payload = new FormData(form);
    disableForm(form);
    showLoader(form);
    fetch(sendMailURL, {
      method: 'POST',
      body: payload
    }).then(function (response) {
      return response.text()
    }).then(function (data) {
      form.innerHTML = data
    }).catch(function (error) {
      alert('Some error occured, please try again.');
      console.error('Error', error)
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
      form.querySelectorAll("input[name]:not([type='hidden']), select[name], textarea[name]").forEach(function (input) {
        if (sections[form.id][current].indexOf(input.name) >= 0) {
          showErrorsForInput(input, errors && errors[input.name])
        }
      })
    } else {
      var nextSection = form.querySelector('.form-section-' + (current + 1));
      var nextSection1 = form.querySelector('.form-section-' + (current + 2));
      if (nextSection) {
        form.querySelector('.form-section-' + current).style.display = 'none';
        nextSection.style.display = 'block'
      }
      if ((!nextSection1)) {
        form.querySelector('button.submitButton').style.display = 'block';
        form.querySelector('button.next').style.display = 'none'
      }
      currentPage[form.id]++
    }
  }
})();

function changeInputAndTriggerChange(input, val) {
  input.value = val;
  setTimeout(function () {
    triggerChange(input)
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
  document.querySelectorAll('.g-recaptcha-v2-visible').forEach(function (elm) {
    grecaptcha.render(elm.id, {
      'sitekey': $recaptchaV2SiteKey,
      'callback': function (res) {
        changeInputAndTriggerChange(document.querySelector('#input-' + elm.id), res)
      },
      'theme': 'light'
    })
  })
};
document.querySelectorAll('.advanced-select2').forEach(function (elm) {
  elm.addEventListener('change', function (el) {
    triggerChangeObject(el)
  })
})