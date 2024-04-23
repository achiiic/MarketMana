<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Mana - Registration</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-image: url('/webapplicationdev-main/1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    font-family: 'Assistant', sans-serif;
    margin: 0;
    padding: 0;
    overflow: hidden;
    
        }
        #brand-block {
            text-align: center;
            color: white;
            padding: 20px;
        }
        #container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin-top: 20px; 
        }
        #form-block {
            width: 400px; 
            background: rgba(255, 255, 255, .4);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-right: 10px; 
            margin-bottom: 20px; 
        }
        #image-container {
            width: 400px; 
        }
        #image-container img {
            width: 100%;
            height: 575px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        #logo-container {
            text-align: center;
            margin-bottom: 20px; 
        }
        #logo-container img {
            width: 700px; 
            height: auto;
            position: absolute;
            margin-left: -123px;
            margin-top:-50px;
            
        }
        h2 {
            font-size: 40px;
            margin-top:-20px;
            
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: Green;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            display: block;
            margin: 0 auto;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div id="brand-block">
    <h2>Sign Up</h2>
</div>
<div id="logo-container">
    <img src="/webapplicationdev-main/3.png" alt="Logo">
</div>
<div id="container">
    <div id="form-block">
        <form id="registration-form" method="POST" action="processes/process.user.php?action=new">
            <div id="form-block-half">
                <label for="fname">First Name</label>
                <input type="text" id="fname" class="input" name="firstname" placeholder="Your name.." required>

                <label for="lname">Last Name</label>
                <input type="text" id="lname" class="input" name="lastname" placeholder="Your last name.." required>

                <label for="access">Position</label>
                <select id="access" name="access" required>
                  <option value="staff">Staff</option>
                  <option value="supervisor">Supervisor</option>
                  <option value="Manager">Manager</option>
                </select>
            </div>
            <div id="form-block-half">
                <label for="email">Email</label>
                <input type="email" id="email" class="input" name="email" placeholder="Your email.." required>

                <label for="password">Password</label>
                <input type="password" id="password" class="input" name="password" placeholder="Enter password.." required>

                <label for="confirmpassword">Confirm Password</label>
                <input type="password" id="confirmpassword" class="input" name="confirmpassword" placeholder="Confirm password.." required>
                
            </div>
            <div id="button-block">
                <input type="submit" value="Save">
            </div>
        </form>
    </div>
    <div id="image-container">
        <img src="/webapplicationdev-main/2.jpg" alt="Image beside the form">
    </div>
</div>

<script>
    
</script>

</body>
</html>
