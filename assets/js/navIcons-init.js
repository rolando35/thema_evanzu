const nav = document.getElementById("nav-iconos");
if (nav) {
  nav.addEventListener("click", function (e) {
    if (e.target.tagName === "A") {
      activeCircle(this, e.target);
    } else if (e.target.tagName === "IMG") {
      activeCircle(this, e.target.parentElement.parentElement);
    } else if (e.target.classList.contains("title-circle-nav")) {
      activeCircle(this, e.target.parentElement);
    } else if (e.target.classList.contains("circle-nav")) {
      activeCircle(this, e.target.parentElement);
    } else if (e.target.classList.contains("line-nav")) {
      activeCircle(this, e.target.parentElement);
    }
  });
  function activeCircle(parent, element) {
    if (!element.classList.contains("bg-red")) {
      const circles = parent.querySelectorAll(".circle-nav");
      circles.forEach(function (circle) {
        if (circle.classList.contains("bg-red")) {
          circle.nextElementSibling.nextElementSibling.classList.remove(
            "title-circle-nav-active"
          );
          circle.nextElementSibling.classList.remove("bg-red");
          circle.classList.remove("bg-red");
        }
      });
      element.children[0].classList.add("bg-red");
      element.children[1].classList.add("bg-red");
      element.children[2].classList.add("title-circle-nav-active");
    }
  }
}

function ButtonRedirectForm() {
  try {
    let linkCircle = document.querySelector(".link-circle.active");
    let ref = linkCircle.href.split("#")[1];
    document.getElementById(ref + "Website").focus();
  } catch (error) {
    console.log(error);
  }
}

(function ($) {
  $.fn.stickyTabs = function (options) {
    var context = this;

    var settings = $.extend(
      {
        getHashCallback: function (hash, btn) {
          return hash;
        },
        selectorAttribute: "href",
        backToTop: false,
        initialTab: $("li.active > a", context),
      },
      options
    );

    var showTabFromHash = function () {
      var hash =
        settings.selectorAttribute == "href"
          ? window.location.hash
          : window.location.hash.substring(1);
      if (hash != "") {
        $(".circle-nav").removeClass("bg-red");
        $(".line-nav").removeClass("bg-red");
        $(".title-circle-nav").removeClass("title-circle-nav-active");
        var selector = hash
          ? "a[" + settings.selectorAttribute + '="' + hash + '"]'
          : settings.initialTab;
        $(selector, context).tab("show");
        $(".active .circle-nav").addClass("bg-red");
        $(".active .line-nav").addClass("bg-red");
        $(".active .title-circle-nav").addClass("title-circle-nav-active");
        setTimeout(backToTop, 1);
      }
    };

    var changeHash = function (hash) {
      if (history && history.pushState) {
        history.pushState(
          null,
          null,
          window.location.pathname + window.location.search + "#" + hash
        );
      } else {
        scrollV = document.body.scrollTop;
        scrollH = document.body.scrollLeft;
        window.location.hash = hash;
        document.body.scrollTop = scrollV;
        document.body.scrollLeft = scrollH;
      }
    };

    var backToTop = function () {
      if (settings.backToTop === true) {
        window.scrollTo(0, 0);
      }
    };

    showTabFromHash();
    $(window).on("hashchange", showTabFromHash);
    $("a", context).on("click", function (e) {
      var hash = this.href.split("#")[1];
      if (typeof hash != "undefined" && hash != "") {
        var adjustedhash = settings.getHashCallback(hash, this);
        changeHash(adjustedhash);
        setTimeout(backToTop, 1);
      }
    });

    return this;
  };
})(jQuery);
