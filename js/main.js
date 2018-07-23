
$(document).ready(function(){
   var myStr = '';
   var galleryLoaded = false;
   var currGalleryCell = 0;
   var maxGalleryCell = 2;

   $.ajaxSetup({cache: false, beforeSend: function(xhr){
      if (xhr.overrideMimeType)
      {
       xhr.overrideMimeType("application/json");
      }
   }});
   $.ajax({
      url:'projectList.json',
      dataType:'json',
      type:'get',
      cache:false,
      success: function(data){
         $(data.projects).each(function(index, value){
            $("."+value.label).next().append('<img class="nav-item" src="./projects/'+value.label+'/'+value.image+'.png">');
         });
      }
   });

   $(".pub_games").click(function(){
   	if($(".nav-stuff1").is(":hidden")){
   		$(".nav-content").slideUp();
   	   $(".nav-stuff1").slideToggle();
   	} else {
   		$(".nav-stuff1").slideUp();
   	}
   });

   $(".jam_games").click(function(){
   	if($(".nav-stuff2").is(":hidden")){
   		$(".nav-content").slideUp();
   	   $(".nav-stuff2").slideToggle();
   	} else {
   		$(".nav-stuff2").slideUp();
	   }
   });

   $(".oth_proj").click(function(){
   	if($(".nav-stuff3").is(":hidden")){
   		$(".nav-content").slideUp();
   	   $(".nav-stuff3").slideToggle();
   	} else {
   		$(".nav-stuff3").slideUp();
   	}
   });

   $("body").on('click', '.nav-item', function(e){
      if($("#projDisplay").hasClass("hidden")){
         $("#options").fadeOut("fast", function(){
            $(this).addClass("hidden");
            $.getJSON('projectList.json', function (response){
               $(response.projects).each(function(index, value){
                  if (value.image == $(e.target).attr('src').replace( /^.*?([^\/]+)\..+?$/, '$1' )){
                     $("#projGallery").empty();
                     $("#projName h1").text(value.name);
                     $("#projRole h3").text("Role: "+value.role);
                     $("#projTool h3").text("Tools Used: "+ value.tools);
                     $("#projDesc p").text(value.desc);
                     spawnGallery(value.gallery);
                  }
               });
            });
            checkPHP();
            $("#projDisplay").removeClass("hidden").fadeIn("fast");
         });
      } else {
         $("#projDisplay").fadeOut("fast", function(){
            $(this).addClass("hidden");
            $("#options").removeClass("hidden").fadeIn("fast");
         });
      }
   });

   function checkPHP(){
      if (!galleryLoaded){
         window.setTimeout(checkPHP, 100);
      } else {
            currGalleryCell = 0;
            $(".galleryCell:not(:eq(0))").hide();
            console.log(currGalleryCell + ", " + $('#projGallery > *').length);
            galleryLoaded = false;
      }
   }
 
   function spawnGallery (val){
      $.get("scandir.php", { folder: "img/" + val + "/" }, function(response){
         for (var i = 0; i < response.length; i++) {
            maxGalleryCell = response.length-1;
            $("#projGallery").append('<img class="galleryCell cell' + i + '" src="img/' + val + '/' + response[i] +'">');
         }
      });
      galleryLoaded = true;
      console.log ("My PHP call is done!");
   }

   
   $('#prev').click(function(){
      if ($('#projGallery > *').length > 1){
         if(currGalleryCell <= 0){
            currGalleryCell = maxGalleryCell;
         } else {
            currGalleryCell--;
         }
         changeGallery();
      }
      console.log(currGalleryCell);
   });
   $('#next').click(function(){
      if ($('#projGallery > *').length > 1){
         changeGallery();
         if(currGalleryCell >= maxGalleryCell){
            currGalleryCell = 0;
         } else {
            currGalleryCell++;
         }
      }
      console.log(currGalleryCell);
   });

   function changeGallery(){
      $(".cell"+currGalleryCell).fadeOut().next('.galleryCell').fadeIn().end().appendTo('#projGallery');
   }

   function mobileView(){
      if($("#desc").css("list-style-type") == "none"){
         $("#options_mobile").removeClass("hidden");
         $("#desc").detach().appendTo("#options_mobile");
         $("#sitepic").detach().appendTo("#options_mobile");
         $("#options").addClass("hidden");
      } else {
         $("#options").removeClass("hidden");
         $("#desc").detach().appendTo("#options");
         $("#sitepic").detach().appendTo("#options");
         $("#options_mobile").addClass("hidden");
      }
   }

   mobileView();
   $(window).resize(mobileView);
});

