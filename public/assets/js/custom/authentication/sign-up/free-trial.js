"use strict";
var KTSignupFreeTrial = (function () {
    var e,
        t,
        r,
        a,
        i = function () {
            return a.getScore() > 50;
        };
    return {
        init: function () {
            (e = document.querySelector("#fab_free_trial_form")),
                (t = document.querySelector("#fab_free_trial_submit")),
                (a = KTPasswordMeter.getInstance(
                    e.querySelector('[data-kt-password-meter="true"]')
                )),
                (r = FormValidation.formValidation(e, {
                    fields: {
                        email: {
                            validators: {
                                regexp: {
                                    regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                    message:
                                        "The value is not a valid email address",
                                },
                                notEmpty: {
                                    message: "Email address is required",
                                },
                            },
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: "The password is required",
                                },
                                callback: {
                                    message: "Please enter valid password",
                                    callback: function (e) {
                                        if (e.value.length > 0) return i();
                                    },
                                },
                            },
                        },
                        "confirm-password": {
                            validators: {
                                notEmpty: {
                                    message:
                                        "The password confirmation is required",
                                },
                                identical: {
                                    compare: function () {
                                        return e.querySelector(
                                            '[name="password"]'
                                        ).value;
                                    },
                                    message:
                                        "The password and its confirm are not the same",
                                },
                            },
                        },
                        toc: {
                            validators: {
                                notEmpty: {
                                    message:
                                        "You must accept the terms and conditions",
                                },
                            },
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger({
                            event: { password: !1 },
                        }),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: "",
                        }),
                    },
                })),
                t.addEventListener("click", function (i) {
                    i.preventDefault(),
                        r.revalidateField("password"),
                        r.validate().then(function (r) {
                            "Valid" == r
                                ? (t.setAttribute("data-kt-indicator", "on"),
                                  (t.disabled = !0),
                                  setTimeout(function () {
                                      t.removeAttribute("data-kt-indicator"),
                                          (t.disabled = !1),
                                          Swal.fire({
                                              text: "You have successfully registered!",
                                              icon: "success",
                                              buttonsStyling: !1,
                                              confirmButtonText: "D'accord!",
                                              customClass: {
                                                  confirmButton:
                                                      "btn btn-primary",
                                              },
                                          }).then(function (t) {
                                              if (t.isConfirmed) {
                                                  e.reset(), a.reset();
                                                  var r = e.getAttribute(
                                                      "data-kt-redirect-url"
                                                  );
                                                  r && (location.href = r);
                                              }
                                          });
                                  }, 1500))
                                : Swal.fire({
                                      text: "Désolé, il semble que des erreurs aient été détectées, veuillez réessayer.",
                                      icon: "error",
                                      buttonsStyling: !1,
                                      confirmButtonText: "D'accord!",
                                      customClass: {
                                          confirmButton: "btn btn-primary",
                                      },
                                  });
                        });
                }),
                e
                    .querySelector('input[name="password"]')
                    .addEventListener("input", function () {
                        this.value.length > 0 &&
                            r.updateFieldStatus("password", "NotValidated");
                    });
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTSignupFreeTrial.init();
});
