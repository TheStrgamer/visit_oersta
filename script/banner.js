

let bilde = document.querySelector("#bakgrunnsbilde");

function left() {
    bilde.style.left = "1000px";
    setTimeout(function() { right(); }, 8000);
}
function right() {
    bilde.style.left = "0px";
    setTimeout(function() { left(); }, 8000);
}
left();


