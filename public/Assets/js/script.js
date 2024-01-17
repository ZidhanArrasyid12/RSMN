const navbar = document.getElementsByTagName("nav")[0];
window.addEventListener("scroll", function () {
    console.log(window.scrollY);
    if (window.scrollY > 1) {
        navbar.classList.add("nav-color", "shadow-sm");
    } else if (this.window.scrollY <= 0) {
        navbar.classList.replace("shadow-sm", "nav-color");
    }
});

var btn = document.getElementById("btn");

function leftClick() {
    btn.style.left = "0";
}

function rightClick() {
    btn.style.left = "110px";
}

function toggleContent(contentId) {
    // Semua elemen content dinonaktifkan
    var contents = document.querySelectorAll(".content");
    contents.forEach(function (content) {
        content.classList.remove("active");
    });

    // Hanya elemen dengan contentId yang diaktifkan
    var activeContent = document.getElementById(contentId);
    if (activeContent) {
        activeContent.classList.add("active");
    }
}
