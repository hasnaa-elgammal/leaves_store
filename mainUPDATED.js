const accors = document.querySelectorAll(".accor");

accors.forEach((accor) => {
    accor.addEventListener("click", () => {
        accor.classList.toggle("active");
    });
});