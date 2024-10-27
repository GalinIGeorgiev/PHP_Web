<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Document</title>
</head>
<body>
    <div>
    <h4>Signup</h4>

<form action="includes/formhandler.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="text" name="email" placeholder="E-mail">
    <button>Signup</button>
</form>
    </div>
    

    <div>
    <h4>Change account</h4>
    
    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-mail">
        <button>Update</button>
    </form>
    </div>
   
    <div>
    <h4>Delete account</h4>

<form action="includes/userdelete.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <button>Delete</button>
</form>
    </div>
    

    <div>
<form class="searchform" action="search.php" method="post">
        <label for="search">Search for user:</label>
        <input id="search" type="text" name="usersearch">
        <button>Search</button>
    </form>  
</div>

   
</body>
</html>