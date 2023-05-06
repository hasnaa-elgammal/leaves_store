document.querySelector("#cart").addEventListener("click",function(){
    document.querySelector(".cart").classList.add("active");
});
document.querySelector(".cart .cart-close").addEventListener("click",function(){
    document.querySelector(".cart").classList.remove("active");
});



document.querySelector("#wishlist").addEventListener("click",function(){
    document.querySelector(".wishlist").classList.add("active");
});
document.querySelector(".wishlist .wish-close").addEventListener("click",function(){
    document.querySelector(".wishlist").classList.remove("active");
});


const accors = document.querySelectorAll(".accor");

accors.forEach((accor) => {
    accor.addEventListener("click", () => {
        accor.classList.toggle("active");
    });
});