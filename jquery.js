$(document).ready(
      function(){
//Es kodi shlis pliusikebs!!!
        $("#menu1").click(
          function(){
          if ($(".uns").height() == 0) {
            $(".uns").css("height","auto");
            $("#textus").css("font-size","16px").css("opacity","1");
            $("#yo").css("transform", "rotate(135deg)");
          }
          else {
            $(".uns").css("height","0px");
            $("#textus").css("font-size","0px").css("opacity","0");
            $("#yo").css("transform", "rotate(0deg)");
          }
        }
          );

        

        $("#menu2").click(
          function(){
          if ($(".truns").height() == 0) {
            $(".truns").css("height","auto");
            $("#textus2").css("font-size","16px").css("opacity","1");
            $("#yo1").css("transform", "rotate(135deg)");
          }
          else {
            $(".truns").css("height","0px");
            $("#textus2").css("font-size","0px").css("opacity","0");
            $("#yo1").css("transform", "rotate(0deg)");
          }
        }
          );

        $("#menu3").click(
          function(){
      
          if ($(".fours").height() == 0) {
            $(".fours").css("height","auto");
            $("#textus3").css("font-size","16px").css("opacity","1");
            $("#yo2").css("transform", "rotate(135deg)");
          }
          else {
            $(".fours").css("height","0px");
            $("#textus3").css("font-size","0px").css("opacity","0");
            $("#yo2").css("transform", "rotate(0deg)");
          }
        }
          );

        $("#menu4").click(
          function(){
            
          if ($(".faif").height() == 0) {
            $(".faif").css("height","auto");
            $("#textus4").css("font-size","16px").css("opacity","1");
            $("#yo3").css("transform", "rotate(135deg)");
          }
          else {
            $(".faif").css("height","0px");
            $("#textus4").css("font-size","0px").css("opacity","0");
            $("#yo3").css("transform", "rotate(0deg)");
          }
        }
          );
//Pliusikebis dashla morcha


//preloader
        $("#preloader").css("visibility","hidden").css("opacity","0");
//preloader end

//Dropdown menu Slideshow coming down boi
   		$(".link").hover(
        function(){
      	
      	$(".slideshow").css("margin-top","475px");
        $(".articles").css("margin-top","1175px");
        	}, 
       	function(){
        
        $(".slideshow").css("margin-top","100px");
        $(".articles").css("margin-top","800px");
    	});
      $(".dropdown").hover(
        function(){
        $(".slideshow").css("margin-top","475px");
        $(".articles").css("margin-top","1175px");
          }, 
        function(){
        $(".slideshow").css("margin-top","100px");
        $(".articles").css("margin-top","800px");
      });
//Slideshow Buttons boi
      $("#previous").hover(
        function(){
          $(".fa-angle-left").css("color","#00adef");
        },
        function(){
          $(".fa-angle-left").css("color","white");
        }
        );
      $("#next").hover(
        function(){
          $(".fa-angle-right").css("color","#00adef");
        },
        function(){
          $(".fa-angle-right").css("color","white");
        }
        );
    });