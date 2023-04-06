const idDiv =document.querySelector(".idDiv");
const id=idDiv.innerHTML;

const httpXML=new XMLHttpRequest();
httpXML.open("GET", `getSpecificAdv.php?type=adv&id=${id}`);
httpXML.send();
httpXML.onload = function() {
    let xmlJSON=httpXML.responseText;
    if (xmlJSON !=[] && xmlJSON != ""){
      resultArrays=JSON.parse(xmlJSON);
   
    console.log(resultArrays)

   const advDiv=document.createElement("div")
   advDiv.className="adv";
   advDiv.innerHTML=`
      <div class="title divAdv">${resultArrays["title"]}</div>
      <div class="separator"></div>

      <div class="groupSection ">
          <p class="infoP">گروه:</p>
          <div class="group divAdv">${resultArrays["advGroup"]}</div>
          <p class="infoP">زیرگروه:</p>
          <div class="subGroup divAdv">${resultArrays["advSubGroup"]}</div>
      </div>
      <div class="separator"></div>

      <p class="infoP">توضیحات محصول:</p>
      <div class="textAdv divAdv">
      ${resultArrays["text"]}
      </div>
      <div class="personalInfo">
          <div class="separator"></div>

          <p class="infoP">ایمیل آگهی کننده:</p>
          <div class="email divAdv"></div>
      </div>
      <div class="separator"></div>

      <p class="infoP">قیمت:</p>
      <div class="price divAdv">${resultArrays["price"]} تومان</div>
   `
   const right=document.querySelector(".right")
   right.appendChild(advDiv);

   

 }    
}
//get and use image Dirs
const httpXML2=new XMLHttpRequest();
httpXML2.open("GET", `getSpecificAdv.php?type=images&id=${id}`);
httpXML2.send();
httpXML2.onload = function() {
    let xmlJSON=httpXML2.responseText;
    if (xmlJSON !=[] && xmlJSON != ""){
      resultArrays2=JSON.parse(xmlJSON);
    
    console.log(resultArrays2)

   let counterSlide=0;
   const sideShow=document.createElement("div")
   sideShow.className="slideshow-container";
   resultArrays2.forEach(row => {
    counterSlide+=1;
     sideShow.innerHTML+=`
            <div class="mySlides fade" id="slide${counterSlide}">
                <div class="divInnerImage"><img src="${row["imageDir"]}" class="innerImage"></div>
            </div>
   `
   });
   sideShow.innerHTML+=`
   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
   <a class="next" onclick="plusSlides(1)">&#10095;</a>
   `
   const left=document.querySelector(".left")
   left.appendChild(sideShow);
   const slide1=document.querySelector("#slide1") 
   slide1.style.display="block"

               

   const dot=document.createElement("div")
   dot.id="dotSection";
   counter=0;
   resultArrays2.forEach(row => {
    counter+=1;
     dot.innerHTML+=`
      <span class="dot" id="dot${counter}" onclick="currentSlide(${counter})"></span>      
   `
   });
   left.appendChild(dot);
   const dot1=document.querySelector("#dot1") 
   dot1.classList.add("active")
}
}

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
