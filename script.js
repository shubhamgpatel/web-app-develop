
function validate_name(evt) {
    var keyCode = (evt.which) ? evt.which : evt.keyCode
    if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
        return false;
    return true;
  }
  //name check when typing only takes characters--
 
window.onload = function() {
    var formHandle = document.forms[0];
    formHandle.onsubmit = processForm;

    function processForm() {
        var get_email = document.getElementById("email");
        var get_phone = document.getElementById("phone");
        // phone_error.innerHTML = "hello";

        var email_pattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
        var phone_pattern = /^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/;
                            //  +  digit 123           digit 456      digit 789    
                    // s check for non-whitespace
                    // * match 0 or many times
                    // + matches + character
                    //d  1-3 gets 3 digit
                    // $ termminator of strring
                    // -. matches single character
        if(!phone_pattern.test(get_phone.value)) {
            phone_error.innerHTML = "Please enter proper Phone number";
            // this.focus();
            return false;
        }

        if(!email_pattern.test(get_email.value)) {
            email_error.innerHTML = "Please enter proper mail";
            this.focus();
            return false;
        }
        alert("Thank you for submitting form!!");
    }
}
