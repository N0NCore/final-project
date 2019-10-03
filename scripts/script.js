$(document).ready(function(){

    $('.materialboxed').materialbox();
     $('.parallax').parallax();
       $('.sidenav').sidenav();

      
      if(window.location.hash) {

        var hashtag = window.location.hash;
        var newHash = hashtag.replace("#", "");
        openCity(null, newHash);
        
      } 


  });


$(window).on("load", function(){


	setTimeout(function(){
		var audio = new Audio('images/roar.mp3');

		var audio = new Audio('');

		audio.play();

	}, 5000);
})



function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  if(evt) {
    evt.currentTarget.className += " active";
  }
  
}


const elemsDropdown = document.querySelectorAll(".dropdown-trigger");
const instancesDropdown = M.Dropdown.init(elemsDropdown, {
    coverTrigger: false
});
const elemsSidenav = document.querySelectorAll(".sidenav");
const instancesSidenav = M.Sidenav.init(elemsSidenav, {
    edge: "left"
});

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


