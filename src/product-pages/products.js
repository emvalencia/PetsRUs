function handleClick(element) {

    /* handle buy element */
    if (element == 'buy') {
        console.log('buy clicked');
    } 

    /* handle other requests */
    else {
        console.log(element);

        /* switch to main pet page */
        if (element == 'dog') window.location.href = "dog.html";
        else if (element == 'cat') window.location.href = "cat.html";
        else if (element == 'reptile') window.location.href = "reptile.html";

        /* switch to dog pages */
        else if (element == 'dog-food') window.location.href = "dog-food.html";
        else if (element == 'dog-toy') window.location.href = "dog-toy.html";
        else if (element == 'dog-harness') window.location.href = "dog-harness.html";
        else if (element == 'dog-treat') window.location.href = "dog-treat.html";

        /* switch to cat pages */
        else if (element == 'cat-food') window.location.href = "cat-food.html";
        else if (element == 'cat-playground') window.location.href = "cat-playground.html";
        else if (element == 'cat-carrier') window.location.href = "cat-carrier.html";

        /* switch to reptile pages */
        
    }

}