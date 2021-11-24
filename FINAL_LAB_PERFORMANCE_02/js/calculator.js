$(document).ready(function(){
    $('input[type=button]').click(function(){
        var num = $(this).val();
        var old = $('#display').html();
        if( num === 'C' ){
            $('#display').html('');
            return;
        }
        if( num === '=' ){
            $('#display').html(old);
            return;
        }
        $.ajax({
                url:'../ajax.php',
                type: "POST",
                data:{'action':'mathOperation','num':num,'old':old},
                success: function(msg){
                    $('#display').html(msg);
                }
            }).error(function(){
                $('#display').html('Oops! An error occured');}
               );
    });
    $('#eql').click(function(){
        var num = $('#display').html();
        var old = $('#display').html();
        $.ajax({
                url:'../ajax.php',
                type: "POST",
                data:{'action':'equal', 'num':num, 'old':old},
                success: function(msg){
                    $('#display').html(msg);
                }
            }).error(function(){
                $('#display').html('Oops! An error Occured');}
               );
    });
});