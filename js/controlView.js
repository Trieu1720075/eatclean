var div = document.getElementsByClassName("view");
var next = document.getElementById("next-btn");
next.addEventListener("click", function() {
    var active;
    for (var i = 0; i < div.length; i++) {
        if (div[i].classList.contains("active")) {
            active = i;
        }
        div[i].classList.remove("active");
    }
    if (active == div.length - 1) active = 0;
    else active = active + 1;
    div[active].className += " active";
})
var prev = document.getElementById("prev-btn");
prev.addEventListener("click", function() {
    var active;
    for (var i = 0; i < div.length; i++) {
        if (div[i].classList.contains("active")) {
            active = i;
        }
        div[i].classList.remove("active");
    }
    if (active == 0) active = div.length - 1;
    else active = active - 1;
    div[active].className += " active";
})