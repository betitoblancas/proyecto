$(document).ready(function() {
    $('#salir').click(function(){
        $.ajax({
            type:"POST",
            url: 'control/control_salida.php',
            success:function(r){
                if(r==1){
                    window.location="inicio";
                }else{
                    window.location="inicio";
                }
            }
        }); 
    });
   
});