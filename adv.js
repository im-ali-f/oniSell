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



const idDiv =document.querySelector(".idDiv");
const id=idDiv.innerHTML;

const httpXML=new XMLHttpRequest();
httpXML.open("GET", `getSpecificAdv.php?id=${id}`);
httpXML.send();
httpXML.onload = function() {
    let xmlJSON=httpXML.responseText;
    console.log(xmlJSON)
    if (xmlJSON !=[] && xmlJSON != ""){
      resultArrays=JSON.parse(xmlJSON);
    }
    console.log(resultArrays)


    /* 
                   
    */
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
