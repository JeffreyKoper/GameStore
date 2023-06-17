/*!
 * Start Bootstrap - New Age v6.0.7 (https://startbootstrap.com/theme/new-age)
 * Copyright 2013-2023 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-new-age/blob/master/LICENSE)
 */
//
// Scripts
//

window.addEventListener("DOMContentLoaded", (event) => {
    const parentDiv = document.querySelector(".text-center.text-white"); // Select the parent div

    const header = document.createElement("h1");
    header.id = "header_message";
    parentDiv.insertBefore(header, parentDiv.firstChild); // Insert the element as the first child of the parent div
    const texts = [
        "De nieuwste games direct verkrijgbaar!",
        "Haal al uw favoriete games hier!",
        "De goedkoopste games in Nederland!",
        "Welkom!",
    ]; // Add more texts if needed

    header.innerHTML = texts[3];
    let index = 0;

    function changeText() {
        header.innerHTML = texts[index];
        index = (index + 1) % texts.length;
    }

    setInterval(changeText, 5000); // 10,000 milliseconds = 10 seconds

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector("#mainNav");
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: "#mainNav",
            offset: 74,
        });
    }

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector(".navbar-toggler");
    const responsiveNavItems = Array.from(
        document.querySelectorAll("#navbarResponsive .nav-link")
    );
    responsiveNavItems.forEach(function (responsiveNavItem) {
        responsiveNavItem.addEventListener("click", () => {
            if (window.getComputedStyle(navbarToggler).display !== "none") {
                navbarToggler.click();
            }
        });
    });
});
