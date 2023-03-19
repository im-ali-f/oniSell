const suggested = document.querySelector("#suggested");
const searchCity= document.querySelector("#searchCity");
searchCity.addEventListener("input",(e)=>{
    let str=e.target.value;
    if (str.length == 0) {
        return;
    } 
    else {
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            suggested.innerHTML="";
            suggested.innerHTML = this.responseText;
            console.log(this.responseText);
        };
        xmlhttp.open("GET", "gethint.php?str=" + str);
        xmlhttp.send();
    }
}) ;
    