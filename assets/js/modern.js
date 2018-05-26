$(window).on("load", function(){     
"use strict";

$.ready.then(function(){				  
 // intro begin
 var count = 0;
 // page number of frame intro
 var pagenum = 1;
 var playing = true;
 var idSound = $('#playerintro');
 var loader = $('.preloader');
 var n = document.getElementById('playerintro');
 var eleintro = $('#introSlidertext, .lineintro, .talentintro, .taglineintro, .triangle-botright, .triangle-topleft');
 var box = $('#boxintro');
 var boxskip = $('#boxskip');
 var webbackground = $('#webbackground');
 
 webbackground.hide();

 //preloader
 loader.fadeOut('fast', function() {
   box.fadeIn(0);
   
   // start sound
   idSound[0].volume = 0;
   idSound.animate({
     volume: 0.5
   }, 3000);
   n.play();

   //sound button
   $('.equalizer').on('click', function(e) {
	 $('.equalizer span').toggleClass('intro');
     if (playing === false) {
       n.play();
       playing = true;
       idSound[0].volume = 0;
       idSound.animate({
         volume: 0.5
       }, 1000);
     } else {
       playing = false;
       idSound[0].volume = 0.5;
       idSound.animate({
         volume: 0
       }, 1000);
     }
   });
   setTimeout(animationstart, 1000);
 });
 
 $(function() {
    var slideBegin = 2000,
        transSpeed = 300,
        simple_slideshow = $('#introSlidertext'),
        listItems = simple_slideshow.children('h3'),
        listLen = listItems.length,
        i = 0,
        changeList = function() {
            listItems.eq(i).fadeOut(transSpeed, function() {
                i += 1, i === listLen && (i = 0), listItems.eq(i).fadeIn(transSpeed)
            })
        };
    listItems.not(':first').hide(), setInterval(changeList, slideBegin);
 });

 // animation intro start
 function animationstart() {
   count++;
   window.page = $('#frame' + count).each(function() {
     var $this = $(this);
     var timeframe = $(this).attr('data-frame');
     if (count === pagenum) {
     setTimeout(animOut, timeframe);
        } else {
     setTimeout(animress, timeframe);
     }
   });
   page.fadeIn(1000);
   
   $([eleintro]).each(function(index, foundElements) {
           foundElements.each(function(element) {
            var $this = $(this);
            var time = $(this).attr('data-time');
            setTimeout(function() {
            $this.addClass('intro');
            }, time);
        });
    });
   $([eleintro]).each(function(index, foundElements) {
           foundElements.each(function(element) {
            var $this = $(this);
            var time = $(this).attr('data-time');
            setTimeout(function() {
            $this.addClass('intro');
            }, time);
        });
    });
 }

 // animation intro end
 function animress() { 
   page.fadeOut(1000);
   eleintro.removeClass('intro');
   setTimeout(animationstart, 1000);
 }
 
 // end intro function
 function animOut(){
     $('.triangle-botright').addClass('fadeOutRight');
	 $('.triangle-topleft').addClass('fadeOutLeft');
	 setTimeout(function() {
	 $('.contentintro').addClass('fadeOut');
	 }, 300);
	 setTimeout(mainpage, 1000);
 }
 // end intro

// start website
function mainpage(){ 
    box.remove();
	webbackground.fadeIn('slow');
    // variable navigation
    var Mc1  = $('#wrappermodern');
    var Mc2  = $('#wrapfooter').show();
    var Mcimg1  = $('.bgmodern img');
    var Mctoggle = $('.sidebar-nav li a');
    var Mciconmenu = $('.anim-nav');
    
    // element variable page
    var elepage = $('div, h1, h2, h3, h4, h5, p, ul, li, .modernicon, .modernbutton');
    
    // page var
    var idx = $('#home');
    var abt = $('#about');
    var resume = $('#resume');
    var skill = $('#skill');
    var porto = $('#portofolio');
    var contact = $('#contact');
	var holdside = $('.holdsidebar');

    // responsive
    if($(window).width() < 1025){
    idx.fadeIn(2000);
	page();
    Mc1.removeClass('toggled');
    Mc2.addClass('opacino');
    Mcimg1.css('position', 'fixed');
    
    // menu toggle
    Mctoggle.on('click', function() {
        Mctoggle.removeClass('active');
        $(this).addClass('active');
        Mciconmenu.toggleClass('open');
        Mc1.toggleClass('toggled');
        Mc2.toggleClass('opacino');
        Mc2.toggleClass('opaci');
    });
    // end responsive
    }else{	
    // desktop    
    ($(window).width() > 1025)
	idx.fadeIn(2000);
	page();
    Mc2.removeClass('opacino');
    Mcimg1.css('position', '');
    Mc1.addClass('toggled');
    // end desktop
    }
    
    // menu toggle
      Mciconmenu.on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('open');
        Mc1.toggleClass('toggled');
        Mc2.toggleClass('opacino');
        Mc2.toggleClass('opaci');
    });
    
    // menu active
    Mctoggle.on('click', function() {
        Mctoggle.removeClass('active');
        $(this).addClass('active');
    });

//slideshow home start
$(function() {
    var slideBegin = 8000,
        transSpeed = 800,
        simple_slideshow = $('#homeSlider'),
        listItems = simple_slideshow.children('.bgmodern'),
        listLen = listItems.length,
        i = 0,
        changeList = function() {
            listItems.eq(i).fadeOut(transSpeed);
            i += 1, i === listLen && (i = 0), listItems.eq(i).fadeIn(transSpeed);
        };
    listItems.not(':first').hide(), setInterval(changeList, slideBegin);
});

$(function() {
    var slideBegin = 3000,
        transSpeed = 500,
        simple_slideshow = $('#homeSlidertext'),
        listItems = simple_slideshow.children('h3'),
        listLen = listItems.length,
        i = 0,
        changeList = function() {
            listItems.eq(i).fadeOut(transSpeed, function() {
                i += 1, i === listLen && (i = 0), listItems.eq(i).fadeIn(transSpeed)
            })
        };
    listItems.not(':first').hide(), setInterval(changeList, slideBegin);
});
//slideshow home end
      
    
    // function page
    $('#home-btn').on('click', function(e) {
    e.preventDefault();
	holdside.show();
	$(".current").fadeOut(1200, function() {
				pagereset();						 
                idx.fadeIn(2000);
                $(".current").removeClass("current");
                idx.addClass("current");
				page();
            });
    });
    
    $('#about-btn').on('click', function(e) {
    e.preventDefault();
	holdside.show();
	$(".current").fadeOut(1200, function() {
				pagereset();						 
                abt.fadeIn(2000);
                $(".current").removeClass("current");
                abt.addClass("current");
				page();
            });
    });
    
    $('#resume-btn').on('click', function(e) {
    e.preventDefault();
	holdside.show();
	$(".current").fadeOut(1200, function() {
				pagereset();						 
                resume.fadeIn(2000);
                $(".current").removeClass("current");
                resume.addClass("current");
				page();
            });
    });
    
    $('#skill-btn').on('click', function(e) {
    e.preventDefault();
	holdside.show();
	$(".current").fadeOut(1200, function() {
				pagereset();						 
                skill.fadeIn(2000);
                $(".current").removeClass("current");
                skill.addClass("current");
				page();
            });
    });
    
    $('#porto-btn').on('click', function(e) {
    e.preventDefault();
	holdside.show();
	$(".current").fadeOut(1200, function() {
				pagereset();						 
                porto.fadeIn(3000);
                $(".current").removeClass("current");
                porto.addClass("current");
				page();
            });
    });
    
    $('#contact-btn').on('click', function(e) {
    e.preventDefault();
	holdside.show();
	 $('#contact-btn').addClass("active");
	$('#home-btn').removeClass("active");
	$(".current").fadeOut(1200, function() {
				pagereset();						 
                contact.fadeIn(2000);
                $(".current").removeClass("current");
                contact.addClass("current");
				page();
            });
    });
    // function page end

// start animation
function page(){
     $([elepage]).each(function(index, foundElements) {
           foundElements.each(function(element) {
            var $this = $(this);
            var time = $(this).attr('data-time');
            setTimeout(function() {
            $this.addClass('intro');
            }, time);
        });
        setTimeout(function () {
        holdside.hide();}, 2500
        );
    });
}

// reset animation
function pagereset(){
    elepage.removeClass('intro');
    $(':input','#form1', '#emailSubscribe').val('');
    $('#error_message, #error_email', '.message').fadeOut(1500);
    $('#error_message').fadeOut(500);
    $('#error_email').fadeOut(500);
    $('#mail_success').fadeOut(500);
	$("#subscribeemail").val("");
	$("form#subscribe .subscribeerror").remove();
}

// Subscribe
$("form#subscribe").submit(function() {
$("form#subscribe .subscribeerror").remove();
 var s = !1;
 if ($(".subscribfield").each(function() {
   if ("" == jQuery.trim($(this).val())) $(this).prev("label").text(), $(this).parent().append('<span class="subscribeerror">Please fill your email</span>'), $(this).addClass("inputError"), s = !0;
   else if ($(this).hasClass("subscribeemail")) {
    var e = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    e.test(jQuery.trim($(this).val())) || ($(this).prev("label").text(), $(this).parent().append('<span class="subscribeerror">Please fill valid email</span>'), $(this).addClass("inputError"), s = !0)
   }
  }), !s) {
  $("form#subscribe input.submit").fadeOut("slow", function() {
   $(this).parent().append("")
  });
  var e = $(this).serialize();
  $.post($(this).attr("action"), e, function() {
   $("form#subscribe").fadeIn(1e3, function() {
    $(".subscribesuccess").fadeIn(1e3)
   }), setTimeout(function() {
    $("#subscribeemail").val(""), $(".subscribesuccess").hide()
   }, 2500)
  })
 }
 return !1
});


// contact form
$(function(){$('#send').on('click', function(e) {
e.preventDefault();var e=$('#name').val(),a=$('#email').val(),s=$('#message').val(),r=!1;if(0==a.length||"-1"==a.indexOf("@")||"-1"==a.indexOf(".")){var r=!0;$("#error_email").fadeIn(500)}else $("#error_email").fadeOut(500);if(0==s.length){var r=!0;$("#error_message").fadeIn(500)}else $("#error_message").fadeOut(500);return 0==r&&($("#send").attr({disabled:"true",value:"Loading..."}),$.ajax({type:"POST",url:"send.php",data:"name="+e+"&email="+a+"&subject=You Got Email&message="+s,success:function(e){"success"==e?($(".smart-btn").remove(),$("#mail_success").fadeIn(500)):($("#mail_failed").html(e).fadeIn(500),$("#send").removeAttr("disabled").attr("value","send").remove())}})),!1})});
}
// end website



/*
*
plugin start
*
*/

// Magnific Popup - v0.9.9
$('.big-img').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: false,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title');
            }
        }
    });

});

// counter modern
function count(e){
 var current = parseInt(e.html(), 10);
	current = current + 1; 
	e.html(++current);
	if(current > e.data('count')){
	e.html(e.data('count'));
	} else {    
	setTimeout(function(){count(e)}, 50);
   }
 }        	
  $(".stat-count").each(function() {
  $(this).data('count', parseInt($(this).html(), 10));
  $(this).html('0');
  count($(this));
});


// owlCarousel testimonial
var owl = $("#owl-testimonial");
   owl.owlCarousel({
   items : 1,
    itemsDesktop : [1000,1], 
   itemsDesktopSmall : [900,1], 
   itemsTablet: [600,1],
   itemsMobile : false,
   autoPlay : 3000,
   stopOnHover : true
});
   
// owlCarousel our client
var owl = $("#owl-modern");
   owl.owlCarousel({
   items : 5, 
   itemsDesktop : [1000,4], 
   itemsDesktopSmall : [900,3], 
   itemsTablet: [600,2],
   itemsMobile : false,
   autoPlay : 1500,
   stopOnHover : true
});

/*
*
plugin end
*
*/


});