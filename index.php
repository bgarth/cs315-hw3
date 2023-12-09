<!DOCTYPE html>
<html>
<header>
  <link rel="stylesheet" href="style_phone.css" media="sceeen and (max-width: 479px)" />
  <link rel="stylesheet" href="style_tablet.css" media="screen and (min-width: 480px) and (max-width: 768px)" />
  <link rel="stylesheet" href="style_desktop.css" media="screen and (min-width: 481px)" />
</header>

<body>
  <form action="login.php" method="post">
    <h2>LOGIN</h2>
    <?php if(isset($_GET['error'])) { ?>
        <p class="error"> <?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label>User Name</label>
    <input type="text" name="username" placeholder="Username"><br>
    <label>Password</label>
    <input type="password" name="password" placeholder="Password"><br>

    <button type="submit">Login</button>
  </form>

</body>
<footer>

</footer>

</html>