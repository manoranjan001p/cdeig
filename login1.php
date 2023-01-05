<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            display:block;
            position:absolute;
            color:green;
            float:right;
            width:100px;
        }
    </style>
</head>

<body>
<div>   
    <form action="login_process" method='post'>
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type='submit' name="submit">
    </form>
</div>
    
</body>
</html>