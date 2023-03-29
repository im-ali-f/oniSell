const selectGroup=document.querySelector("#selectGroup")
const realestate=["یکی از زیر شاخه ها انتخاب کنید","اجاره مسکونی","فروش مسکونی","فروش اداری و تجاری","اجاره اداری و تجاری","اجاره کوتاه مدت","پروژه ساخت و ساز"]
const vehicle=["یکی از زیر شاخه ها انتخاب کنید","خودرو","موتورسیکلت","قطعات یدکی","قایق و سایر"]
const digital=["یکی از زیر شاخه ها انتخاب کنید","موبایل و تبلت","رایانه","کنسول و بازی ویدیویی","صوتی و تصویری","تلفن رو میزی","متفرقه"]
const house=["یکی از زیر شاخه ها انتخاب کنید",  "لوازم خانگی برقی", "ظروف و لوازم آشپزخانه","خوردنی و آشامیدنی", "خیاطی و بافتنی", "مبلمان و صنایع چوب"," نور و روشنایی","فرش، گلیم و موکت", "تشک، روتختی و رختخواب","لوازم دکوری و تزئینی","تهویه، سرمایش و گرمایش", "شست‌وشو و نظافت","حمام و سرویس بهداشتی"]
const service=["یکی از زیر شاخه ها انتخاب کنید","موتور و ماشین","پذیرایی/مراسم","خدمات رایانه‌ای و موبایل","مالی/حسابداری/بیمه", "حمل و نقل","پیشه و مهارت","آرایشگری و زیبایی","سرگرمی","نظافت","باغبانی و درختکاری", "آموزشی","متفرقه"]
const personal=["یکی از زیر شاخه ها انتخاب کنید","کیف، کفش و لباس","زیورآلات و اکسسوری","آرایشی، بهداشتی و درمانی","وسایل بچه و اسباب بازی","لوازم التحریر","متفرقه"]
const entertainment=["یکی از زیر شاخه ها انتخاب کنید","بلیط","تور و چارتر","کتاب و مجله","دوچرخه/اسکیت/اسکوتر","حیوانات","کلکسیون و سرگرمی","آلات موسیقی","ورزش و تناسب اندام","اسباب‌ بازی","متفرقه"]
const social=["یکی از زیر شاخه ها انتخاب کنید","رویداد","داوطلبانه","گم‌شده‌ها"]
const equipment=["یکی از زیر شاخه ها انتخاب کنید","مصالح و تجهیزات ساختمان","ابزارآلات","ماشین‌آلات صنعتی","تجهیزات کسب‌وکار","عمده فروشی"]

const subGroupSection=document.querySelector("#selectSubGroup")

selectGroup.addEventListener("change",(e)=>{
    let counter=0;
    let selected=e.target.value;
    console.log(selected)
    if(selected == "realestate"){
        subGroupSection.removeAttribute("disabled")
        subGroupSection.innerHTML="";
        realestate.forEach(element => {
            const newOption=document.createElement("option")
            newOption.innerHTML=`${element}`;
            newOption.value=`${element}`;
            if(counter==0){
                newOption.value="";
            }
            subGroupSection.appendChild(newOption);
            counter+=1;
        });

    }
    else if(selected == "vehicle"){
        subGroupSection.removeAttribute("disabled")
        subGroupSection.innerHTML="";
        vehicle.forEach(element => {
            const newOption=document.createElement("option")
            newOption.innerHTML=`${element}`;
            newOption.value=`${element}`;
            if(counter==0){
                newOption.value="";
            }
            subGroupSection.appendChild(newOption);
            counter+=1;
        });

    }
    else if(selected == "digital"){
        subGroupSection.removeAttribute("disabled")
        subGroupSection.innerHTML="";
        digital.forEach(element => {
            const newOption=document.createElement("option")
            newOption.innerHTML=`${element}`;
            newOption.value=`${element}`;
            if(counter==0){
                newOption.value="";
            }
            subGroupSection.appendChild(newOption);
            counter+=1;
        });

    }
    else if(selected == "house"){
        subGroupSection.removeAttribute("disabled")
        subGroupSection.innerHTML="";
        house.forEach(element => {
            const newOption=document.createElement("option")
            newOption.innerHTML=`${element}`;
            newOption.value=`${element}`;
            if(counter==0){
                newOption.value="";
            }
            subGroupSection.appendChild(newOption);
            counter+=1;
        });

    }
    else if(selected == "service"){
        subGroupSection.removeAttribute("disabled")
        subGroupSection.innerHTML="";
        service.forEach(element => {
            const newOption=document.createElement("option")
            newOption.innerHTML=`${element}`;
            newOption.value=`${element}`;
            if(counter==0){
                newOption.value="";
            }
            subGroupSection.appendChild(newOption);
            counter+=1;
        });

    }
    else if(selected == "personal"){
        subGroupSection.removeAttribute("disabled")
        subGroupSection.innerHTML="";
        personal.forEach(element => {
            const newOption=document.createElement("option")
            newOption.innerHTML=`${element}`;
            newOption.value=`${element}`;
            if(counter==0){
                newOption.value="";
            }
            subGroupSection.appendChild(newOption);
            counter+=1;
        });

    }
    else if(selected == "entertainment"){
        subGroupSection.removeAttribute("disabled")
        subGroupSection.innerHTML="";
        entertainment.forEach(element => {
            const newOption=document.createElement("option")
            newOption.innerHTML=`${element}`;
            newOption.value=`${element}`;
            if(counter==0){
                newOption.value="";
            }
            subGroupSection.appendChild(newOption);
            counter+=1;
        });

    }
    else if(selected == "social"){
        subGroupSection.removeAttribute("disabled")
        subGroupSection.innerHTML="";
        social.forEach(element => {
            const newOption=document.createElement("option")
            newOption.innerHTML=`${element}`;
            newOption.value=`${element}`;
            if(counter==0){
                newOption.value="";
            }
            subGroupSection.appendChild(newOption);
            counter+=1;
        });

    }
    else if(selected == "equipment"){
        subGroupSection.removeAttribute("disabled")
        subGroupSection.innerHTML="";
        equipment.forEach(element => {
            const newOption=document.createElement("option")
            newOption.innerHTML=`${element}`;
            newOption.value=`${element}`;
            if(counter==0){
                newOption.value="";
            }
            subGroupSection.appendChild(newOption);
            counter+=1;
        });

    }
})
// get from data base and create adv 
const cityContainer=document.querySelector(".chosenCity");
let city=cityContainer.value;
let minPrice=0;
let maxPrice=0;
let condition=0;
let group=0;
let subGroup=0;


const httpXML=new XMLHttpRequest();
httpXML.open("GET", `getAdvertisements.php?city=${city}&minPrice=${minPrice}&maxPrice=${maxPrice}&condition=${condition}&group=${group}&subGroup=${subGroup}`);
httpXML.send();
httpXML.onload = function() {
    // What to do when the response is ready
}