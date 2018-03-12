document.addEventListener("DOMContentLoaded", function () {
    document.getElementsByClassName("toggle")[0].addEventListener("click", function () {
        var ul = document.getElementsByTagName("ul")[0];
        if (ul.getAttribute("class") !== "active") {
            ul.setAttribute("class", "active");
        } else {
            ul.removeAttribute("class");
        }
    });
});