var full = document.getElementById("full");
var fullImg = document.getElementById("fullImg");

function openFullImg(pic) {
    full.style.display = "flex";
    fullImg.src = pic;
}

function closeFullImg() {
    full.style.display = "none";
}