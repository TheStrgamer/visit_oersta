let Aktbilde1 = document.querySelector("#AktivitetFade1");
let Aktbilde2 = document.querySelector("#AktivitetFade2");
let Aktbilde3 = document.querySelector("#AktivitetFade3");
let Aktbilde4 = document.querySelector("#AktivitetFade4");
let Aktbilder = [Aktbilde1, Aktbilde2, Aktbilde3, Aktbilde4];


let Ovbilde1 = document.querySelector("#OvernattingFade1");
let Ovbilde2 = document.querySelector("#OvernattingFade2");
let Ovbilde3 = document.querySelector("#OvernattingFade3");
let Ovbilde4 = document.querySelector("#OvernattingFade4");
let Ovbilder = [Ovbilde1, Ovbilde2, Ovbilde3, Ovbilde4]; 

let Resbilde1 = document.querySelector("#ResturangFade1");
let Resbilde2 = document.querySelector("#ResturangFade2");
let Resbilde3 = document.querySelector("#ResturangFade3");
let Resbilde4 = document.querySelector("#ResturangFade4");
let Resbilder = [Resbilde1, Resbilde2, Resbilde3, Resbilde4]; 

let a = 3;
let b = 3;
let c = 3;

function transitionAkt() {
               
    Aktbilder[a].style.opacity = "0%";
    if (a <=0) {
        a=3;
    } else {
        a-=1;
    }
    Aktbilder[a].style.opacity = "100%";

    setTimeout(function() { transitionAkt(); }, 6000);
}       
function transitionOv() {
               
    Ovbilder[b].style.opacity = "0%";
    if (b <=0) {
        b=3;
    } else {
        b-=1;
    }
    Ovbilder[b].style.opacity = "100%";

    setTimeout(function() { transitionOv(); }, 6000);
}            
function transitionRes() {
               
    Resbilder[c].style.opacity = "0%";
    if (c <=0) {
        c=3;
    } else {
        c-=1;
    }
    Resbilder[c].style.opacity = "100%";

    setTimeout(function() { transitionRes(); }, 6000);
}            
setTimeout(function() { transitionOv(); }, 1000);
setTimeout(function() { transitionRes(); }, 1500);
setTimeout(function() { transitionAkt(); }, 2000);
    
