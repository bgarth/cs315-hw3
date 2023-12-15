<?php
session_destroy();
?>
<!DOCTYPE html>
<html>
<header>
  <link rel="stylesheet" href="style_phone.css" media="sceeen and (max-width: 479px)" />
  <link rel="stylesheet" href="style_tablet.css" media="screen and (min-width: 480px) and (max-width: 768px)" />
  <link rel="stylesheet" href="style_desktop.css" media="screen and (min-width: 481px)" />

  <script>
        function validateForm() {
            let x = document.forms["form"]["username"].value;
            if (x == "") {
                alert("Username or password must not be blank");
                return false;
            }
        }
  </script>
</header>

<body>
  <form action="login.php" method="post" onsubmit="return validateForm()">
    <h2 id="login-header">LOGIN</h2>
    <?php if(isset($_GET['error'])) { ?>
        <p class="error" style="color:red;"> <?php echo $_GET['error']; ?></p>
    <?php } ?>
    <div class="row mb-3">
            
            <div class="col-sm-5">
            <label class="col-sm-4 col-form-label" style="text-align:right">Username:</label>
                <input type="text" class="form-control input-field" name="username" />
            </div>
        </div>
        <div id="alert-instance">
        </div>
        <div class="row mb-3">
            <div class="col-sm-5">
            <label class="col-sm-4 col-form-label" style="text-align:right">Password:</label>
                <input type="password" class="form-control input-field" name="password" />
            </div>
        </div>
    </div>
    <button type="submit">Login</button>
  </form>

  <a href="add_user.php">Add User</a>

</body>
<footer>

</footer>

</html>