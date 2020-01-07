$('.bottom').click(function(){
    $("html, body").animate({ scrollTop: $(this.hash).offset().top }, 1000);
     return false; 
     });