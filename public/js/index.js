

	$('span').each(function(){
		this.onclick = function() {}
	});

	// Shrink Logo
	$(function(){
	 var shrinkLogo = 10;
	  $(window).scroll(function() {
		var scroll = getCurrentScroll();
		  if ( scroll >= shrinkLogo ) {
			   $('.main-logo').addClass('main-logo-sizetwo');
			   $('.main-logo').removeClass('main-logo-sizeone');

			}
			else {
				$('.main-logo').addClass('main-logo-sizeone');
			    $('.main-logo').removeClass('main-logo-sizetwo');

			}
	  });
	function getCurrentScroll() {
		return window.pageYOffset;
		}

		$("#bloqueoDiv").click(function(){
			closeNav();
		});

		<!-- Modal Boxes -->
	// var modal = document.getElementsByClassName("modal-box");
	// var loginmodal = document.getElementById("login-modal");
	// var loginbtn = document.getElementById("login-btn");
	// var closelogin = document.getElementById("close-login-btn");
	//
	//
	// // loginbtn.onclick = function() {
	// // 	loginmodal.style.display = "block";
	// //
	// // }
  //   closelogin.onclick = function() {
	// 	loginmodal.style.display = "none";
	// }
	//
	// window.onclick = function(event) {
	// 	if (event.target == loginmodal) {
	// 		loginmodal.style.display = "none";
	// 	}
	//
	// }
});

	// Slideshow
	var slideIndex = 1;
	var slides = document.getElementsByClassName("slide");

	showSlides(slideIndex);

	setInterval(function () {
			showSlides(slideIndex);
			slideIndex++;
	}, 5000);

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("slide");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
		  slides[i].style.display = "none";
	  }
	  for (i = 0; i < dots.length; i++) {
		  dots[i].className = dots[i].className.replace(" active", "");
	  }

	  slides[slideIndex-1].style.display = "block";
	  dots[slideIndex-1].className += " active";
	}

	//Slideshow2
	var slideIndex2 = 1;
	var slides2 = document.getElementsByClassName("mySlides");

	showSlides2(slideIndex2);

	// setInterval2(function () {
	// 	showSlides2(slideIndex2);
	// 	slideIndex2++;
	// }, 5000);

	function currentSlide2(n){
	  showSlides2(slideIndex2 = n);
	}
	function plusSlides(n) {
  		showSlides2(slideIndex2 += n);
	}


	function showSlides2(n) {
	  var i;
	  var slides2 = document.getElementsByClassName("mySlides");
	  var dots2 = document.getElementsByClassName("dot2");
	  if (n > slides2.length) {slideIndex2= 1}
	  if (n < 1) {slideIndex2 = slides2.length}
	  for (i = 0; i < slides2.length; i++) {
		  slides2[i].style.display = "none";
	  }
	  for (i = 0; i < dots2.length; i++) {
		  dots2[i].className = dots2[i].className.replace(" active", "");
	  }
	  slides2[slideIndex2-1].style.display = "block";
	  dots2[slideIndex2-1].className += " active";
	}



	<!-- Sidenav -->
	function openNav() {
		// document.getElementById("sidenav").style.width = "30%";
		 document.getElementById("sidenav").classList.add("sidenavTam1");
		// document.getElementById("bloqueoDiv").style.width = "100%";
		document.getElementById("bloqueoDiv").style.width="100%";

	}



	$(".sidenav UL LI a").on('click', function () {
		closeNav();
    });

	function closeNav() {
		// document.getElementById("sidenav").style.width = "0";
		document.getElementById("sidenav").classList.remove("sidenavTam1");
		document.getElementById("bloqueoDiv").style.width="0";
	}
