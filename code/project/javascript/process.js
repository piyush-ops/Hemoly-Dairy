time = () => {//time code at footer
  
    document.getElementById("time").innerHTML = `TIME: ${new Date().toLocaleTimeString()}*`;

}

setInterval(time, 1000);

const productsub=document.getElementById("product");

const productnav=document.getElementById("productnav");

productsub.product=()=>{//navigation bar progress option code
   
    productnav.style.display = "block";

    productsub.style.background="rgb(238, 32, 115)";

    productsub.style.color="rgb(245,245,250)";
     
};

product2=()=>{//navigation bar progress option code
    
    productnav.style.display="none";
    
    productsub.style.background="rgb(245,245,250)";
    
    productsub.style.color="black";
};
product3=()=>{//navigation bar progress option code
    
    productnav.style.display="none";
    
    productsub.style.background="rgb(245,245,250)";
    
    productsub.style.color="black";
};
  
{//code for secondary nav

    const linenav=document.getElementById("linenav");

    const secondarynav1=document.getElementById("secondarynav");
    
    const cross=document.getElementById("cross");
    
    linenav.onclick=()=>{secondarynav1.style.transform="translateX(0%)"};
    
    cross.onclick=()=>{secondarynav1.style.transform="translateX(-100%)"}
    
    }
    
    const slideshowimages=document.querySelectorAll(".firstslide .processimage1");
    
    const slidedelay=3000;

    let currimage1=0;
    
    slideshowimages[currimage1].style.opacity=1;

    setInterval(nextimage1,slidedelay);

    function nextimage1(){
        slideshowimages[currimage1].style.opacity=0;
        currimage1=(currimage1+1)%slideshowimages.length;
        slideshowimages[currimage1].style.opacity=1;
    };

    const slideshowimages1=document.querySelectorAll(".secondslide .processimage2");
    
    let currimage2=0;
    
    slideshowimages1[currimage1].style.opacity=1;

    setInterval(nextimage2,slidedelay);

    function nextimage2(){
        slideshowimages1[currimage2].style.opacity=0;
        currimage2=(currimage2+1)%slideshowimages1.length;
        slideshowimages1[currimage2].style.opacity=1;
    };

    const slideshowimages2=document.querySelectorAll(".thirdslide .processimage3");
    
    let currimage3=0;
    
    slideshowimages2[currimage3].style.opacity=1;

    setInterval(nextimage3,slidedelay);

    function nextimage3(){
        slideshowimages2[currimage3].style.opacity=0;
        currimage3=(currimage3+1)%slideshowimages2.length;
        slideshowimages2[currimage3].style.opacity=1;
    };

    const slideshowimages3=document.querySelectorAll(".forthslide .processimage4");
    
    let currimage4=0;
    
    slideshowimages3[currimage4].style.opacity=1;

    setInterval(nextimage4,slidedelay);

    function nextimage4(){
        slideshowimages3[currimage4].style.opacity=0;
        currimage4=(currimage4+1)%slideshowimages3.length;
        slideshowimages3[currimage4].style.opacity=1;
    };

    const bodycolor=document.body;
    const headingcolor=document.querySelector(".heading");
    const flex1color=document.querySelector(".flexone");
    const flex2color=document.querySelector(".flextwo");
    const flex3color=document.querySelector(".flexthree");
    const flex4color=document.querySelector(".flexfour");

    const secheadingcolor=document.querySelector(".procurement")
    const secheading1color=document.querySelector(".processing")
    const secheading2color=document.querySelector(".packaging")
    const secheading3color=document.querySelector(".logistics")
   
    var textWrapper = document.querySelector('.heading');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    nightmode=()=>{
        bodycolor.style.background="black";
        headingcolor.style.color="white";
        flex1color.style.background="#310B0B";
        flex2color.style.background="#2D2424";
        flex3color.style.background="#362222";
        flex4color.style.background="#171010";
        secheadingcolor.style.color="white";
        secheading1color.style.color="white";
        secheading2color.style.color="white";
        secheading3color.style.color="white";

        anime.timeline({loop:false})
        .add({
          targets: '.heading .letter',
          scale: [4,1],
          opacity: [0,1],
          translateZ: 0,
          easing: "easeOutExpo",
          duration: 3950,
          delay: (el, i) => 90*i
        }).add({
          targets: '.ml2',
          opacity: 0,
          duration: 5000,
          easing: "easeOutExpo",
          delay: 3000
        });
};
    normalmode=()=>{
        bodycolor.style.background="rgb(247, 222, 213)";
        headingcolor.style.color="black";
        flex1color.style.background="blanchedalmond";
        flex2color.style.background="rgb(230, 227, 224)";
        flex3color.style.background="rgb(185, 177, 169)";
        flex4color.style.background="rgb(231, 195, 158)";
        secheadingcolor.style.color="black";
        secheading1color.style.color="black";
        secheading2color.style.color="black";
        secheading3color.style.color="black";

        anime.timeline({loop:false})
        .add({
          targets: '.heading .letter',
          scale: [4,1],
          opacity: [0,1],
          translateZ: 0,
          easing: "easeOutExpo",
          duration: 3950,
          delay: (el, i) => 90*i
        }).add({
          targets: '.ml2',
          opacity: 0,
          duration: 5000,
          easing: "easeOutExpo",
          delay: 3000
        });
 };
 
 anime.timeline({loop:false})
 .add({
   targets: '.heading .letter',
   scale: [4,1],
   opacity: [0,1],
   translateZ: 0,
   easing: "easeOutExpo",
   duration: 3950,
   delay: (el, i) => 90*i
 }).add({
   targets: '.ml2',
   opacity: 0,
   duration: 5000,
   easing: "easeOutExpo",
   delay: 3000
 });
