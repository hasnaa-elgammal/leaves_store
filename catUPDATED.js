document.querySelector("#d").addEventListener("click",function(){
    document.querySelector(".cart").classList.add("active");
});
document.querySelector(".cart .cart-close").addEventListener("click",function(){
    document.querySelector(".cart").classList.remove("active");
});



document.querySelector("#b").addEventListener("click",function(){
    document.querySelector(".wishlist").classList.add("active");
});
document.querySelector(".wishlist .wish-close").addEventListener("click",function(){
    document.querySelector(".wishlist").classList.remove("active");
});