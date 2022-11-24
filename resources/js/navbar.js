
var btn = document.getElementById("navbar");
var menu = document.querySelector(".mobile-list");
var isOpen = false;
btn.addEventListener("click",()=>{

    if(isOpen)
    {
        menu.style.display="block";
        isOpen = false;
    }else
    {
        menu.style.display="none";
        isOpen = true;
    }

})