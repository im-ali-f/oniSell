const suggested = document.querySelector("#suggested");
const searchCity= document.querySelector("#searchCity");
let hintCitys=[];
const myDiv=document.createElement("div")
myDiv.className="suggestedList";
searchCity.addEventListener("input",(e)=>{
    let str=e.target.value;
    if (str.length == 0) {
        suggested.innerHTML="";
        myDiv.innerHTML="";
        suggested.appendChild(myDiv)
        return;
    } 
    else {
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            hintCitys=[];
            suggested.innerHTML="";
            myDiv.innerHTML="";
            suggested.appendChild(myDiv)
            let wholeStr = this.responseText;
            let array=wholeStr.split("\"")
            let counter=0;
            array.forEach(str => {
                if(counter%2 !=0){
                    hintCitys.push(str);
                    
                }
                counter+=1;
            });

            hintCitys.forEach(city => {
                myDiv.innerHTML+=`<div class="suggestedCity" id="suggested_city_${counter}">${city}</div>`
            });
            suggested.innerHTML=""
            suggested.appendChild(myDiv)
        };
        xmlhttp.open("GET", "gethint.php?str=" + str);
        xmlhttp.send();

    
    }
    
}) ;
    

