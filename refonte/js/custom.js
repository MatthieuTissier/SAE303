document.addEventListener("scroll", () => {
    if (window.scrollY >= 650) {
        document.getElementById("customnav").classList.add("background1");
    } else {
        document.getElementById("customnav").classList.remove("background1");
    }
});