window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js');
require('bootstrap');
var showDropDown = 0;
$(document).ready(function () {
  $(".link").click(function () {
    $(this).addClass("active").siblings().removeClass("active")
  });
});

$(document).ready(function () {
  $(".header__bar").click(function () {
    $('.wrapper_main').toggleClass("show_sidebar");
    $('.wrapper__sidebar').toggleClass("active")
  });
});

$(document).ready(function () {
  $(".header__setting").click(function () {
    $(".header__drop").toggleClass("active")
    showDropDown = 1;
  });
});

$(document).ready(function () {
  window.onclick = function (event) {
    if (!event.target.matches(".header__setting")) {
      var d = document.getElementsByClassName("header__drop");
      for (var i = 0; i < d.length; i++) {
        var x = d[i];
        if (x.classList.contains("active") && showDropDown == 0) {
          x.classList.remove("active");
        }
      }
    }
    showDropDown = 0;
  }
});
//detail-user
var myVar;
$(document).ready(function () {
  $(".card-footer__btn").click(function () {
    $("#alert-save-info").addClass("show");
    myVar = setTimeout(function () { $("#alert-save-info").removeClass("show") }, 2900);
  });
});

$(document).ready(function () {
  $(".close-alert__btn").click(function () {
    $(".alert-success").removeClass("show");
    clearTimeout(myVar)
  });
});
$(document).ready(function () {
  $(".give-point__btn").click(function () {
    $("#alert-give-point").addClass("show");
    myVar = setTimeout(function () { $("#alert-give-point").removeClass("show") }, 2900);
    $("#modal-give-point").modal("hide")
  });
});
$(document).ready(function () {
  $(".sale-support__btn-cancel").click(function () {
    $("#modal-sale-support").modal("hide")
  })
})

$(document).ready(function () {
  $(".sale-support__btn-success").click(function () {
    $("#alert-sale-support").addClass("show");
    myVar = setTimeout(function () { $("#alert-sale-support").removeClass("show") }, 2900);
    $("#modal-sale-support").modal("hide")
  });
});

$(document).ready(function () {
  $(".delete-user__btn-cancel").click(function () {
    $("#modal-delete-user").modal("hide")
  })
});

$(document).ready(function () {
  $(".delete-user__btn-success").click(function () {
    $("#loading-overlay").addClass("show");
    setTimeout(function () { 
      $("#loading-overlay").removeClass("show"); 
      $("#modal-delete-user").modal("hide");
      window.location.href = "/users"
    }, 1000);
  });
});
$(document).ready(function() {
  $(".icon").click(function(e) {
    e.target.parentNode;
    console.log(e.target.parentNode.className)
  }) 
})
//image-identity
$(document).ready(function () {
  $(".btn_accept-image").click(function () {
    $("#alert-accept-image").addClass("show");
    myVar = setTimeout(function () { $("#alert-accept-image").removeClass("show") }, 2900);
  });
  $(".refuse-image__btn-cancel").click(function () {
    $("#modal-refuse-image").modal("hide")
  });
  $(".refuse-image__btn-success").click(function () {
    $("#alert-refuse-image").addClass("show");
    myVar = setTimeout(function () { $("#alert-refuse-image").removeClass("show") }, 2900);
    $("#modal-refuse-image").modal("hide")
  })
});
