<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride To Mars:Application</title>

    <link rel="stylesheet" href="main.css">
    <!--links the css file to this file-->

    <script src= "Java.js"></script>
    <!---links the javascript to this-->
</head>
<body>
    <header>
        <?php include "menu.php";?>
        <!---includes the menu-->
        <h1>Welcome to our Pilot Application</h1>
        <!---my h1-->
    </header>
    <main>
        <h2>fill out our form below to join our company as a pilot</h2>
        <!--my h2-->
        <center>
        <div id="divmessage" class= "div">
             <!--i gave my div a class and id so i can put them in the java script and css-->
        </div>
        </center>
        
        <center>
       <form method="post" id="formApp" name="formApp" action="app.php" onsubmit="return validateform();">
        <!-- this has the id and the function is it-->
        <label for="txtfullname">Your First and Last name:</label>
        <!--i gave the label a name and what i want to say in it-->
        <input type="text" id="txtfullname" name="txtfullname" placeholder="Jack Krawczyk">
        <!-- i gave the lebel an id and a placeholder so the user knowns what to type-->
       
   
        
        <label for="homeadress">Full Home Adress:</label>
        <input type="text" id="homeadress" name="homeadress" placeholder="1507 West Ave Mcherny IL">

        <label for="Experince">Experince with Animals:</label>
        <input type="text" id="Experince" name="Experince" placeholder="I have had 3 cats before">

        <label for="Name">Name of the Cat You Want:</label>
        <input type="text" id="Name" name="Name" placeholder="Bob">

                <label for="Age">Age of the Cat You Want:</label>
        <input type="text" id="Age" name="Age" placeholder="1">
        <!---i combined everything in one form so that i can make one submit button for them-->
       
        <input type="submit" value="Submit" class="button">
        <!--this is the buttom and i gave it a class so i can edit it in  the css file-->
       </form>
</center>
 
    </main>
</body>
</html>