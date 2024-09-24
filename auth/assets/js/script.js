// Loader
window.addEventListener("load", function () {
    const loadingDots = document.getElementById("loadingDots");
    loadingDots.classList.add("hidden");
});



// Navbar transition
window.addEventListener("scroll", function () {
    var navbar = document.querySelector("body nav.navbar");
    if (window.scrollY > 0) {
        navbar.style.background = "#292929ff";
    } else {
        navbar.style.background = "transparent";
    }
});