(function(){

    'use strict';
    //Hide Placeholder On Form Focus
    $('[placeholder]').focus(function(){

        $(this).attr('data-text' , $(this).attr('placeholder'));
        $(this).attr('placeholder','');

    }).blur(function(){
        $(this).attr('placeholder',$(this).attr('data-text'));
    });



    //Add Asterisk On Required Field
    $('input').each(function(){

        if($(this).attr('required') === 'required'){

            $(this).after('<span class="asterisk">*</span>');
        } 
    });

    //Convert Password Field To Text Field On Hever

    var passField = $('.password');
    $('.show-pass').hover(function(){
        passField.attr('type' , 'text');
        },function(){
            passField.attr('type' , 'password');
        });


    //conformation message on delete botton

    $('.confirm').click(function(){

        return confirm('Are You Sure ????');

    });


});