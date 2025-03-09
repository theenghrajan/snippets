/*
* This is old SmartSites patterns.
*/
var ss;
(function ($) {
  ss = {
    init: function () {
      this.nav();
      this.form();
      this.misc();
      this.slider();
      this.gallery();
      this.faqTab();
      this.updatemeta();
    },
    ie: function () {
      try {
        if (/MSIE (\d+\.\d+);/.test(navigator.userAgent) || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
          $('body').addClass('ie-user');
          return true;
        }
      } catch (err) {
        console.log(err);
      }
      return false;
    },
    nav: function () {
      // Navigation initialization logic
    },
    form: function () {
      try {
        $('.input-text.qty').each(function () {
          var elm = $(this);
          $('<span class="qty-des"><i class="icon-angle-left"></i></span>').insertBefore($(this));
          $('<span class="qty-ins"><i class="icon-angle-right"></i></span>').insertAfter($(this));
          elm.prev('.qty-des').on('click', function () {
            var val = parseInt(elm.val());
            if (val > 1) {
              elm.val(val - 1);
            }
          });
          elm.next('.qty-ins').on('click', function () {
            var val = parseInt(elm.val());
            elm.val(val + 1);
          });
        });
      } catch (err) {
        console.log(err);
      }
    },
    misc: function () {
      try {
        // Misc initialization logic
      } catch (err) {
        console.log(err);
      }
    },
    slider: function () {
      // Slider initialization logic
    },
    gallery: function () {
      try {
        // Gallery initialization logic
      } catch (err) {
        console.log(err);
      }
    },
    updatemeta: function () {
      $(".updated-msg").hide();
      $('.onsitecontactpopup').click(function () {
        var itemId = $(this).attr('dataid');
        var contactname = $("input[name=contactname" + itemId + "]").val();
        var contactemail = $("input[name=contactemail" + itemId + "]").val();
        var contactphone = $("input[name=contactphone" + itemId + "]").val();
        var tsbeSecurity = tsbstore_ajaxurl.ajax_nonce;
        $.ajax({
          url: tsbstore_ajaxurl.ajax_url,
          type: "POST",
          dataType: "HTML",
          data: {
            action: "custommetaupdate",
            contactname: contactname,
            contactemail: contactemail,
            contactphone: contactphone,
            itemId: itemId,
            security: tsbeSecurity,
          },
          success: function (data) {
            console.log("sucess");
            $(".updated-msg").show();
            setTimeout(function () {
              location.reload();
            }, 2000);
          }
        });
      });
    }
  };
  $(function () {
    ss.init();
  });
})(jQuery);