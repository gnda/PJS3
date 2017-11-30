/*var slideIndex = 1;

document.addEventListener('DOMContentLoaded', function() {
	showDivs(slideIndex);
});

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("item");
 /* var dots = document.getElementsByClassName("demo");*/
  /*if (n > x.length)
	  slideIndex = 1    
  if (n < 1)
	  slideIndex = x.length
  for (i = 0; i < x.length; i++)
	 x[i].style.display = "none";  
  /*for (i = 0; i < dots.length; i++)
	 dots[i].className = dots[i].className.replace(" w3-white", "");*/
  /*x[slideIndex-1].style.display = "block";  
 /* dots[slideIndex-1].className += " w3-white";*/
//}

/*document.addEventListener('DOMContentLoaded', function() {
	if(document.querySelector("#slider-nature .slider-item") == null)
		actualiserSlider("#slider-nature",".lacs","#nature-content");
	document.querySelector(".link-lacs").addEventListener("click", function(){
		actualiserSlider("#slider-nature",".lacs","#nature-content");
	});
});

function actualiserSlider(nomSlider, classeItem){
	//viderSlider(nomSlider);
	afficherItems(nomSlider, classeItem);
}

function viderSlider(nomSlider){
	
}

function afficherItems(nomSlider, classeItem){
	var divs = document.querySelectorAll(nomSlider+" "+classeItem), i;
	for (i = 0; i < divs.length; ++i)
	  divs[i].display = "inline";
}*/






/*$("#owl-nature").owlCarousel({
	dots: true,
	items: 1,
	nav: true,
	loop: true,
	navText: [
	   "<i class='icon-left-open-big'></i>",
	   "<i class='icon-right-open-big'></i>"
	]
});

$(function(){
	if($("#owl-nature .owl-item").length == 0)
		actualiserCarousel("#owl-nature",".lacs","#nature-content");
});

$(".link-lacs").click(function(){
	actualiserCarousel("#owl-nature",".lacs","#nature-content");
});

$(".link-mil-roc").click(function(){
	actualiserCarousel("#owl-nature",".mil_roc","#nature-content");
});

$(".link-plateaux").click(function(){
	actualiserCarousel("#owl-nature",".plateaux","#nature-content");
});

/*	classeItem --> classe du groupe d'éléments à ajouter
 *	nomContainer --> nom de la div qui contient les éléments à ajouter
 */
 
/*function actualiserCarousel(nomCarousel, classeItem, nomContainer){
	viderCarousel(nomCarousel);
	$(nomContainer+" "+classeItem).each(function(){
		$(nomContainer).append($(this).clone());
		$(nomCarousel).owlCarousel("add", this).owlCarousel("refresh");
	});
}

function viderCarousel(nomCarousel){
	var nbObj = $(nomCarousel+' .owl-item').not('.cloned').length;
	for(var i = 0; i < nbObj; i++)
		$(nomCarousel).trigger("remove.owl.carousel", i);
	$(nomCarousel).owlCarousel("refresh");
}*/