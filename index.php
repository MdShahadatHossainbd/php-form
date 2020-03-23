<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php Form</title>
  </head>
  <body>
    <div>
        <form action="welcome.php" method="post">
            <legend>Login</legend><br>

            <div >
                <label for="FirstName">FirstName</label>
                <input name="FirstName" type="text" id="FirstName"  placeholder="First Name">
            </div>

            <div >
                <label for="LastName">Last Name</label>
                <input name="LastName" type="text" id="LastName" placeholder="Last Name">
            </div>

            <div >
                <label for="userName">User Name</label>
                <input name="userName" type="string" id="user" placeholder="User Name">
            </div>

            <div >
                <label for="Email1">Email address</label>
                <input name="email" type="email" id="Email1" placeholder="Enter email">
            </div>
            <div>
                <label for="Password">Password</label>
                <input name="password" type="password" id="Password" placeholder="Password">
            </div>
            <div>
                <input type="checkbox" id="CheckValue">
                <label  for="CheckValue">Remember 7days</label>
            </div><br>

             <textarea name="userComment" rows="10" cols="30" placeholder="Write a comment"></textarea> <br>

            <button name="submit" type="submit" class="btn btn-success">Log In</button>
        </form>
    </div>


  </body>
</html>
