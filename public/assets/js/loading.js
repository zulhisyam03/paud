var myVar;

function loading() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
    // document.querySelector("body").style.display = "inline";
    document.querySelector(".loader-wrap").style.display = "none";
    document.getElementById("myLoad").style.display = "block";
}