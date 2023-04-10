const idDiv=document.querySelector(".idDiv")
const id=idDiv.innerHTML;
const allUserMenus=document.querySelectorAll(".userSubMenu")
const advUserMenu=document.querySelector("#myAdvsMenu")
function advUserMenuFucnction() {
    allUserMenus.forEach(menu => {
        menu.classList.remove("activeMenu")
    });
    advUserMenu.classList.add("activeMenu")
    const httpXML=new XMLHttpRequest();
    httpXML.open("GET", `getUserAdv.php?id=${id}`);
    httpXML.send();
    httpXML.onload = function() {
       let xmlTxt=httpXML.responseText;
    }
}
advUserMenu.addEventListener("click",advUserMenuFucnction)