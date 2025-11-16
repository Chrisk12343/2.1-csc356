<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CountDown</title>
   <link rel="stylesheet" href="main.css">
   <!---links the css file to the html-->
</head>
<body>
      <header>
        <?php include "menu.php";?>
<!---includes the menu in this file -->
        <center>
        <h1>The CountDown</h1>
        </center>
        <!--my h1 and center, centers whats ever inside it--->
    </header>
    <main>
        <center>
        <div id= "divcountdown" class = div1></div>
        <div id = "divmessage" class= div2></div>
        <!--- my divs for the countdown and messages-->
        </center>
    </main>
    <center>
    <p> 
        Our special launch includes 5 more kittens that are available to adopt.
    </p>
    <p2>
        So stop by and come take a look
    </p2>
    </center>
    <center>
    <img src="5cats.jpg"  >
    </center>
    
    <?php 
   
        $launchDateTime = strtotime(datetime: "November 25, 2025 14:00:00");
         //php variable to hold the time that i entered for my launch
         $jsDateTime = date(format:"F d, Y H:i:s", timestamp: $launchDateTime);
         //this formats the date we used
    ?>

   <script >
    let cdtimer = new Date("<?php echo "$jsDateTime";?>").getTime();
     // this varible is going to the use the time that we set and convert it to seconds
     // i tried to transfer this over to a seperate javascript file but this line would break when i trafered it over

            let intervalId = setInterval(function(){
                //code that repates, basically a timer

                  let currentTime = new Date().getTime();
                  //converts the date into milliseconds

                  const MS_IN_A_SECOND = 1000;
                  //constant variable that will not change. use caps!!
                  //milliseconds in a second
                  const MS_IN_A_MINUTE = MS_IN_A_SECOND * 60;
                    //milliseconds in a minute
                const MS_IN_A_HOUR = MS_IN_A_MINUTE * 60;
                    //milliseconds in a hour
                const MS_IN_A_DAY = MS_IN_A_HOUR * 24;
                    //milliseconds in a day

                    let Tdiff = cdtimer - currentTime;
                    //time differnce calc bewteen current time and launch time

                    let days = Math.floor(Tdiff / MS_IN_A_DAY)
                    // finds out how many days are left before launch

                    let hours = Math.floor((Tdiff % MS_IN_A_DAY) / MS_IN_A_HOUR);
                    //how many hours are left before launch

                    let minutes = Math.floor((Tdiff % MS_IN_A_HOUR) / MS_IN_A_MINUTE);
                     //how many minutes are left before launch

                    let seconds = Math.floor((Tdiff % MS_IN_A_MINUTE) / MS_IN_A_SECOND);
                     //how many seconds are left before launch

                    let divcountdown = document.getElementById("divcountdown")
                    //shortcut to div

                    divcountdown.textContent = days + " Days : " + hours + " Hours : " + minutes + " Minutes : " + seconds + " Seconds : ";
                    // Displays the time left before the launch

                    let divmessage = document.getElementById("divmessage")
                    //shortcut to div

                    if (Tdiff < 0){
                        clearInterval(intervalId)
                        divcountdown.textContent = "";
                        //if its after the launch then the message below will appear but no countdown will be showing
                        
                    divmessage.textContent = "Sorry but You Missed Our Kitty Launch.";
                    //missed the launch
                    }

                    else if (days < 4){
                         divmessage.textContent = "Less Than 4 Days Til Launch. Be Ready!";
                         //if its less then 4 days this message will appear

                     }

                     else{

                        divmessage.textContent = "Our Special Launch is Right Around the Corner.";
                        //this message will appear when the other two arent active
                     }





            }      
          
            , 1000);

            
            //set interval repeates the code at whatever interval you set it as.
            //1000 = 1 second        
   </script>
   
</body>
</html> 