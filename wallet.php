<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wallet1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://kit.fontawesome.com/00ee24977f.js" crossorigin="anonymous"></script>
    <title>Wallet</title>
</head>
<body>
        <nav>
            <h3 class="logo"> <a href="wallet1.php"><span class="pedal">Pedal</span>पे
                <p> <span class="pedal">ZERO EMISSION,</span>ZERO EXCUSES</p>
                </a>
            </h3>

            <div class="navbar">
                <ul>
                    <li> <a href="index.html">Home</a> </li>
                    <li> <a href="wallet1.html"> Wallet</a></li>
                    <li> <a href="about.html">About</a></li>
                    
                    <li>
                        <div class="profile">
                            <img src="img/profile.png" alt="">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="container">
            <div class="left column">
                <img src="img/waller.png" alt="">
            </div>
            <div class="right column">
                    <div class="balance">
                        
                        
                            <h1> Current Balance:</h1><h1><p id="display">100</p>
                                <button class="btn-start", id="addButton">Add ₹50<i class="fa-solid fa-arrow-right"></i></button>
                           
                         
                        
                       
                    </div>
            </div>
            </div>
            
                <script>
                    const display = document.getElementById("display");
                    const addButton=document.getElementById("addButton");
                    addButton.addEventListener("click",function()
                    {
                        const currentValue = parseInt(display.innerHTML);
                        const newValue = currentValue +50;
                        display.innerHTML=newValue;
                    });

                    
                </script>

              
    
    
</body>
</html>