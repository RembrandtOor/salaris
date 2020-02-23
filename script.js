function ah() {
    document.body.style.backgroundColor = "#4196cf"
    document.title = "AH - Urencalculator"
    document.getElementById("form").style.opacity = "1";

    document.getElementById("jumbo").style.opacity = "0";
    document.getElementById("lidl").style.opacity = "0";
    document.getElementById("plus").style.opacity = "0";



    document.getElementById("ah").removeAttribute("onclick"); 
    document.getElementById("jumbo").removeAttribute("onclick");
    document.getElementById("lidl").removeAttribute("onclick"); 
    document.getElementById("plus").removeAttribute("onclick"); 
    document.getElementsByTagName("h4")[0].innerHTML = "";
}

function jumbo() {
    document.body.style.backgroundColor = "#f7ce46"
    document.title = "Jumbo - Urencalculator"
    document.getElementById("form").style.opacity = "1";

    document.getElementById("ah").style.opacity = "0";
    document.getElementById("lidl").style.opacity = "0";
    document.getElementById("plus").style.opacity = "0";
 

    document.getElementById("ah").removeAttribute("onclick"); 
    document.getElementById("jumbo").removeAttribute("onclick");
    document.getElementById("lidl").removeAttribute("onclick"); 
    document.getElementById("plus").removeAttribute("onclick"); 
    document.getElementsByTagName("h4")[0].innerHTML = "";
}

function lidl() {
    document.body.style.backgroundColor = "#2c52a3"
    document.title = "Lidl - Urencalculator"
    document.getElementById("form").style.opacity = "1";

    document.getElementById("jumbo").style.opacity = "0";
    document.getElementById("ah").style.opacity = "0";
    document.getElementById("plus").style.opacity = "0";


    document.getElementById("ah").removeAttribute("onclick"); 
    document.getElementById("jumbo").removeAttribute("onclick");
    document.getElementById("lidl").removeAttribute("onclick"); 
    document.getElementById("plus").removeAttribute("onclick");
    document.getElementsByTagName("h4")[0].innerHTML = ""; 
}

function plus() {
    document.body.style.backgroundColor = "#96ae38"
    document.title = "PLUS - Urencalculator"
    document.getElementById("form").style.opacity = "1"; 
    
    document.getElementById("jumbo").style.opacity = "0";
    document.getElementById("lidl").style.opacity = "0";
    document.getElementById("ah").style.opacity = "0";



    document.getElementById("ah").removeAttribute("onclick"); 
    document.getElementById("jumbo").removeAttribute("onclick");
    document.getElementById("lidl").removeAttribute("onclick"); 
    document.getElementById("plus").removeAttribute("onclick");
    document.getElementsByTagName("h4")[0].innerHTML = ""; 
}