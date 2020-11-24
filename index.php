<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
    <header class="page_name">Class 12A</header>
    <section class="page_body">
        
        <form class="signup-form" id="box" action="includes/signup.inc.php" method="post">
            <div class="signup-items">
                <h2 class"sign-up">Sign Up</h2>
                <input type="text" name="F_name" id="In1" placeholder="&#xf2bb; : First Name" style="font-family:Arial, FontAwesome" autocomplete="off"><br>
                <input type="text" name="L_name" id="In2" placeholder="&#xf2bb; : Last Name" style="font-family:Arial, FontAwesome" autocomplete="off"><br>
                <input type="email" name="email" id="In3" placeholder="&#xf0e0; : E-mail" style="font-family:Arial, FontAwesome" autocomplete="off"><br>
                <input type="password" name="password" id="In4" placeholder="&#xf084; : Password" style="font-family:Arial, FontAwesome"><br>
                <button type="submit" class="signup-button">Sign Up</button><br>
                <button  class="login-button">Log In</button><br>
                
            </div>
            
        </form>
        <div class="logo">
            <img class="image1" src="images/1.png" alt="">
            <p class="welcome">Welcome to our website!</p>
            <p class="welcome">Not a bilingual?</p>
            <button class= "v-s-u">Visit Us</button>
        </div>
    </section>
</body>
</html>