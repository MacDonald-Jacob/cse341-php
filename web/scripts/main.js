//Function that gets the last modified date.
function lastUpdated() {
    var x = document.lastModified;
    document.getElementById("stamp").innerHTML = x;
}
window.onload = lastUpdated;


//Toggle button function
$(function(){
    $("#tvButton").click(function(){
        $("#checker").remove();
    });
});