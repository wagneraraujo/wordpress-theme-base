window.onscroll = function() {
  menuFixed();
};
const header = document.getElementById("menufixed");
const sticky = header.offsetTop();
function menuFixed() {
  if (window.pageYOffset > 90) {
    header.classList.add("stickyHome");
  } else {
    header.classList.remove("stickyHome");
  }
}

