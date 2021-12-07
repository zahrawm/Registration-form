<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link  rel="stylesheet" href="validate.css">

</head>
<body>
    <div class="container">
        <div class="header">
        <h2>Form</h2>
        
        </div>
        <form method ="POST" action="register.php" class="form  "> 
            <div class="form-control">
                <label>Firstname</label>
               <input type="text" name="first_name"placeholder="firstname">
            </div>
            <div class="form-control">
                <label>Lastname</label>
                <input type="text" name="last_name"placeholder="lastname">
               

            </div>
            <div class="form-control">
                <label>Email</label>
               <input type="text" name="email"placeholder="email">
                

            </div>
            <div class="form-control">
                <label>Password</label>
               <input type="text" name="pass_word"placeholder="password">
                

            </div>
            <div class="form-control">
                <label>Confirmed Password</label>
               <input type="text" name="confirmed pass_word"placeholder="confirmed_password">
            </div>

            <div class="form-control">
                <label>Phone Number</label>
               <input type="text" name="phone_number"placeholder="phone_number">
            </div>
            <div class="form-control">
                <label>Country</label>
               <input type="text" name="country"placeholder="country">
            </div>

            <div class="form-control">
                <label>City</label>
               <input type="text" name="city"placeholder="city">
            </div>
            <div class="form-control">
                <label>Gender</label>
               <input type="text" name="Gender"placeholder="gender">
            </div>
            <button  name="button" id="button">Submit</button>
        </form>
        

        
        </form>



        

    </div>

    
 
    
</body>
</html>

