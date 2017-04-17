$(document).ready(function(){
    var all_error=$("#submit-all-error-box");
    var pass_error=$("#submit-pass-error-box");

    $('input#login, input#email, input#name, input#surname, input#pass1, input#pass2').unbind().blur( function(){

        var id = $(this).attr('id');
        var val = $(this).val();
        all_error.addClass('hidden');
        pass_error.addClass('hidden');
        
        switch(id)
        {
            
            case 'name':
                var rv_name = /^[a-zA-ZА-Яа-я]+$/; 
                

                if(val != '' && rv_name.test(val))
                {
                    $(this).addClass('not_error');
                    $(this).next('.error-box').addClass('hidden');
                }

                else
                {
                    $(this).removeClass('not_error').addClass('error');
                    $(this).next('.error-box').removeClass('hidden');
                }
                break;

            case 'email':
                var rv_email = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
                if(val != '' && rv_email.test(val))
                {
                    $(this).addClass('not_error');
                    $(this).next('.error-box').addClass('hidden');
                }
                else
                {
                    $(this).removeClass('not_error').addClass('error');
                    $(this).next('.error-box').removeClass('hidden');
                }
                break;

            case 'login':
                var rv_name = /^[a-zA-ZА-Яа-я0-9]+$/;

                if(val.length > 2 && val != '' && rv_name.test(val))
                {
                    $(this).addClass('not_error');
                    $(this).next('.error-box').addClass('hidden');
                }

                else
                {
                    $(this).removeClass('not_error').addClass('error');
                    $(this).next('.error-box').removeClass('hidden');
                }
                break;
            case 'surname':
                var rv_name = /^[a-zA-ZА-Яа-я]+$/; 

                if(val != '' && rv_name.test(val))
                {
                    $(this).addClass('not_error');
                    $(this).next('.error-box').addClass('hidden');
                }

                else
                {
                    $(this).removeClass('not_error').addClass('error');
                    $(this).next('.error-box').removeClass('hidden');
                }
                break;

        } // end switch(...)

    }); // end blur()


    $('form#form').submit(function(e){
        all_error.addClass('hidden');
        pass_error.addClass('hidden');
        var image=$("#image").val();
        if(($('.not_error').length == 4)&&(image!=''))
        {
            //passwords verifu
            var pass1=$("#pass1").val();
            var pass2=$("#pass2").val();
            if((pass1!=pass2)||(pass1 == '')||(pass1.length < 6)){
                $("#submit-pass-error-box").removeClass('hidden');
                e.preventDefault();
                return false;
            }
            //image
            if(image==''){
                $("#submit-all-error-box").removeClass('hidden');
                e.preventDefault();
                return false;
            }
        }
        else
        {
            $("#submit-all-error-box").removeClass('hidden');
            e.preventDefault();
            return false;
        }

    }); // end submit()

    var main_login=$("#error-login-box");
    var login=$("#main-login");
    var password=$("#main-password");
    var main_password=$("#error-pass-box");

    $('input#main-login, input#main-password').unbind().blur( function() {
        main_login.addClass('hidden');
        main_password.addClass('hidden');
    });

    $('form#sign').submit(function(e){
        var log=login.val();
        var pass=password.val();
        if(log == '')
        {
            main_login.removeClass('hidden');
            e.preventDefault();
            return false;
        }
        if(pass == '')
        {
            main_password.removeClass('hidden');
            e.preventDefault();
            return false;
        }
    }); // end submit()
    
    

}); // end script
