function restoreFormData()
{
document.forms["contact1"]["Months"].value = getCookie("first name")
document.forms["contact1"]["Weeks"].value = getCookie("Weeks")
document.forms["contact1"]["Days"].value = getCookie("Days")]
document.forms["contact1"]["Hours"].value = getCookie("Hours")
}


setCookie("Months", Months, 90);
setCookie("Weeks", Weeks, 90);
setCookie("Days", Days, 90);
setCookie("Hours", Hours, 90);

}

function setCookie(cName, cValue, cExpiration) {
     var d = new Date();
     d.setTime(d.getTime() + (cExpiration*24*60*60*1000));
     var expireDate = "expires=" + d.toUTCString();
     document.cookie = cName + "=" + cValue + ";" + expireDate + ";path=/";
}

function getCookie(cName) {
     var cookieName = cName + "=";
     var decodedCookie = decodeURIComponent(document.cookie);
     var ca = decodedCookie.split(';');
     for(var i = 0; i < ca.length; i++) {
         var c = ca[i];
         while(c.charAt(0) == ' ') {
             c = c.substring(1);
         }
         if (c.indexOf(cookieName) == 0) {
              return c.substring(cookieName.length, c.length);
         }
       }
       return "";
}

