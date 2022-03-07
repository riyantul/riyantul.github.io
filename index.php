<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <section>
        <div class="text">
            <h2>Login</h2>
        </div>
   
            <form action="logincek.php" method="post">
            <div class="fluid">
                <input type="text" name="username" placeholder="Username..">
            </div>
            <div class="fluid">
                <input type="password" name="password" placeholder="Password..">
            </div>
            <h6>don't have an account?<a href="register.html">register</a></h6>
            <div class="fluid">
                <button type="submit">Sign in</button>
            </div>
        </form>
        
    </section>
</body>
</html>