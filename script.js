// Javascript for responsive navigation sidebar menu
var menu = document.querySelector("#menu-icon");
var close = document.querySelector("#close-icon");
var navbar = document.querySelector(".navbar");

menu.addEventListener("click", () => {
    navbar.classList.add("active");
});

close.addEventListener("click", () => {
    navbar.classList.remove("active");
});

window.onscroll = () => {
    navbar.classList.remove("active");
};

//////////////////////////////////////////////////////////////////////////////////////////

    // Contact link
    var linkend = document.querySelector(".linkedin");
    var whatsapp = document.querySelector(".whatsapp");
    var email = document.querySelector(".email");

    linkend.addEventListener("click", () => {
        window.open("https://www.linkedin.com/in/humaidy-hasan/", "_blank");
    })

    whatsapp.addEventListener("click", () => {
        window.open("https://wa.me/1643729667", "_blank");
    })

    email.addEventListener("click", () => {
        window.open("https://mailto:humaidyhasan58@gmail.com", "_blank");
    })


    // Footer Link
    var facebook = document.querySelector(".facebook-link");
    var link = document.querySelector(".linkend-link");
    var instra = document.querySelector(".instragram-link");

    facebook.addEventListener("click", () => {
        window.open("https://www.facebook.com/obidyhasan.naim.1","_blank");
    })
    link.addEventListener("click", () => {
        window.open("https://www.linkedin.com/in/humaidy-hasan/","_blank");
    })
    instra.addEventListener("click", () => {
        window.open("https://www.instagram.com/humaidyhasan/","_blank");
    })

    
