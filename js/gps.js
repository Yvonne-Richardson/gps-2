var lifecycleOrCategory = '';
var plantIdx  = '';
var commonName = '';
var suffix = '';

var windowName =  "";

// two flags, one for page load and one for data
var pageDidLoad,
	UrlDidLoad;

window.addEventListener('resize', function () { 
	// if it displays strangely on resize, just use the refresh

});

$(document).ready(function() {
	pageDidLoad = true;
	var btnTitle = document.getElementById("detailsIdx").innerHTML ;
	document.getElementById("plantDetails").style.display = "none"; 
	document.getElementById("mainHidden").style.display = "none"; 
	
	UrlDidLoad = true;
	
});


function saveContent(cellId) {
	var NumberId = cellId.replace( /^\D+/g, ''); // numeric part only
	var indexid = "plantIndex" + NumberId;
	var dbIndex = document.getElementById(indexid).innerHTML;
	var reuse = document.getElementById("detailsIdx").innerHTML ;
	var plantArrayRow = document.getElementById(cellId).innerHTML;
	document.getElementById(cellId).style.color = "red";
	document.getElementById(cellId).selected = true;
	
	document.getElementById("plantDetails").value = "More about " +  plantArrayRow;
	var dtlTextWidth = (document.getElementById("plantDetails").value).length;
	var dtlFontWidth = window.getComputedStyle(document.getElementById("plantDetails")).getPropertyValue('font-size');
	dtlFontWidth = dtlFontWidth.substr(0, dtlFontWidth.length-2);
	var dtlTextPixels = dtlTextWidth * dtlFontWidth ; // text width in pixels
	
	var brdrTextWidth = window.getComputedStyle(document.getElementById("plantDetails1")).width;
	var brdrFontWidth = window.getComputedStyle(document.getElementById("plantDetails1")).getPropertyValue('font-size');
	
	brdrTextWidth = brdrTextWidth.substr(0, brdrTextWidth.length-2);
	var brdrTextPixels = brdrTextWidth * brdrFontWidth ; // text width in pixels
	
	var newWidth = Math.max(dtlTextPixels, brdrTextWidth);
//	alert(" dtlTextPixels " + dtlTextPixels + " brdrTextWidth " + brdrTextWidth + " brdrFontWidth " + brdrFontWidth  + " brdrTextPixels " + brdrTextPixels + "  newWidth " +  newWidth);
	
	document.getElementById("plantDetails1").style.width = newWidth;
	document.getElementById("plantDetails").style.width = newWidth;

	//= textWidth * fontWidth; 
/*	window.getComputedStyle(document.getElementById("plantDetails")).getPropertyValue('font-size'); = document.getElementById("plantDetails").clientHeight;
	var textOffsetHeight = document.getElementById("plantDetails").offsetHeight;
	var textClientWidth = document.getElementById("plantDetails").clientWidth;
 alert ("textWidth " +  textWidth + " textClientHeight " + textClientHeight  + " textOffsetHeight " + textOffsetHeight + " textClientWidth " + textClientWidth  );
 */
	document.getElementById("plantDetails").style.display = "inline-block"; 
	document.getElementById("plantDetails1").style.display = "inline-block"; 
	document.getElementById("detailsIdx").innerHTML = dbIndex;
};

function sendPlantInfo(){

    var reuse = document.getElementById("detailsIdx").innerHTML;
	
	if (reuse == null) {
		alert("Please select a plant from the Home page.");
	} else {	 
		plantIdx  = reuse;
		document.getElementById("cVar").value =  plantIdx;
		document.getElementById("dVar").value =  plantIdx;
	    document.getElementById("lVar").value =  plantIdx;	
	}	
};

function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /*loop through a collection of all HTML elements:*/
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /*make an HTTP request using the attribute value as the file name:*/
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /*remove the attribute, and call this function once more:*/
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }      
      xhttp.open("GET", file, true);
      xhttp.send();
      /*exit the function:*/
      return;
    }
  }
};

let jumptoAnchor = anchor => {
    window.location.href = "#" + anchor;
}

