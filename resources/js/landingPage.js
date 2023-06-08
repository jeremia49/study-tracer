 // handle button humberger
 const btn_humberger = document.getElementById("humberger");
 btn_humberger.addEventListener("click", function (e) {
     e.preventDefault();
     this.classList.toggle("humberger-active");
     this.previousElementSibling.classList.toggle("hidden");
     this.previousElementSibling.classList.toggle("nav-sidebar");
     this.parentElement.parentElement.classList.toggle("handle-high");
     this.parentElement.parentElement.parentElement.classList.toggle("header-fix");
   

 });

 //end swiper
 // handle FAQ
 const containerFaq=document.getElementById("faq");
 containerFaq.addEventListener("click",function(e){
     e.preventDefault();

     if(e.target.className.includes("moreinfo") && e.target.dataset.toggle =="false" ){
     // get element more info remove angle down
     e.target.nextElementSibling.classList.add("animate-fadeUpOnce")
     e.target.nextElementSibling.classList.remove("hidden");
     e.target.dataset.toggle="true";
     e.target.classList.add("text-first-bg-c");
     // get element more info remove angle down
    const containerIcons=e.target.getElementsByClassName('container-icons')[0];
    const iconsPLus=containerIcons.getElementsByTagName("span")[0];
    const iconsMinus=containerIcons.getElementsByTagName("span")[1];
    changeIcons(iconsPLus,iconsMinus);
    }
    else if(e.target.className.includes("moreinfo") && e.target.dataset.toggle =="true" ){
        // handle animations for show more data
        e.target.nextElementSibling.classList.add("animate-fadeUpButtonOnce");
        e.target.dataset.toggle="false";
        e.target.classList.remove("text-first-bg-c");
        setTimeout(data=>{
            e.target.nextElementSibling.classList.add("hidden");
            },350);
            // handle icons
            const containerIcons=e.target.getElementsByClassName('container-icons')[0];
            const iconsPLus=containerIcons.getElementsByTagName("span")[1];
            const iconsMinus=containerIcons.getElementsByTagName("span")[0];
            changeIcons(iconsPLus,iconsMinus);
        }
        setTimeout(data=>{
            e.target.nextElementSibling.classList.remove("animate-fadeUpOnce")
            e.target.nextElementSibling.classList.remove("animate-fadeUpButtonOnce")
       },600)


 });

 function changeIcons(iconPlus,iconMinus){
    const icons= iconPlus;
    const iconsMinus= iconMinus;
    icons.classList.add("hidden");
    iconsMinus.classList.remove("hidden");
 }

// using intersection api for handle navbar fixed

const home=document.getElementById("home");
const navbar=document.querySelector("header");
const homeObserverd=new IntersectionObserver(entries =>{
    if(!entries[0].isIntersecting){
        navbar.classList.add("navbar-fixed");
        return;
    }
    entries[0].target.classList.add("home-navbar-fixed");
    navbar.classList.remove("navbar-fixed");
},{
    threshold:.8,
    rootMargin:"-20px 0px 0px 0px"
})
homeObserverd.observe(home);