$(document).ready(function(){  
    $('#submit').click(function(){  
         var temperature = $('#name').val();  
         var symptoms = $('#message').val();  
         var travel = $('#travel').val();
      
              $.ajax({  
                   url:"db.php",  
                   method:"POST",  
                   data:{name:name, message:message},  
                   success:function(data){  
                        $("form").trigger("reset");  
                        $('#success_message').fadeIn().html(data);  
                        setTimeout(function(){  
                             $('#success_message').fadeOut("Slow");  
                        }, 2000);  
                   }  
              });  
          
    });  
});  