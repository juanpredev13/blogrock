document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.getElementById("hamburger");
    const navListMobile = document.getElementById("navList-mobile");
    const closeBtn = document.getElementById("closebtn");
    const body = document.body;

    hamburger.addEventListener("click", function () {
        hamburger.classList.toggle("open");
        navListMobile.classList.toggle("open");
        if (navListMobile.classList.contains("open")) {
            navListMobile.style.display = "flex";
            body.classList.add("no-scroll");
        } else {
            navListMobile.style.display = "none";
            body.classList.remove("no-scroll");
        }
    });

    closeBtn.addEventListener("click", function () {
        hamburger.classList.remove("open");
        navListMobile.classList.remove("open");
        navListMobile.style.display = "none";
        body.classList.remove("no-scroll");
    });

    window.addEventListener("resize", function () {
        if (window.innerWidth > 768) {
            hamburger.classList.remove("open");
            navListMobile.classList.remove("open");
            navListMobile.style.display = "none";
            body.classList.remove("no-scroll");
        }
    });

    // Efecto de clic en botones
    document.querySelectorAll('.feature__button, .about-us__button, .newsletter__button').forEach(button => {
        button.addEventListener('click', function () {
            button.classList.add('clicked');
            setTimeout(() => button.classList.remove('clicked'), 300);
        });
    });
});
