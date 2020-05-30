$(document).ready(function() {


    var slider = document.getElementById("comfortable");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
            output.innerHTML = this.value;
        }

});
