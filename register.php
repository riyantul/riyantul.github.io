<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="text">
            <h2>Register</h2>
        </div>
   
            <form action="registercek.php" method="post">
            <div class="fluid">
                <input type="text" name="name" placeholder="Name..">
            </div>
            <div class="fluid">
                <input type="text" name="username" placeholder="Username..">
            </div>
            <div class="fluid">
                <input type="password" name="password" placeholder="Password..">
            </div>
            <h6>have an account?<a href="index.html">login</a></h6>
            <div class="fluid">
                <button type="submit">Register</button>
            </div>
        </form>
        
    </section>
</body>
</html>