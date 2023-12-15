<! DOCTYPE html>
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
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container">
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" aria-current="page">Back</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
        <center><h2>Create New User</h2></center>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error" style="color:red;"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
    <form name="form" method="POST" onsubmit="return validateForm()">
        <div class="row mb-3">
            <label class="col-sm-4 col-form-label" style="text-align:right">Username:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="username" />
            </div>
        </div>
        <div id="alert-instance">
        </div>
        <div class="row mb-3">
            <label class="col-sm-4 col-form-label" style="text-align:right">Password:</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" name="password" />
            </div>
        </div>

        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <?php


    session_start();
    include "db_conn.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(empty($username)) {
            header("Location: add_user.php?error=Username is required");
            exit();
        }
        
        else if(empty($password)) {
            header("Location: add_user.php?error=Password is required");
            exit();
        }
        else {
            header("Location: home.php");
        }
        
        $sql = "SELECT * FROM users WHERE username='$username'";
        
        $result = mysqli_query($mysqli, $sql);
        
        if(mysqli_num_rows($result) === 1) {
            header("Location: add_user.php?error=Username taken");
            exit();
        }
        else {
        
            $sql2 = "INSERT INTO users (username, password) VALUES ('$username', '$password');";

            if($mysqli->query($sql2)) {
                header("Location: index.php");
                exit();
            };
        }

        
    }
    ?>

</body>
</html>