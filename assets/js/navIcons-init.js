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
