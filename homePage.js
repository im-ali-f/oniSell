const suggested = document.querySelector("#suggested");
const searchCity= document.querySelector("#searchCity");
let hintCitys=[];
searchCity.addEventListener("input",(e)=>{
    let str=e.target.value;
    if (str.length == 0) {
        return;
    } 
    else {
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            hintCitys=[];
            suggested.innerHTML="";
            let wholeStr = this.responseText;
            let array=wholeStr.split("\"")
            let counter=0;
            array.forEach(str => {
                if(counter%2 !=0){
                    hintCitys.push(str);
                    
                }
                counter+=1;
            });
            console.log(hintCitys);
        };
        xmlhttp.open("GET", "gethint.php?str=" + str);
        xmlhttp.send();

    
    }
    
}) ;
    

