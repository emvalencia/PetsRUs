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