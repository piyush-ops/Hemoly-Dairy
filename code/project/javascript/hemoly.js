{//loading page overlay code
  var loader = document.getElementById("loading");
  window.addEventListener("load", () => {
    loader.style.display = "none";
  }); 
}

time = () => {
  //time code at footer

  document.getElementById(
    "time"
  ).innerHTML = `TIME: ${new Date().toLocaleTimeString()}*`;
};

setInterval(time, 1000);

const productsub = document.getElementById("product");

const productnav = document.getElementById("productnav");

productsub.product = () => {
  //navigation bar progress option code

  productnav.style.display = "block";

  productsub.style.background = "rgb(238, 32, 115)";

  productsub.style.color = "rgb(245,245,250)";
};

product2 = () => {
  //navigation bar progress option code

  productnav.style.display = "none";

  productsub.style.background = "rgb(245,245,250)";

  productsub.style.color = "black";
};
product3 = () => {
  //navigation bar progress option code

  productnav.style.display = "none";

  productsub.style.background = "rgb(245,245,250)";

  productsub.style.color = "black";
};

{
  //code for secondary nav

  const linenav = document.getElementById("linenav");

  const secondarynav1 = document.getElementById("secondarynav");

  const cross = document.getElementById("cross");

  linenav.onclick = () => {
    secondarynav1.style.transform = "translateX(0%)";
  };

  cross.onclick = () => {
    secondarynav1.style.transform = "translateX(-100%)";
  };
}

{
  //hemoly dairy processing page code

  const mainbox = document.getElementById("start");

  const firstbox = document.getElementById("procurement");

  const secondbox = document.getElementById("processing");

  const thirdbox = document.getElementById("packaging");

  const forthbox = document.getElementById("logistics");

  const button1 = document.getElementById("btn1");

  const button2 = document.getElementById("btn2");

  const button3 = document.getElementById("btn3");

  const button4 = document.getElementById("btn4");

  const video = document.getElementById("video3");

  const Image = document.getElementsByClassName("slideimage");

  const image1 = document.getElementsByClassName("slideimage1");

  const image2 = document.getElementsByClassName("slideimage2");

  const image3 = document.getElementsByClassName("slideimage3");

  const slide1 = document.getElementsByClassName("slideshow1");

  const slide2 = document.getElementsByClassName("slideshow2");

  const slide3 = document.getElementsByClassName("slideshow3");

  const slide4 = document.getElementsByClassName("slideshow4");
  button1.onclick = () => {
    firstbox.style.display = "block";

    secondbox.style.display = "none";

    thirdbox.style.display = "none";

    forthbox.style.display = "none";

    mainbox.style.display = "none";

    button1.style.background = "white";

    button2.style.background = "#ee2073";

    button3.style.background = "#ee2073";

    button4.style.background = "#ee2073";

    button1.style.color = "#ee2073";

    button2.style.color = "white";

    button3.style.color = "white";

    button4.style.color = "white";

    video3.style.display = "none";

    slide1[0].style.display = "block";

    slide2[0].style.display = "none";

    slide3[0].style.display = "none";

    slide4[0].style.display = "none";
  };

  button2.onclick = () => {
    firstbox.style.display = "none";

    secondbox.style.display = "block";

    thirdbox.style.display = "none";

    forthbox.style.display = "none";

    mainbox.style.display = "none";

    button2.style.background = "white";

    button1.style.background = "#ee2073";

    button3.style.background = "#ee2073";

    button4.style.background = "#ee2073";

    button2.style.color = "#ee2073";

    button1.style.color = "white";

    button3.style.color = "white";

    button4.style.color = "white";

    video3.style.display = "none";

    slide2[0].style.display = "block";

    slide1[0].style.display = "none";

    slide3[0].style.display = "none";

    slide4[0].style.display = "none";
  };

  button3.onclick = () => {
    firstbox.style.display = "none";

    secondbox.style.display = "none";

    thirdbox.style.display = "block";

    forthbox.style.display = "none";

    mainbox.style.display = "none";

    button3.style.background = "white";

    button1.style.background = "#ee2073";

    button2.style.background = "#ee2073";

    button4.style.background = "#ee2073";

    button3.style.color = "#ee2073";

    button1.style.color = "white";

    button2.style.color = "white";

    button4.style.color = "white";

    video3.style.display = "none";

    slide3[0].style.display = "block";

    slide1[0].style.display = "none";

    slide2[0].style.display = "none";

    slide4[0].style.display = "none";
  };

  button4.onclick = () => {
    firstbox.style.display = "none";

    secondbox.style.display = "none";

    thirdbox.style.display = "none";

    forthbox.style.display = "block";

    mainbox.style.display = "none";

    button4.style.background = "white";

    button1.style.background = "#ee2073";

    button2.style.background = "#ee2073";

    button3.style.background = "#ee2073";

    button4.style.color = "#ee2073";

    button1.style.color = "white";

    button2.style.color = "white";

    button3.style.color = "white";

    video3.style.display = "none";

    slide4[0].style.display = "block";

    slide1[0].style.display = "none";

    slide2[0].style.display = "none";

    slide3[0].style.display = "none";
  };
}
{
  const card = document.querySelector(".card1");
  const container = document.querySelector(".container1");
  const info = document.querySelector(".info1");
  const jodhpur = document.querySelector(".jodhpur");
  container.addEventListener("mousemove", (e) => {
    let xaxix = (window.innerWidth / 100 - e.pageX) / 150;
    let yaxix = (window.innerHeight / 100 - e.pageY) / 150;
    card.style.transform = `rotateY(${xaxix}deg) rotateX(${yaxix}deg)`;
  });
  card.addEventListener("mousemove", () => {
    info.style.transform = `translateZ(100px)`;
    jodhpur.style.transform = `translateZ(100px)`;
    info.style.boxshadow = "10px 10px 2px rgba(0,0,0,0.7)";
  });

  container.addEventListener("mouseleave", () => {
    card.style.transform = `rotateY(0deg) rotateX(0deg)`;
    info.style.transform = `translateZ(0px)`;
    jodhpur.style.transform = `translateZ(0px)`;
    card.style.transition = `all 1s linear`;
    info.style.background = "rgb(66, 52, 148)";
    info.style.boxShadow = "-10px -10px 2px rgba(0,0,0,0.7)";
  });
  container.addEventListener("mouseenter", () => {
    card.style.transition = "none";

    info.style.boxShadow = " 10px 10px 2px rgba(0,0,0,0.7)";
  });

  const card1 = document.querySelector(".card2");
  const container1 = document.querySelector(".container2");
  const info1 = document.querySelector(".info2");
  const udaipur = document.querySelector(".udaipur");

  container1.addEventListener("mousemove", (f) => {
    let xaxix1 = (window.innerWidth / 100 - f.pageX) / 150;
    let yaxix1 = (window.innerHeight / 100 - f.pageY) / 150;
    card1.style.transform = `rotateY(${xaxix1}deg) rotateX(${yaxix1}deg)`;
  });
  card1.addEventListener("mousemove", () => {
    udaipur.style.transform = `translateZ(100px)`;
    info1.style.transform = `translateZ(100px)`;

    info1.style.boxshadow = "10px 10px 2px rgba(0,0,0,0.7)";
  });

  container1.addEventListener("mouseleave", () => {
    card1.style.transform = `rotateY(0deg) rotateX(0deg)`;
    info1.style.transform = `translateZ(0px)`;
    udaipur.style.transform = `translateZ(0px)`;
    card1.style.transition = `all 1s linear`;
    info1.style.background = "rgb(145, 24, 216)";
    info1.style.boxShadow = "-10px -10px 2px rgba(0,0,0,0.7)";
  });
  container1.addEventListener("mouseenter", () => {
    card1.style.transition = "none";

    info1.style.boxShadow = " 10px 10px 2px rgba(0,0,0,0.7)";
  });

  const card2 = document.querySelector(".card3");
  const container2 = document.querySelector(".container3");
  const info2 = document.querySelector(".info3");
  const jaipur = document.querySelector(".jaipur");

  container2.addEventListener("mousemove", (f) => {
    let xaxix1 = (window.innerWidth / 2 - f.pageX) / 150;
    let yaxix1 = (window.innerHeight / 2 - f.pageY) / 150;
    card2.style.transform = `rotateY(${xaxix1}deg) rotateX(${yaxix1}deg)`;
  });
  card2.addEventListener("mousemove", () => {
    jaipur.style.transform = `translateZ(100px)`;
    info2.style.transform = `translateZ(100px)`;
    info2.style.boxshadow = "10px 10px 2px rgba(0,0,0,0.7)";
  });

  container2.addEventListener("mouseleave", () => {
    card2.style.transform = `rotateY(0deg) rotateX(0deg)`;
    info2.style.transform = `translateZ(0px)`;
    jaipur.style.transform = `translateZ(0px)`;
    card2.style.transition = `all 1s linear`;
    info2.style.background = "rgba(255, 0, 191, 0.74)";
    info2.style.boxShadow = "-10px -10px 2px rgba(0,0,0,0.7)";
  });
  container2.addEventListener("mouseenter", () => {
    card2.style.transition = "none";

    info2.style.boxShadow = " 10px 10px 2px rgba(0,0,0,0.7)";
  });
}
