$(document).ready(function(){
        $('.navbar-nav .nav-link').click(function(){
            $('.navbar-nav .nav-link').removeClass('active');
            $(this).addClass('active');
        });
        $('.navbar-collapse li').click(function(){ $(".navbar-collapse").collapse('hide');});
        
      });
