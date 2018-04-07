//Vanilla JS
function myFunction(x) {
	x.classList.toggle("change");
	var elem = document.getElementById('mbutton'); 
    if (elem.innerHTML=="Menu") elem.innerHTML = "Close";
    else elem.innerHTML = "Menu";
}

// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('display-frame');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}


//jquery
$( document ).ready(function() {
 
	if ($(window).width() < 800) {
	    $('#responsive').removeClass('btn-group');
	    $('#responsive').addClass('btn-group-vertical');
	}

	var first = $( "header:first" ).text();
	if (first=="Database Connected Successfully")
	{
		$("header").css("background-color", "green");
	}
	else
	{
		$("header").css("background-color", "red");
	}

	$('.selection li button').click(function(){
		console.log($(this).val());
		var imgval = $(this).val(); 
		var image = "img/"+imgval + ".jpg";
		$("#display-frame").attr("src", image);
		
		//get value of button clicked (museum, artwork or artist)		
		var divValue = $(this).attr('id').split("-")[0]; 
		var theDiv = $(".is-" + divValue);
		console.log("Hello" + theDiv);

		//animates div to show or hide
		theDiv.slideDown().removeClass("hidden");
	    theDiv.siblings('[class*=is]').slideUp(function() { $(this).addClass("hidden"); }); 
		//retrieve alt text from database???
		//use this function to retrieve data from database
	}); 

	    
//do not need - scrapped 
	// $('#artworks #artwork-item').click(function(){
	// 	console.log($(this).val());
	// 	imgval = $(this).val(); 
	// 	var image = "img/"+imgval + ".jpg";
	// 	$("#display-frame").attr("src", image);  
	// }); 
	// $('#artists #artist-item').click(function(){
	// 	console.log($(this).val());
	// 	imgval = $(this).val(); 
	// 	var image = "img/"+imgval + ".jpg";
	// 	$("#display-frame").attr("src", image);
	// });
	// $('#museums #museum-item').click(function(){
	// 	console.log($(this).val());
	// 	imgval = $(this).val(); 
	// 	var image = "img/"+imgval + ".jpg";
	// 	$("#display-frame").attr("src", image);
	// });

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

