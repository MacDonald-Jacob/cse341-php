/*********************************************************************************
* Code Block Summary:
* function that will alert the text "Clicked!".
* button will call this function when it is clicked.
**********************************************************************************/
function alertBox(){
    alert("ALERT!");
}

/*********************************************************************************
* Code Block Summary:
* function that will change color of div1 to user input on button click
**********************************************************************************/
//vanilla JavaScript
// function changeColor() {
// 	var textbox_id = "txtColor";
// 	var textbox = document.getElementById(textbox_id);

// 	var div_id = "div1";
// 	var div = document.getElementById(div_id);

// 	// We should verify values here before we use them...
// 	var color = textbox.value;
// 	div.style.backgroundColor = color;    
// }

//JQuery
$(function(){
    $("#ccButton").click(function(){
        var color = $("#txtColor").val();
        $("#div1").css("background-color",color);
    });
});

/*********************************************************************************
* Code Block Summary: JQuery
* function that will change visibity of div3 on button click. Fade in and out.
**********************************************************************************/
$(function(){
    $("#tvButton").click(function(){
        $("#div3").fadeToggle("slow");
    });
});