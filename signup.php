<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

</head>
<body>
    <div id="app">
<form method="post" class="signup-form">
<?php if (isset($error)) : ?>
                <div>
                    <p>
                        <?php echo $error ?>
                    </p>
                </div>
            <?php endif; ?>
<div class="inputWrapper">
    <label for="name">Full name</label>
    <input type="text" name="name" placeholder="Type your full name">
</div>
<div class="inputWrapper">
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="Email for future login">
</div>
<div class="inputWrapper">
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password for your account">
</div>

<button type="submit">Register</button>
</form>
</div>
</body>
</html>