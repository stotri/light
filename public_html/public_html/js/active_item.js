$(document).ready(function() { 
      
       var locate = window.location.href;
       var cur_url = locate.split('/').pop();
   
       $('nav li').each(function () {
            var link = $(this).find('a').attr('href');
     
            if (cur_url == link)
            {
                $(this).addClass('current');
            } 
        });

});