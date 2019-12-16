# Restaurant-Management-webp
Restaurant Management Web Application

This is a Owner sided web app that makes a restaurant owner's life easier.
This maintains the stock present in the restaurant at every time and also inflow of orders out-flow of food stock.This mainly leads to a confusion in owner if they are using some old fashioned book techniques. Here we give all the room for the owner laziness and make all things happen at his finger tips.

Main Page:

-This just has the porfolio of the Restaurant.

-There is no limitation here owner can add anything here.

-There is a about and contact space given right at the bottum of the page where the details of the owner will be placed.

Registration Page:

-Here there are two forms namely Customer Registration and Worker Registration.

-The customer that comes to restaurant for the first time are asked to fill the form present in customer space.
    --This contains fields {name,password,customerID(as they wish),address and a radio button that asks whether they need a premium               account}.As soon as the Register button is pressed the details of the customer are saved.
    
-The details of worker that joins the restaurant are fill the form present in worker space.
    --This contains fields {name,workerID(as they wish),address,worker-pass(that only owner has),salary,phone number}.As soon as the Register button is pressed the details of the worker are saved.
 
 Menu Page:
 
-In this page menu of the restaurant is showed up.

-This contains the food items and respective food item IDs beside along with price.

Order Page:

- This contains segments 

-->Order food : Here a worker that goes to take the order from a table enter the order one by one along with the customer id.This ID is used to make bill,trace the table number of the customer through order-id,etc.

-->Book a Table : This takes the customer id and checks whether the customer has already booked a table and they are re-directed to the respective table. Else a new table is booked with that ID.(One customer can book only one table a time)

-->Free Table : When a customer leaves the restaurant the vacated table is made free for new booking later.(As date is included along with the details of the table bookings we can visualize that this bookings reset to be all free everyday).

-->Pay : When a customer pays his total bill his customer ID is entered here to make all his unpaid bills to zero.

-->Get Bill : Here when customer Id is enter this gives the total bill unpaid by the customer till now along with the details of food.

-->Get Table-Order : When the order number is entered the particular Table Number will be printed on the screen.

Owner Login Page : There is a hidden link in the contact section below in the main page with the text "I'm the owner".Clicking on that leads to the owner login page.

-This takes the owner ID and password.And clicking Let me in leads to the owner page.

Owner Page : 

- This contains segments

-->Add stock : Takes the food_item ID and quantity and add that amount of that food to the existing food stock records.

-->Get Customer Details : This takes customer ID and prints the details of the customer including the number of times visited and total amount paid till date.

-->Get amount details: Takes the date and gives the total amounts of food items made and total sold.

-->Get worker detals: Takes the worker ID and gives the details of worker.

--> Get Stock Details :This gives all the details of food items present in the restaurant.


Assumed that all the food items left will be given to the people in need at the end of every day :)
