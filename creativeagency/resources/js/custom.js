var nav = document.getElementById("topNav");
var menu = document.getElementsByClassName("menuitems");
var close = document.getElementById("closebtn");

var openNav = false;

function openAndCloseNav() {
    
    if(openNav === false) {
        if($(document).width() <= 768) {
            document.getElementById("mySidenav").style.width = "50%";
        } else {
            document.getElementById("mySidenav").style.width = "30%";
        }
        openNav = true;
    } else {
        document.getElementById("mySidenav").style.width = "0";
        document.body.style.backgroundColor = "white";
        openNav = false;
    }
}

$(document).keyup(function(e) {
    if (e.keyCode == 27) {
        if(openNav === true) {
            document.getElementById("mySidenav").style.width = "0";
            document.body.style.backgroundColor = "white";
            openNav = false;
        }
   }
});
