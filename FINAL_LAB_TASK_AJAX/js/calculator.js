$(document).ready(function(){
    //general
    $('input[type=button]').click(function(){
        var num = $(this).val();
        var old = $('#display').html();
        //this will clear the screen
        if( num === 'C' ){
            $('#display').html('');
            return;
        }
        if( num === '=' ){
            $('#display').html(old);
            return;
        }
        //var str = $('#display').val()+num;
        $.ajax({
                url:'../ajax.php',
                type: "POST",
                data:{'action':'operation','num':num,'old':old},
                success: function(msg){
                    $('#display').html(msg);
                }
            }).error(function(){
                $('#display').html('Oops! An error occured');}
               );
    });
    //equal button click
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
                $('#display').html('Oops! An error occured');}
               );
    });
});