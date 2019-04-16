function handleClick(element) {

    /* handle buy element */
    if (element == 'buy') {
        console.log('buy clicked');
    } 

    /* handle other requests */
    else {
        console.log(element);

        /* switch to pet page */
        if (element == 'dog') window.location.href = "dog.html";
        else if (element == 'cat') window.location.href = "cat.html";
        else if (element == 'reptile') window.location.href = "reptile.html";

        /* switch to product pages */
        else if (element == 'dog-food') window.location.href = "dog-food.html";
        
    }

}