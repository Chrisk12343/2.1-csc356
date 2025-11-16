  
        // this varible is going to the use the time that we set and convert it to seconds

            let intervalId = setInterval(function(){
                //code that repates, basically a timer

                  let currentTime = new Date().getTime();

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

            
            //set interval repates the code at whatever interval you set it as.
            //1000 = 1 second                                            
