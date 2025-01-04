<!DOCTYPE html>
<html>
<head>
    <title>Eco_Friendly</title>
    <style>

header {
            color:black;
            padding: 20px;
            text-align:center;
        }


        body {
            font-family: Arial, sans-serif;
            background-image: url('imgs/eco2.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            
        }
        .content {
            display:flex; 
            flex-direction:column ;
            align-items: center;
            justify-content: space-around;
            height: 80vh; 
        }
        h1 {
            font-size: 65px;
            text-shadow: 2px 2px white;
            padding: 10px ; 
        }
        nav {
            text-shadow:0px 0px #000; 
            margin: 10px ;
        }
        .bounce {
            animation: bounce 10s infinite;
            margin: 5px 0; 
        }
        @keyframes bounce {
             20%, 50%, 80%, 100% {
            }
            40% {
             transform: translateY(-40px);   
            }
            60% {
                transform: translateY(-15px);
            }
        }
        .slide-in {
            transform: translateX(-100%);
            animation: slideIn 1.5s forwards;
            
        }
        @keyframes slideIn {
            from{ 
                
               }
            to {
               transform: translateX(0); 
            }
         }  
           .fade-in{
               animation:fadeIn 5s forwards;
               margin:5px;
           }
        @keyframes fadeIn {
            from {
                }    
            
         }
        .wiggle {
            animation: wiggle 10s ease-in-out infinite;
            
        }
        @keyframes wiggle{ 
             {
                
            }
             5% { 
               transform: rotate(-5deg); 
             }
            105% {
               transform: rotate(5deg); 
            }
            
        }
        footer {
            color: black;
            text-align: center;
        }
        footer a {
            color: black;
            margin:  10px;
            text-decoration: none;
        }

    </style>
</head>
<body>
<header>
    <h1>Eco Friendly Market Place</h1>
<nav>

       <a href="collection.html"  style="color: 
#702616;margin:15px;">Collection</a>
	
	<a href="about.html" style="color: 
#702616; margin:15px;">About</a>

        <a href="contact.html" style="color:
#702616; margin:15px;">Contact</a>

 <a href="login.html"  style="color: 
#702616;margin:15px;">Login</a>
    
</nav>
<script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;

            // Store user information in local storage
            localStorage.setItem('username', username);
            localStorage.setItem('email', email);

            // Redirect to profile page
            window.location.href = 'profile.html';
        });
    </script>


<div class="content">
    <div class="bounce">
<h1 style="font-size: 16px; color: red;"> 
 <div class="slide-in">
        
<nav>
    <a href="collections.html" style="color: red;">HurryUp! For the ontime Offers</a>  
</nav>
</form>
            <script>
                function redirectToShowcase(event) {
                    event.preventDefault(); 
                    window.location.href = "collection.html"; // Redirect to the showcase page
                }
            </script>


    </div></h1>
    </div>
    <div class="fade-in">
        <h1 style="font-size: 24px; line-height: 1.4; text-align: center; color: green;">
Welcome To Our Platform<br>To Get Your Best Quality Products</h1>
    </div>

    <div class="wiggle">
        
        <footer>
            <a href="#">57C Galle Road 12</a>
                <a href="mailto:zahfashion@gmail.com">Email - ecofriend@gmail.com</a>
                <a href="tel:07771234567">Contact - 07771234567 / 0672251234</a>
           
                
            </div>
        </footer>
           </div>


        <footer>
            &copy; 2024 Eco Friendly Market | All rights reserved. 
        </footer>
 
</body>
</html>
