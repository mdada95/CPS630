//Vanilla JS
function myFunction(x) {
	x.classList.toggle("change");
	var elem = document.getElementById('mbutton'); 
    if (elem.innerHTML=="Menu") elem.innerHTML = "Close";
    else elem.innerHTML = "Menu";
}

//jquery
$( document ).ready(function() {
	console.log("HELLO MA JIGGA");
	var first = $( "header:first" ).text();
	if (first=="Database Connected Successfully")
	{
		$("header").css("background-color", "green");
	}
	else
	{
		$("header").css("background-color", "red");
	}

});

$(window).resize(function() {
  if ($(window).width() < 800) {
    $('#responsive').removeClass('btn-group');
    $('#responsive').addClass('btn-group-vertical');
  } else {
    $('#responsive').addClass('btn-group');
    $('#responsive').removeClass('btn-group-vertical');
  }
});

