$(document).ready(function(){
    var x = 'x';
    var o = 'o';
    var turns = 0;
    var spot1 = $('#spot1');
    var spot2 = $('#spot2');
    var spot3 = $('#spot3');
    var spot4 = $('#spot4');
    var spot5 = $('#spot5');
    var spot6 = $('#spot6');
    var spot7 = $('#spot7');
    var spot8 = $('#spot8');
    var spot9 = $('#spot9');
    $('#board li').on('click',function(e){
        if( spot1.hasClass('o') && spot2.hasClass('o') && spot3.hasClass('o') ||
            spot4.hasClass('o') && spot5.hasClass('o') && spot6.hasClass('o') ||
            spot7.hasClass('o') && spot8.hasClass('o') && spot9.hasClass('o') ||
            spot1.hasClass('o') && spot4.hasClass('o') && spot7.hasClass('o') ||
            spot2.hasClass('o') && spot5.hasClass('o') && spot8.hasClass('o') ||
            spot3.hasClass('o') && spot6.hasClass('o') && spot9.hasClass('o') ||
            spot1.hasClass('o') && spot5.hasClass('o') && spot9.hasClass('o') ||
            spot3.hasClass('o') && spot5.hasClass('o') && spot7.hasClass('o') 
        ){
            alert('o a gagné!');
            $('#board li').removeClass('disable');
            $('#boardl li').removeClass('o');
            $('#board li').removeClass('x');
            $('#board li').text('+');
        }else if( spot1.hasClass('x') && spot2.hasClass('x') && spot3.hasClass('x') ||
                spot4.hasClass('x') && spot5.hasClass('x') && spot6.hasClass('x') ||
                spot7.hasClass('x') && spot8.hasClass('x') && spot9.hasClass('x') ||
                spot1.hasClass('x') && spot4.hasClass('x') && spot7.hasClass('x') ||
                spot2.hasClass('x') && spot5.hasClass('x') && spot8.hasClass('x') ||
                spot3.hasClass('x') && spot6.hasClass('x') && spot9.hasClass('x') ||
                spot1.hasClass('x') && spot5.hasClass('x') && spot9.hasClass('x') ||
                spot3.hasClass('x') && spot5.hasClass('x') && spot7.hasClass('x') 
        ){
            alert('x a gagné!');
            $('#board li').removeClass('disable');
            $('#board li').removeClass('o');
            $('#board li').removeClass('x');    
            $('#board li').text('+');
        }else if(turns == 9){
            alert('égalité!');
            $('#board li').removeClass('disable');
            $('#board li').removeClass('o');
            $('#board li').removeClass('x');  
            $('#board li').text('+'); 
        }else if($(this).hasClass('disabled')){
            alert('cette case est déja remplie!');
        }else if(turns%2 == 0){
            turns++;
            $(this).text(o);
            $(this).addClass('disabled o');
            if( spot1.hasClass('o') && spot2.hasClass('o') && spot3.hasClass('o') ||
                spot4.hasClass('o') && spot5.hasClass('o') && spot6.hasClass('o') ||
                spot7.hasClass('o') && spot8.hasClass('o') && spot9.hasClass('o') ||
                spot1.hasClass('o') && spot4.hasClass('o') && spot7.hasClass('o') ||
                spot2.hasClass('o') && spot5.hasClass('o') && spot8.hasClass('o') ||
                spot3.hasClass('o') && spot6.hasClass('o') && spot9.hasClass('o') ||
                spot1.hasClass('o') && spot5.hasClass('o') && spot9.hasClass('o') ||
                spot3.hasClass('o') && spot5.hasClass('o') && spot7.hasClass('o') 
            ){
                alert('o a gagné!');
                turns = 0;
            }
        }else{
            turns++;
            $(this).text(x);
            $(this).addClass('disabled x');
            if( spot1.hasClass('x') && spot2.hasClass('x') && spot3.hasClass('x') ||
                spot4.hasClass('x') && spot5.hasClass('x') && spot6.hasClass('x') ||
                spot7.hasClass('x') && spot8.hasClass('x') && spot9.hasClass('x') ||
                spot1.hasClass('x') && spot4.hasClass('x') && spot7.hasClass('x') ||
                spot2.hasClass('x') && spot5.hasClass('x') && spot8.hasClass('x') ||
                spot3.hasClass('x') && spot6.hasClass('x') && spot9.hasClass('x') ||
                spot1.hasClass('x') && spot5.hasClass('x') && spot9.hasClass('x') ||
                spot3.hasClass('x') && spot5.hasClass('x') && spot7.hasClass('x') 
            ){
                alert('x a gagné!');
                turns = 0;
            }
        }
    });
     //REJOUER
    $('#rejouer').click(function(){
       location.reload();
    });
});