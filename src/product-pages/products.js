var phone_is_valid       = false;
var cc_is_valid          = false;
var email_is_valid       = false;
var all_fields_populated = false;
var ordernum = Math.floor((Math.random() * 10000000000));

function send_email()
{
    var email_address = document.forms['submit-order-form']['email-address'].value;
    var product_name  = document.getElementById('product-name').textContent;
    var product_desc  = document.getElementById('product-description').textContent;
    var product_id    = document.getElementById('product-id-num').textContent;
    var product_price = document.getElementById('product-price').textContent;
    var quantity      = document.forms['submit-order-form']['quantity'].value;
    var nl = "%0D%0A"

    var subject = "PetsRUs Purchase Confirmation: " + product_desc;
    var body    = "The following items were purchased: " + nl + nl +
                    "Product: " + product_name + nl + 
                    "Product Description: " + product_desc + nl +
                    "Total Items: " + quantity + ", Price (per item): " + product_price;

    window.open('mailto:' + email_address + '?subject=' + subject + '&body=' + body);
}

function updateAllStylings(element)
{
    if(element == 'credit-card')
        adjustCCInputStyles();
    else if(element == 'phone')
        adjustPhoneInputStyles();
    else if(element == 'email-address')
        adjustEmailStyles();
    else if(element == 'quantity')
    {
        if(isNaN(document.forms['submit-order-form']['quantity'].value))
        {
            document.getElementById(element).classList.add('is-invalid');
        }
        else
        {
            document.getElementById(element).classList.remove('is-invalid');
            document.getElementById(element).classList.add('is-valid');
        }
    }
    else if(element == 'csc')
    {
        if(isNaN(document.forms['submit-order-form']['csc'].value) || document.forms['submit-order-form']['csc'].value.length != 3)
        {
            document.getElementById(element).classList.add('is-invalid');
        }
        else
        {
            document.getElementById(element).classList.remove('is-invalid');
            document.getElementById(element).classList.add('is-valid');
        }
    }
    else
    {
        if(!document.forms['submit-order-form'][element].checkValidity())
        {
            if(document.getElementById(element) != null)
            {
                document.getElementById(element).classList.add('is-invalid');   
            }
        }
        else
        {
            document.getElementById(element).classList.remove('is-invalid');
            document.getElementById(element).classList.add('is-valid');
        }
    }
}

function check_fields_populated()
{
    var fields = ['quantity', 'first-name', 'last-name', 'inputAddress',
                  'inputCity', 'inputZip', 'csc', 'inputState', 'inputShipping', 'inputCreditCardType'];

    for(var f = 0; f < fields.length; f++)
    {
        if(document.forms['submit-order-form'][fields[f]].value == "")
        {
            this.all_fields_populated = false;
            return;
        }
    }

    if(isNaN(document.forms['submit-order-form']['quantity'].value))
    {
        this.all_fields_populated = false;
        return;
    }
    
    if(isNaN(document.forms['submit-order-form']['csc'].value) || document.forms['submit-order-form']['csc'].value.length != 3)
    {
        this.all_fields_populated = false;
        return;
    }

    this.all_fields_populated = true;
}

function validate_form(element)
{  
    this.phone_is_valid = false;
    this.cc_is_valid    = false;
    this.email_is_valid = false;

    this.validateCCInput();
    this.validatePhoneInput();
    this.validateEmailAddress();
    this.check_fields_populated();
    this.updateAllStylings(element);

    if(this.all_fields_populated && cc_is_valid && document.forms['submit-order-form']['credit-card'].value !="" && 
        phone_is_valid && document.forms['submit-order-form']['phone'].value != "" &&
        email_is_valid && document.forms['submit-order-form']['email-address'].value != "")
        {
            document.getElementById('checkout-btn').disabled = false;
        }
    else
        document.getElementById('checkout-btn').disabled = true;
}

function validateCCInput()
{
    var re = /\b(?:\d{4}[ -]?){3}(?=\d{4}\b)/; 
    var credit_card = document.forms['submit-order-form']['credit-card'].value;
    var is_cc_valid = re.exec(credit_card);

    if (!is_cc_valid || credit_card == "")
        this.cc_is_valid = false;  
    else if (is_cc_valid)
        this.cc_is_valid = true;
}

function adjustCCInputStyles()
{
    var re = /\b(?:\d{4}[ -]?){3}(?=\d{4}\b)/; 
    var credit_card = document.forms['submit-order-form']['credit-card'].value;
    var is_cc_valid = re.exec(credit_card);


    if (!is_cc_valid || credit_card == "")
        document.getElementById('credit-card').classList.add('is-invalid');  
    else if (is_cc_valid)
    {
        document.getElementById('credit-card').classList.remove('is-invalid');
        document.getElementById('credit-card').classList.add('is-valid');
    }
}

function validatePhoneInput()
{
    var re = /(?:\d{3}|\(\d{3}\))([-\/\.])\d{3}\1\d{4}/; 

    var phone_number = document.forms['submit-order-form']['phone'].value;
    var is_phone_valid = re.exec(phone_number); 

    if (!is_phone_valid || phone_number == "")
        this.phone_is_valid = false;  
    else if(is_phone_valid)
        this.phone_is_valid = true; 
}

function adjustPhoneInputStyles()
{
    var re = /(?:\d{3}|\(\d{3}\))([-\/\.])\d{3}\1\d{4}/; 

    var phone_number = document.forms['submit-order-form']['phone'].value;
    var is_phone_valid = re.exec(phone_number); 

    if (!is_phone_valid || phone_number == "")
        document.getElementById('phone').classList.add('is-invalid');  
    else if(is_phone_valid)
    {
        document.getElementById('phone').classList.remove('is-invalid');
        document.getElementById('phone').classList.add('is-valid');  
    }  
}

function validateEmailAddress()
{
    var email = document.forms['submit-order-form']['email-address'].value;

    if (email != "")
    {
        var temp_add_arr = email.split("@");

        if (temp_add_arr.length > 1)
        {
            var email_host = temp_add_arr[1].split(".");

            if(email_host.length > 1 && email_host[1] != "")
            {
                this.email_is_valid = true;
                return;
            }
        }
    }
    else 
        this.email_is_valid = false;

}

function adjustEmailStyles()
{
    var email = document.forms['submit-order-form']['email-address'];

    if(!email_is_valid)
        document.getElementById('email-address').classList.add('is-invalid');
    else if(email_is_valid)
    {
        document.getElementById('email-address').classList.remove('is-invalid');  
        document.getElementById('email-address').classList.add('is-valid');  
    }
}

function handleClick(element) 
{
    /* switch to main pet page */
    if (element == 'dog') window.location.href = "dog.php";
    else if (element == 'cat') window.location.href = "cat.php";
    else if (element == 'reptile') window.location.href = "reptile.php";

    /* switch to dog pages */
    else if (element == 1000000004) window.location.href = "dog-pages/dog-food.php";
    else if (element == 1000000006) window.location.href = "dog-pages/dog-toy.php";
    else if (element == 1000000005) window.location.href = "dog-pages/dog-harness.php";
    else if (element == 1000000007) window.location.href = "dog-pages/dog-treat.php";

    /* switch to cat pages */
    else if (element == 1000000002) window.location.href = "cat-pages/cat-food.php";
    else if (element == 1000000003) window.location.href = "cat-pages/cat-playground.php";
    else if (element == 1000000001) window.location.href = "cat-pages/cat-carrier.php";

    /* switch to reptile pages */
    else if (element == 1000000008) window.location.href = "reptile-pages/reptile-food.php";
    else if (element == 1000000009) window.location.href = "reptile-pages/reptile-habitat.php";
    else if (element == 1000000010) window.location.href = "reptile-pages/reptile-meds.php";
    
    /* else */
    // window.location.href = "../error-page.html";
}

function getCityState(zip) {
      if (window.XMLHttpRequest) {
         var xhr = new XMLHttpRequest();
      }
      else {
         var xhr = new ActiveXObject ("Microsoft.XMLHTTP");
      }
    
      // updates the page with city after query
      xhr.onreadystatechange = function () { 
        if (xhr.readyState == 4 && xhr.status == 200) { 
            var result = xhr.responseText;
            document.getElementById ("inputCity").value = result;
        } 
      } 

      xhr.open ("GET", "getCityState.php?zip=" + zip, true);
      xhr.send ();  
    }


function getTaxRate(zip) {
    if (window.XMLHttpRequest) {
        var xhr = new XMLHttpRequest();
    }
    else {
        var xhr = new ActiveXObject ("Microsoft.XMLHTTP");
    }
    
    // updates the page with city after query
    xhr.onreadystatechange = function () { 
        if (xhr.readyState == 4 && xhr.status == 200) { 
            var result = xhr.responseText;
            document.getElementById ("tax-rate").value = result;
        } 
    } 

    xhr.open ("GET", "getTaxRate.php?zip=" + zip, true);
    xhr.send ();  
    }
 
     
 