/------------------------------------------------------------------------------
    Authors:
    Emery Valencia, SID: 59325878, netid: emvalenc
    Jose Vargas, SID: 10816068, netid: kflorio
    Kevin Florio, SID: 14677838, netid: josev3 
/------------------------------------------------------------------------------

/------------------------------------------------------------------------------
GENERAL WEBSITE INFORMATION 
/------------------------------------------------------------------------------

Website URL: http://centaurus-3.ics.uci.edu:1027/index.html

General Description 
PetsRUs is a simple, interactive e-commerce website generated with HTML, CSS, JS, 
and Bootstrap. The website contains a homepage, about page, and multiple product 
pages. Each product page contains a form that allows the user to input information,
such as name, shipping address, and payment information, to buy the product, as per 
project guidelines.

index.html
The index.html file leads to the website's homepage. The top of the website has
consists of a navigation bar that will take you to 3 sections: the homepage, 
the about page, and the main (all) products page. The 3rd tab has a dropdown menu
that will navigate to 4 different categories of pet items based on pet type (all, 
dog, cat, and reptile). 

about.html
The about.html page contains information about PetsRUs, including redirections to
product pages and information about the management team. 

product-pages
Clicking on tab dropdowns in the products tab will take you to the main page
for each pet type or all products. Each of those product pages has a list of all 
products available for that pet. Clicking on the "more info" button or product 
picture will lead you to that individual product's page. The product page contains 
additional information about a product, key features, and a product order form. 

order form
The order form collects and verifies information required to order the product 
and open an email. Fill in the form to completion and click on the "checkout"
button to continue with the transaction and open the email. Note that we only 
ship to 3 states! 

/------------------------------------------------------------------------------
REQUIREMENTS SECTION 
/------------------------------------------------------------------------------

1. An overview of your business, the products you sell, the management team, and 
any other information that you think makes sense for the customers to know about 
your company.  
 
This information is located in the about page and about.html

2. Display a list of products (at least 10) available for sale in a table with 
multiple rows and column, where each product is shown within a separate cell.

This information is located in all product main pages (allproducts.html, cat.html, 
dog.html, reptile.html)

3. Display an image for each product available for sale in each cell.

This information is located in all product main pages (allproducts.html, cat.html, 
dog.html, reptile.html)

4. Display the price and other key information (e.g., color, material, etc.) 
associated with each product in the corresponding table cell.

This information is located in all product main pages (allproducts.html, cat.html, 
dog.html, reptile.html)

5. The user should be able to choose a product from this table by clicking on 
the corresponding image, which should lead to a new page that provides additional 
details about the product, e.g., more images, detailed description, etc. 

This information is located in all product main pages (allproducts.html, cat.html, 
dog.html, reptile.html), clicking on the images or the "more info" button leads you 
to that individual product page

6. On the detailed description page, the user should be able to order a product 
by filling a form. The form should allow the user to enter the product identifier, 
quantity, first name, last name, phone number, shipping address, shipping method 
(e.g., overnight, 2-days expedited, 6-days ground), credit card information, and 
anything else that you think makes sense for your business.

This is located in individual product pages (all html files in the cat-pages, 
dog-pages, and reptile-pages directories). The form is located at the bottom of 
the page and prompts the user for specific information

7. Upon submitting the form, the website should send an email with the purchase 
order information included in the body of the email. Note that to send an email, 
one needs to connect to the SMTP server, which is not possible with the client 
side software. Thus, this requirement simply requires bringing up the email 
client with the purchase order information included in the body of the email 
and allowing the user to send the email. 

On each individual product page there is a form, once the form has been correctly
filled out and the "checkout" button is pressed, an email pops up with the order
information

8. Before submitting the form, it should be checked for proper formatting, 
including whether all fields are filled properly, whether the phone number, 
address, and credit card are properly formatted, etc. An alarm should be raised 
if a field is empty or not properly formatted to prevent submission of bad data. 

The form checks the requirements for certain fields as it's being typed on each 
individual product page

9. Your website should use CSS to specify at least 10 stylistic properties for 
your website, such as the background for your table, the color and size of your 
font, the size of your images, and other stylistic preferences you may have.

We have multiple 10+ stylistic properties in both styles.css and products.css.
In particular, we alter the background color, add background photos, use 
Bootstrap grids for placement and manipulation of tables and page components, 
change the font size and family of text, add padding and margins where necessary, 
alter opacity, have hover options, have card flipping  in the about.html page, 
alter the width and height of images, and more.

10. Provide the ability to track the mouse movement, such that when the mouse 
moves over a product image, the size of the image is increased, and when the 
mouse moves out, the size of the image is returned back to normal. This feature 
can be implemented on either the page that displays the various products, or 
on the pages that show the details of each product, or both.

This ability is located in the main product pages (allproducts.html, cat.html,
dog.html, and reptile.html). When the mouse hovers over the picture of an item, 
it enlarges and when the mouse is removed, it goes back to it's normal size

11. Print the name of group members on the webpage.

This is located on the footer of every page

/------------------------------------------------------------------------------
ADDITIONAL INFORMATION
/------------------------------------------------------------------------------

References and sources for product information: petco.com, chewy.com, walmart.com