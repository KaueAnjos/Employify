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

