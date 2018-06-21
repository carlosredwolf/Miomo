<!-- Make SPAN clickable on mobile devices -->
$('span').each(function() {
    this.onclick = function() {}
});

function foo() {
    alert("hi")
        // body...
}

/* función responsiva para el menú de terminos y condiciones*/
//document.getElementById("toggleM").addEventListener("click", toggleMenu1);
// document.getElementById("toggleMUser").addEventListener("click", toggleMenu2);

// 		$("#toggleMUser").on("click", function() {
// 			console.log("clicked 1");
// 			if ($(".nav-right .dropdown .dropdown-content").hasClass('menuNone')){
//  			// alert("tiene class none")
//  			$(".nav-right .dropdown .dropdown-content").removeClass("menuNone");
//    			$(".nav-right .dropdown .dropdown-content").addClass("menuBlock");
//   		}else{
//   			// alert("tiene class block")
//   			$(".nav-right .dropdown .dropdown-content").removeClass("menuBlock");
//    		$(".nav-right .dropdown .dropdown-content").addClass("menuNone");
//   		}
// });


function toggleMenu1() {
    $(".header_quiniela .responsive .dropdown .dropdown-content").removeClass("menuNone");
    $(".header_quiniela .responsive .dropdown .dropdown-content").addClass("menuBlock");
}

/* chunck para que jquery reconozca lossvg de font awesome  */
document.addEventListener('DOMContentLoaded', function() {

    $('#toggleMUser').on('click', function() {
        if ($(".nav-right .dropdown .dropdown-content").hasClass('menuNone')) {
            $(".nav-right .dropdown .dropdown-content").removeClass("menuNone");
            $(".nav-right .dropdown .dropdown-content").addClass("menuBlock");

        } else {
            alert("tiene class block")
            $(".nav-right .dropdown .dropdown-content").removeClass("menuBlock");
            $(".nav-right .dropdown .dropdown-content").addClass("menuNone");
        }
    });


});


// function toggleMenu2() {
// 	// alert("ho");
//    	if ($(".nav-right .dropdown .dropdown-content").hasClass('menuNone')){
//  			alert("tiene class none")
//    			$(".nav-right .dropdown .dropdown-content").removeClass("menuNone");
//    		$(".nav-right .dropdown .dropdown-content").addClass("menuBlock");
//   		}else{
//   			alert("tiene class block")
//       		$(".nav-right .dropdown .dropdown-content").removeClass("menuBlock");
//    		$(".nav-right .dropdown .dropdown-content").addClass("menuNone");
//   		}
// }


$(document).click(function(e) {
    if (!$(e.target).hasClass("dropbtn") && $(e.target).parents(".dropdown-content").length === 0) {
        // $(".dropdown").hide();
        // alert("hi");
        $(".dropdown .dropdown-content").removeClass("menuBlock");
        $(".dropdown .dropdown-content").addClass("menuNone");
    }
});

// Shrink Logo
$(function() {
    var shrinkLogo = 10;
    $(window).scroll(function() {
        var scroll = getCurrentScroll();
        if (scroll >= shrinkLogo) {
            $('.main-logo').addClass('main-logo-sizetwo');
            $('.main-logo').removeClass('main-logo-sizeone');
            $('.avatar').addClass('avatar-sizetwo');
            $('.avatar').removeClass('avatar-sizeone');
            $('.header_quiniela').addClass('main-menu-sizetwo');
            $('.header_quiniela').removeClass('main-menu-sizeone');
            $('.header_quiniela .navbar').addClass("margin-toptwo")
            $('.header_quiniela .navbar').removeClass("margin-topone");
            $('.nav-right .user').addClass("margin-toptwouser")
            $('.nav-right .user').removeClass("margin-toponeuser");
            $(".header_quiniela .responsive .dropdown .dropdown-content").width("77%");
        } else {
            $('.main-logo').addClass('main-logo-sizeone');
            $('.main-logo').removeClass('main-logo-sizetwo');
            $('.avatar').addClass('avatar-sizeone');
            $('.avatar').removeClass('avatar-sizetwo');
            $('.header_quiniela').addClass('main-menu-sizeone');
            $('.header_quiniela').removeClass('main-menu-sizetwo');
            $('.header_quiniela .navbar').addClass("margin-topone");
            $('.header_quiniela .navbar').removeClass("margin-toptwo");
            $('.nav-right .user').addClass("margin-toponeuser");
            $('.nav-right .user').removeClass("margin-toptwouser");
            $(".header_quiniela .responsive .dropdown .dropdown-content").width("70%");
        }
    });

    function getCurrentScroll() {
        return window.pageYOffset;
    }

    // $(".header_quiniela .navbar .avatar i:hover").clic(function(){
    // 	$(".header_quiniela .dropdown:hover .dropdown-content").addClass("dropDown");
    // });
    // $(document).on("click", ".square-radio", function () {
    //     $(this).toggleClass("square-radio--clicked");
    //  });

});

<!-- Sidenav -->
function openNav() {
    document.getElementById("sidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("sidenav").style.width = "0";
}

<!-- Modal Boxes -->
var modal = document.getElementsByClassName('modal-box');
var loginmodal = document.getElementById('login-modal');
// var loginbtn = document.getElementById("login-btn");
// var closelogin = document.getElementById("close-login-btn");

// loginbtn.onclick = function() {
// 	loginmodal.style.display = "block";
// }

// closelogin.onclick = function() {
// 	loginmodal.style.display = "none";
// }

window.onclick = function(event) {
    if (event.target == loginmodal) {
        loginmodal.style.display = "none";
    }
}
