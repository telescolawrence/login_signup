<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
      <div>
        <label for="firstname">First name</label>
        <input type="text" name="firstname" placeholder="firstname " id="firstname" required>
      </div>
      <div>
        <label for="lastname">Last name</label>
        <input type="text" name="lastname" placeholder="lastname" id="lastname" required>
      </div>
      <div>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email" id="email" required>
      </div>
      <div>
        <label for="Password">Password</label>
        <input type="password" name="password" placeholder="Password" id="password" required>
      </div>
      
        <input type="submit" name="submit" value="Send Data" class="button">
      </div>
      <div>
        
      </div>
      
      
      
      
    </form>
  </div>

</body>
</html>