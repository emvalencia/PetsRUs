var phone_is_valid       = false;
var cc_is_valid          = false;
var all_fields_populated = false;

function check_fields_populated()
{
    var fields = 
    [
        document.forms['submit-order-form']['quantity-input'].value,
        document.forms['submit-order-form']['fname'].value,
        document.forms['submit-order-form']['lname'].value,
        document.forms['submit-order-form']['email'].value,
        document.forms['submit-order-form']['address-input'].value,
        document.forms['submit-order-form']['city-input'].value,
        document.forms['submit-order-form']['zip_code'].value,
        document.forms['submit-order-form']['csc-code'].value
    ]

    for(var f = 0; f < fields.length; f++)
    {
        if(fields[f] == "")
        {
            this.all_fields_populated = false;
            return;
        }

    }

    this.all_fields_populated = true;
}

function validate_form()
{
    this.phone_is_valid = false;
    this.cc_is_valid    = false;

    this.check_fields_populated();

    this.validateCCInput();
    this.validatePhoneInput();

    if(this.cc_is_valid && this.phone_is_valid && this.all_fields_populated)
        document.getElementById('checkout-btn').disabled = false;
    else
        document.getElementById('checkout-btn').disabled = true;
}

function validateCCInput()
{
    var re = /\b(?:\d{4}[ -]?){3}(?=\d{4}\b)/; 
    var credit_card = document.forms['submit-order-form']['credit-card'].value;
    var is_cc_valid = re.exec(credit_card);


    if (!is_cc_valid && credit_card != "")
        document.getElementById('credit-card').classList.add('is-invalid');  
    else if (is_cc_valid)
    {
        this.cc_is_valid = true;
        document.getElementById('credit-card').classList.remove('is-invalid');
        document.getElementById('credit-card').classList.add('is-valid');
    }
}

function validatePhoneInput()
{
    var re = /(?:\d{3}|\(\d{3}\))([-\/\.])\d{3}\1\d{4}/; 

    var phone_number = document.forms['submit-order-form']['phone-num-input'].value;
    var is_phone_valid = re.exec(phone_number); 

    if (!is_phone_valid && phone_number != "")
        document.getElementById('phone').classList.add('is-invalid');  
    else if(is_phone_valid)
    {
        this.phone_is_valid = true;
        document.getElementById('phone').classList.remove('is-invalid');
        document.getElementById('phone').classList.add('is-valid');  
    }  
}


function handleClick(element) {

    /* handle buy element */
    if (element == 'buy') {
        console.log('generate email');  
    } 

    /* handle other requests */
    else {
        console.log(element);

        /* switch to main pet page */
        if (element == 'dog') window.location.href = "dog.html";
        else if (element == 'cat') window.location.href = "cat.html";
        else if (element == 'reptile') window.location.href = "reptile.html";

        /* switch to dog pages */
        else if (element == 'dog-food') window.location.href = "dog-pages/dog-food.html";
        else if (element == 'dog-toy') window.location.href = "dog-pages/dog-toy.html";
        else if (element == 'dog-harness') window.location.href = "dog-pages/dog-harness.html";
        else if (element == 'dog-treat') window.location.href = "dog-pages/dog-treat.html";

        /* switch to cat pages */
        else if (element == 'cat-food') window.location.href = "cat-pages/cat-food.html";
        else if (element == 'cat-playground') window.location.href = "cat-pages/cat-playground.html";
        else if (element == 'cat-carrier') window.location.href = "cat-pages/cat-carrier.html";

        /* switch to reptile pages */
        else if (element == 'reptile-food') window.location.href = "reptile-pages/reptile-food.html";
        else if (element == 'reptile-habitat') window.location.href = "reptile-pages/reptile-habitat.html";
        else if (element == 'reptile-meds') window.location.href = "reptile-pages/reptile-meds.html";
        
        /* else */
        // window.location.href = "../error-page.html";
    }

}