
window.onscroll = function() {
  menufixedpages();
};
const headerPages = document.getElementById("menuPagesFixed");
const stickyPages = headerPages.offsetTop();
function menufixedpages() {
  if (window.pageYOffset > 90) {
    headerPages.classList.add("stickyPages");
  } else {
    headerPages.classList.remove("stickyPages");
  }
}
