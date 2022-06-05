(function($){
    "use strict";

    

})(jQuery);


// var header = document.getElementById("main-nav-tab");
// var btns = header.getElementsByClassName("active-btns");
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//   var current = document.getElementsByClassName("nav-actives");
//   current[0].className = current[0].className.replace(" nav-actives", "");
//   this.className += " nav-actives";
//   });
// };
 // $(document).ready(function(){ 
 //        $("#main-nav-tab a").click(function(e){
 //            e.preventDefault();
 //            $(this).tab();
 //        });
 //    });

 // patch vartical tab
 function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" patchactive", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " patchactive";
}
document.getElementById("defaultOpen").click();
 // patch vartical tab end

// Get the element with id="defaultOpen" and click on it

$("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
  $(e.target)
    .prev()
    .find("i:last-child")
    .toggleClass("fa-sort-down fa-caret-right");
});


 $('.btn-link').on("click", function(){
    var $arrows = $(this).find("i");
       $arrows.toggleClass("collapse-downarrow collapse-caret-right");
    });   


// slide toggleClass
$(document).ready(function(){

  $('.left-title-icon').on("click", function(){
    var $arrows = $(this).find("i");
    $(".knowledge-link-content").slideToggle(function(){
       $arrows.toggleClass("title-downarrow title-caret-right");
    });
    });   

 $('.left-title-icon2').on("click", function(){
    var $arrows = $(this).find("i");
    $(".knowledge-articles-content").slideToggle(function(){
       $arrows.toggleClass("title-downarrow title-caret-right");
    });
    });

 $('.left-title-icon3').on("click", function(){
    var $arrows = $(this).find("i");
    $(".knowledge-base-content").slideToggle(function(){
       $arrows.toggleClass("title-downarrow title-caret-right");
    });
    });

 $('.left-title-icon4').on("click", function(){
    var $arrows = $(this).find("i");
    $(".intheknowledge-content-main").slideToggle(function(){
       $arrows.toggleClass("title-downarrow title-caret-right");
    });
    });

     // patching-area
 $('.left-title-icon5').on("click", function(){
    var $arrows = $(this).find("i");
    $(".patching-area").slideToggle(function(){
       $arrows.toggleClass("title-downarrow title-caret-right");
    });
    });

 $('.left-title-icon6').on("click", function(){
    var $arrows = $(this).find("i");
    $(".PatchSearch-centent").slideToggle(function(){
       $arrows.toggleClass("title-downarrow title-caret-right");
    });
    });

$('.left-title-icon7').on("click", function(){
    var $arrows = $(this).find("i");
    $(".Plan-and-Patch-content").slideToggle(function(){
       $arrows.toggleClass("title-downarrow title-caret-right");
    });
    });

$('.left-title-icon8').on("click", function(){
    var $arrows = $(this).find("i");
    $(".technical-service-content").slideToggle(function(){
       $arrows.toggleClass("title-downarrow title-caret-right");
    });
    });

$('.left-title-icon9').on("click", function(){
    var $arrows = $(this).find("i");
    $(".non-technical-service-content").slideToggle(function(){
       $arrows.toggleClass("title-downarrow title-caret-right");
    });
    });


// Certification-Quick-Link
$('.left-title-icon10').on("click", function(){
    var $arrows = $(this).find("i");
    $(".Certification-Quick-Link-content").slideToggle(function(){
       $arrows.toggleClass("title-downarrow title-caret-right");
    });
    });

$('.left-title-icon11').on("click", function(){
    var $arrows = $(this).find("i");
    $(".Certification-Quick-Link-content1").slideToggle(function(){
       $arrows.toggleClass("title-downarrow title-caret-right");
    });
    });

$('.left-title-icon12').on("click", function(){
    var $arrows = $(this).find("i");
    $(".Certification-Quick-Link-content2").slideToggle(function(){
       $arrows.toggleClass("title-downarrow title-caret-right");
    });
    });
$('.left-title-icon13').on("click", function(){
    var $arrows = $(this).find("i");
    $(".Certification-Quick-Link-content3").slideToggle(function(){
       $arrows.toggleClass("title-downarrow title-caret-right");
    });
    });


$(".btnCross").click(function(){
  $(".text-editor-area").hide("slow");
});
$(".text-area-toggle").click(function(){
  $(".text-editor-area").toggle("slow");
})

$(".srbtn").click(function(){
  $(".text-editor-area2").hide("slow");
});

$(".text-area-toggle2").click(function(){
  $(".text-editor-area").toggle("slow");
})




});

