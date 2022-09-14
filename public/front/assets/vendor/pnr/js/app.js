"use strict";

/**
 * define property polyfill for ie 11
 */
function _defineProperty(obj, key, value) {
  if (key in obj) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
  } else {
    obj[key] = value;
  }
  return obj;
}

var app = {};
$(function () {
  /**
   * initialize messages:
   */
  app.initializeMessages = function (s) {
    app.pnrMessages = s;
  };

  /**
   * initialize all tooltips by their data-toggle attribute:
   */
  app.tooltipInit = function () {
    $('[data-toggle="tooltip"]').tooltip({
      trigger: "hover"
    });
  };

  /**
   * initialize the mask function
   */
  app.maskedInput = function () {
    $("#inputMobilePhone").mask("(999) 999-9999");
  };

  /**
   * initialize the unmask function
   */
  app.unMaskedInput = function () {
    $("#inputMobilePhone").unmask();
  };

  /**
   * initialize method of switching between steps.
   */
  app.stepperInit = function () {
    /**
     * Array.from polyfill for ie 11
     */
    if (!Array.from) {
      Array.from = (function () {
        var toStr = Object.prototype.toString;
        var isCallable = function (fn) {
          return typeof fn === 'function' || toStr.call(fn)
              === '[object Function]';
        };
        var toInteger = function (value) {
          var number = Number(value);
          if (isNaN(number)) {
            return 0;
          }
          if (number === 0 || !isFinite(number)) {
            return number;
          }
          return (number > 0 ? 1 : -1) * Math.floor(Math.abs(number));
        };
        var maxSafeInteger = Math.pow(2, 53) - 1;
        var toLength = function (value) {
          var len = toInteger(value);
          return Math.min(Math.max(len, 0), maxSafeInteger);
        };

        // The length property of the from method is 1.
        return function from(arrayLike /*, mapFn, thisArg */) {
          // 1. Let C be the this value.
          var C = this;

          // 2. Let items be ToObject(arrayLike).
          var items = Object(arrayLike);

          // 3. ReturnIfAbrupt(items).
          if (arrayLike == null) {
            throw new TypeError(
                "Array.from requires an array-like object - not null or undefined");
          }

          // 4. If mapfn is undefined, then let mapping be false.
          var mapFn = arguments.length > 1 ? arguments[1] : void undefined;
          var T;
          if (typeof mapFn !== 'undefined') {
            // 5. else
            // 5. a If IsCallable(mapfn) is false, throw a TypeError exception.
            if (!isCallable(mapFn)) {
              throw new TypeError(
                  'Array.from: when provided, the second argument must be a function');
            }

            // 5. b. If thisArg was supplied, let T be thisArg; else let T be undefined.
            if (arguments.length > 2) {
              T = arguments[2];
            }
          }

          // 10. Let lenValue be Get(items, "length").
          // 11. Let len be ToLength(lenValue).
          var len = toLength(items.length);

          // 13. If IsConstructor(C) is true, then
          // 13. a. Let A be the result of calling the [[Construct]] internal method
          // of C with an argument list containing the single item len.
          // 14. a. Else, Let A be ArrayCreate(len).
          var A = isCallable(C) ? Object(new C(len)) : new Array(len);

          // 16. Let k be 0.
          var k = 0;
          // 17. Repeat, while k < len… (also steps a - h)
          var kValue;
          while (k < len) {
            kValue = items[k];
            if (mapFn) {
              A[k] = typeof T === 'undefined' ? mapFn(kValue, k) : mapFn.call(T,
                  kValue, k);
            } else {
              A[k] = kValue;
            }
            k += 1;
          }
          // 18. Let putStatus be Put(A, "length", len, true).
          A.length = len;
          // 20. Return A.
          return A;
        };
      }());
    }

    var pnrEntryButton = document.querySelector('button#pnrEntryButton');
    var pnrDetailButton = document.querySelector('button#pnrDetailButton');

    if ((pnrEntryButton !== undefined) && (pnrEntryButton !== null)) {
      pnrEntryButton.addEventListener("click", function (e) {
        e.preventDefault();
        pnrEntryClickHandler();
      });
    }

    if ((pnrDetailButton !== undefined) && (pnrDetailButton !== null)) {
      pnrDetailButton.addEventListener("click", function (e) {
        e.preventDefault();
        pnrDetailClickHandler();
      });
    }

    function pnrEntryClickHandler() {
      var resultCheckValForm = app.checkValidityForm();
      if (!resultCheckValForm) {
        return;
      } else {
        $("#pnrCodeForm").submit();
      }
    }

    function pnrDetailClickHandler() {
      $("#pnrDetailForm").submit();
    }

    /* stepper - end of block */
  };

  app.startCountdownTimer = function startCountdownTimer(expireDuration) {
    var duration = expireDuration,
        displayMin = $('.countdownTimerMin'),
        displaySec = $('.countdownTimerSec');
    startTimer(duration, displayMin, displaySec);

    function startTimer(duration, displayMin, displaySec) {
      var timer = duration,
          minutes,
          seconds;
      var timeValue = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);
        seconds = seconds < 10 ? "0" + seconds : seconds;
        minutes !== 0 && displayMin.text(minutes);
        minutes === 0 && displayMin.parent().css("display", "none");
        displaySec.text(seconds);

        if (--timer < 0) {
          clearInterval(timeValue);
          callBackFinishedTimer();
        }
      }, 1000);
    }

    /**
     *
     * If the transaction is not completed within the specified time in the second step.
     *
     */
    function callBackFinishedTimer() {
      alert(app.pnrMessages.redirectMessage);
      location.href = 'timeout';
    }

  }

  /**
   * initialize method of form validation in the first step.
   */
  app.checkValidityForm = function checkValidityForm() {
    var validForm = true;
    var validator = $("#pnrCodeForm").validate({
      rules: {
        inputMobilePhone: {
          required: true,
          minlength: $("#countryCode").val() !== 90 ? 1 : 10,
          maxlength: 15
        },
        inputPNRCode: {
          required: true,
          minlength: 8,
          maxlength: 8
        }
      },
      messages: {
        inputMobilePhone: {
          required: app.pnrMessages.required,
          minlength: app.pnrMessages.phoneMin,
          maxlength: app.pnrMessages.phoneMax
        },
        inputPNRCode: _defineProperty({
          required: app.pnrMessages.required,
          minlength: app.pnrMessages.pnrSize
        }, "minlength", app.pnrMessages.pnrSize)
      },
      highlight: function highlight(input) {
        $(input).addClass('form-control__error');
      },
      errorPlacement: function errorPlacement(error, element) {
      }
    });

    if (!$("#pnrCodeForm").valid()) {
      var submitErrorsList = new Object();

      for (var i = 0; i < validator.errorList.length; i++) {
        submitErrorsList[validator.errorList[i].element.name] = validator.errorList[i].message;
      }

      if (submitErrorsList.inputPNRCode) {
        $(".pnrCodeCheck__error").text(submitErrorsList.inputPNRCode);
        $("#inputPNRCode").parent().find('.input__information').removeClass(
            "input__information--softGreen").addClass(
            "input__information--alert");
        $("#inputPNRCode").parent().parent().parent().find(
            '.input__information--danger').removeClass("d-none").addClass(
            "d-block");
        setTimeout(function () {
          $("#inputPNRCode").parent().find('.input__information').removeClass(
              "input__information--alert").addClass(
              "input__information--softGreen");
          $("#inputPNRCode").parent().parent().parent().find(
              '.input__information--danger').removeClass("d-block").addClass(
              "d-none");
          $(".pnrCodeCheck__error").text("Hatalı bir PNR kodu girdiniz. ");
        }, 7000);
      }

      if (!submitErrorsList.inputPNRCode && submitErrorsList.inputMobilePhone) {
        $(".pnrCodeCheck__error").text(submitErrorsList.inputMobilePhone);
        $("#inputPNRCode").parent().find('.input__information').removeClass(
            "input__information--softGreen").addClass(
            "input__information--alert");
        $("#inputPNRCode").parent().parent().parent().find(
            '.input__information--danger').removeClass("d-none").addClass(
            "d-block");
        setTimeout(function () {
          $("#inputPNRCode").parent().find('.input__information').removeClass(
              "input__information--alert").addClass(
              "input__information--softGreen");
          $("#inputPNRCode").parent().parent().parent().find(
              '.input__information--danger').removeClass("d-block").addClass(
              "d-none");
          $(".pnrCodeCheck__error").text("Hatalı bir PNR kodu girdiniz. ");
        }, 7000);
      }

      validForm = false;
    }

    return validForm;
  };

  /**
   * initialize method of custom dropdown ( phone area code ) in the first step.
   */
  app.flagPicker = function () {
    $(document).on('click', '.btn-select', function (e) {
      e.preventDefault();
      var ul = $(this).find("ul");

      if ($(this).hasClass("active")) {
        if (ul.find("li").is(e.target)) {
          var target = $(e.target);
          var countryCode = target.data("countrycode");
          target.addClass("selected").siblings().removeClass(
              "selected");
          var value = target.html();
          $(this).find(".btn-select-input").val(value);
          $(this).find(".btn-select-value").html(value);
          $(this).find(".btn-select-value").prev().val(countryCode);
          $(this).find(".btn-select-value").prev().html(
              countryCode);

          if (countryCode !== 90) {
            $("#inputMobilePhone").attr("maxlength", 15);
            app.unMaskedInput();
          } else {
            $("#inputMobilePhone").attr("maxlength", 14);
            app.maskedInput();
          }
        }

        ul.hide();
        $(this).removeClass("active");
      } else {
        $('.btn-select').not(this).each(function () {
          $(this).removeClass("active").find("ul").hide();
        });
        ul.slideDown(300);
        $(this).addClass("active");
      }
    });
    $(document).on('click', function (e) {
      var target = $(e.target).closest(".btn-select");

      if (!target.length) {
        $(".btn-select").removeClass("active").find("ul").hide();
      }
    });
    $(".btn-select").each(function (e) {
      var value = $(this).find("ul li.selected").data(
          "countryCode");

      if (value != undefined) {
        $(this).find(".btn-select-input").val(value);
        $(this).find(".btn-select-value").html(value);
      }
    });
    /* flag picker - end of block */
  };

  /**
   * the methods we want to run at the beginning.
   */
  app.flagPicker();
  app.tooltipInit();
  app.maskedInput();
  app.stepperInit();
})
;
