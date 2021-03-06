# MDS Assessment Test Holidays

Create a small app that fetches South African public holidays for a given year and displays them on a page
 
### The Problem:
Use Laravel for the back-end.

Use Bootstrap for the front-end.

Fetch from http://kayaposoft.com/enrico.

Store the data locally

Fetch the data via a console job.

Add a link to download the holiday list as a pdf.

Create unit tests for the console job. Use PhpUnit.

Use git, with clear commits.

Clean code and inventiveness are valued.

Please add code to Github/Bitbucket/etc and send us the link.


### The Solution:
Please follow these steps to test.

Clone the git repo  **git clone git@github.com:zumbani/MDS_Assessment_Test_Holidays.git**

Then  run   **composer instal**l to install all the dependencies 

To generate the Application Encryprion Key , run the **php artisan key:generat**e command

**Step 1** . Create a MySQL Database

**Step 2** . Create a **.env** file from the .env.Example file in the home directory. 

**Step 3** . Configure **database parameters** in the **.env** file

**Step 4** . Run **php artisan migrate**  to create the table to hold the holidays

**Step 5** . Run **php artisan holidays:za 2022** to fetch the South African holiday for 2022. Change the year to fetch a different year.

**Step 6** . Run **php artisan serve** to fire the web server

**Step 7**. Fire the browser and go to the home page

**Step 8**. Click the **Download Pdf** link to download a pdf file containing the holidays

**Step 8**. Run **php artisan test --filter HolidaysTest**  to fire a test tofetch the holidays
