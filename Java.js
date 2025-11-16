       function validateform(){
        //this is the function
            let form = document.formApp;
            //called back to the id of the form
            let fullname= form.txtfullname.value.trim();
            //i made it so full name would equal the name i gave my question
          let fullhomeadress = form.homeadress.value.trim();
            //i made it so home adress would equal the name i gave my question
            let yourexperince = form.Experince.value.trim();
            //i made it so experince would equal the name i gave my question
              let catsname = form.Name.value.trim();
                //i made it so the cats name would equal the name i gave my question
              let catsage = form.Age.value.trim();
                //i made it so cats age would equal the name i gave my question
            let message = document.getElementById("divmessage")
             //this is so the error pops up in the div
             let errors = [];
             //creates an array to store any errors
           
           

            if(fullname.length == 0){
                 errors.push("Enter your full name.");
              
            }
              
             if(fullhomeadress.length == 0){
                 errors.push("Enter your full Home Adress.");
                
            }

              if(yourexperince.length == 0){
                 errors.push("Please Enter your Experince.");
                
            }

             if(catsname.length == 0){
                errors.push("Please Enter the Cat's Name.");
                
            }

            if(catsage.length == 0){
                 errors.push("Please Enter the Cat's Age.");
               
            }
            //all of this adds an error message to the array


         
          
    if (errors.length > 0) {
        message.innerHTML = errors.join("<br>");
        return false; // Stop submission and shows all the errors
    }
       return true;
       //nothing happens if everything is correct

        }
        