window.onscroll = function() {
  menuFixed();
  menufixedpages();
};
const header = document.getElementById("menufixed");
const headerPages = document.getElementById("menuPagesFixed");
const sticky = header.offsetTop();
function menuFixed() {
  if (window.pageYOffset > 90) {
    header.classList.add("stickyHome");
  } else {
    header.classList.remove("stickyHome");
  }
}

function menufixedpages() {
  if (window.pageYOffset > 90) {
    headerPages.classList.add("stickyPages");
  } else {
    headerPages.classList.remove("stickyPages");
  }
}
