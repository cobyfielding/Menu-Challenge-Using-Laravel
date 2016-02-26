# Applebee's Menu Challenge

In this challenge we had to re-create Applebee's menu using SQLITE database and laravel framework.  In order to complete the challenge, the menu had to be dynamically built using the database and a maximum of 2 php pages.  I also had to account for subcategories within categories, leaving a third type of data to account for.

## Process
I began the process by building a home categories page, and inserting 12 categories into the database.  Once I was able to display the categories on the homepage, I started working on the link structure.  The link structure is based on an ID variable being passed through the Route and into the controller. Once the variable reaches the controller function, the database is queried using the ID, and the corresponding items are then displayed on the next page.  In order to handle the situation where categories had subcategories, I put an if/else statement on the final view to display subcategories as links or items as a gallery. 

## Take Away
This is the first time I have built a dynamic page using laravel, and it was much easier than using just PHP.  The security features and background workings of laravel make completing projects like this incredibly fast and easy.
