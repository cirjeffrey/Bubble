<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Bubble: The Study Buddy Finder</title>
    <link rel="stylesheet" href="style.css">

    <style>
      button{s
        border-radius: 30px;
      }
    section  {
      float: left;
      margin: 10px;
      padding: 10px;
      max-width: 300px;
      height: 300px;
      border: 3px solid black
      }
    </style>
  </head>
  <body>
  <header style="background-color:orange">  
    <h1> Bubble </h1>
  </header>
 
    
    
    <section>
      <h3> Recent groups</h3>
    </section>


    <section style="padding-top:10px;">
      <form class = "login" action = "includes/login.inc.php" method = "POST">
        <h2>Login</h2>
        <label> EMAIL: </label><br>  <input type="text" name = "email" placeholder = "Email"><br><br>
        <label> PASSWORD: </label>  <input type="password" name = "password" placeholder = "Password"><br>
        <div style="text-align:center;"><span> New User?</span> <a href="signupSeparate.php">Register</a>
          <button type = "submit" name="submit"> LOGIN </button>
        </div>
      </form>
    </section>
    
    
    <section>
      <h3> Bulletin Board</h3>
    </section>

  </body>
</html>