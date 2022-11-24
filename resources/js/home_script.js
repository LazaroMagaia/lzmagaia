var about = document.getElementById("about");
var get_about = document.getElementById("about-me");
var service = document.getElementById("service");
var get_service = document.getElementById("service-me");

const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get('elemento');

if(myParam == "about")
{
    get_about.scrollIntoView({
        behavior: 'smooth'
      });
}else if(myParam == "service")
{
    get_service.scrollIntoView({
        behavior: 'smooth'
      });
}
