<!DOCTYPE html>
<html lang="en">
<head>
    <title>Eco Friendly Login</title>
    
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
            margin:0;
            padding:0;
        }

        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: url('imgs/eco13.jpeg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            overflow:hidden;
            position:relative;
            
        }

        
        body:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3));
        }

        h1 {
            text-shadow:2px 2px 4px rgba(0, 0, 0, 0.6); 
            font-size: 40px;
            text-align: center;
            margin-bottom: 40px;
            font-family: 'Arial', sans-serif;
            z-index: 1;
        }

        nav {
            margin-bottom: 20px;
            text-align: center;
            z-index: 1;
        }

        nav a {
            color: white;
            margin: 15px;
            text-decoration: none;
            font-size: 18px;
            
        }

         nav a:hover {
            transform:scale(1.1);
             
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
            width: 100%;
            max-width: 360px;
            background-color: rgba(255, 255,255 ,0.8 );
            border-radius: 20px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.4);
            
            
        }

        .container:hover {
            transform:translateY(-10px);
          
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
            width: 100%;
        }

        input {
            width: 100%;
            padding: 15px;
            border:2px solid #ddd;
            border-radius: 8px;
            background: transparent; 
            font-size: 15px;
            
        }

        input:focus {
            border-color:black; 
            outline: none;
           
        }

        label {
            position:static;
            top: 2px;
            left: 25px;
            font-size: 15px;
            color:black ;  
            
        }

         input:focus + label, input:not(:placeholder-shown) + label {
                
            
        }

        button {
            width: 100%;
            padding: 15px;
            margin-top: 20px;
            background-color:#2e5609; 
            border: none;
            border-radius: 8px;
            color:white;
            font-size: 16px;
            cursor: pointer;
            
        }

        button:hover {
            background-color: red;
            
        }

        .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
            
        }

        .social-icons a:hover {
            color: black;
        }

        footer {
            margin-top: 25px;
            font-size: 18px;
            text-align: center;
            color: white;
        }

        footer a {
            color: white;
            text-decoration: none;
            font-weight: 650;
        }

       
        }
            webkit-scrollbar-thumb:hover {
            background-color: #FF7E5F;
        
        } 

                
        }
    </style>
</head>
<body>

    <header>
        <h1>Eco Friendly Market Place</h1>
    </header>

    

    <div class="container">

        <div class="form-group">
                <input type="username" id="username" placeholder=" "required >
                <label for="username" >User name</label>
            </div>
            
            <div class="form-group">
                <input type="email" id="email" placeholder=" "required >
                <label for="email" >Email</label>
            </div>
            

             <form onsubmit="redirectToShowcase(event)">
            <div class="form-group">
                <input type="password" id="password" placeholder=" " required>
                <label for="password">Password</label>
            </div>
            <button type="submit">
                <i class="fas fa-sign-in-alt" ></i> Login
            </button>
        </form>
    
         <script>
                function redirectToShowcase(event) {
                    event.preventDefault(); 
                    window.location.href = "home.html"; 
                }
    </script>

        <div class="social-icons">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Eco Friendly Market Place | <a href="privacy.html">Privacy Policy</a></p>
    </footer>

</body>
</html>
