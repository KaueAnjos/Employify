document.querySelectorAll('.dropdown-menu').forEach((dropdown) => {
    dropdown.addEventListener('click', function (event) {
        event.stopPropagation();
    });
});


// Reset page onclick logo
function resetPage() {
    document.addEventListener('click', () => {
        location.reload()
    })
}

// Loader
window.addEventListener("load", function () {
    const loadingDots = document.getElementById("loadingDots");
    loadingDots.classList.add("hidden");
});


// Navbar Transition

window.addEventListener("scroll", function () {
    var header = document.querySelector("body nav");
    if (window.scrollY > 0) {
        header.style.background = "radial-gradient(circle, rgba(9,31,47,1) 0%, rgba(9,31,47,1) 66%, rgba(17,58,83,1) 100%)";
        header.style.boxShadow = "rgba(0, 0, 0, 0.35) 0px 5px 15px";
    } else {
        header.style.background = "transparent";
        header.style.boxShadow = "none";
    }
});

// Side Menu
const sideMenuBtn = document.querySelector('.side-menu-btn');
const sideMenu = document.querySelector('.side-menu');

let isMenuOpen = false;

sideMenuBtn.addEventListener('click', () => {
  if (isMenuOpen) {
    sideMenu.style.transform = 'translateX(250px)';
    sideMenuBtn.style.transform = 'translateY(-50%)';
    sideMenuBtn.querySelector('i').classList.replace('fa-chevron-right', 'fa-chevron-left');
  } else {
    sideMenu.style.transform = 'translateX(-250px)';
    sideMenuBtn.style.transform = 'translate(250px, -50%)';
    sideMenuBtn.querySelector('i').classList.replace('fa-chevron-left', 'fa-chevron-right');
  }
  isMenuOpen = !isMenuOpen;
});





