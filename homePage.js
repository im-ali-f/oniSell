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
                const newCity= document.createElement("div");
                newCity.id=`city_${city}`;
                newCity.className="suggestedCity";
                newCity.innerHTML=`${city}`
                myDiv.appendChild(newCity);
                newCity.addEventListener("click",(e)=>{
                    searchCity.value=e.target.innerHTML;
                })
            });
            suggested.innerHTML=""
            suggested.appendChild(myDiv)
        };
        xmlhttp.open("GET", "gethint.php?str=" + str);
        xmlhttp.send();

    
    }
    
}) ;

const searchBTN= document.querySelector("#searchBTN")
searchBTN.addEventListener("click",(e)=>{
    let checkCity=false;
    const searchInput=document.querySelector("#searchCity")
    let city=searchInput.value;
    const xmlhttp2 = new XMLHttpRequest();
    xmlhttp2.onload = function() {
        let cityExistence = this.responseText;
        console.log(city)
        console.log(cityExistence)
        if(cityExistence == "true"){
            checkCity=true;
        }


        
    }
    xmlhttp2.open("GET", "cityExistence.php?city=" + city);
    xmlhttp2.send();
    

})
