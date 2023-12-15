<?php
function pdo_connect_mysql()
{
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = 'root';
    $DATABASE_NAME = 'cs315finalproject';
    try {
        $connString = "mysql:host=localhost;port=8889;dbname=cs315finalproject";
        // creating a php database object
        $pdo = new PDO($connString, $DATABASE_USER, $DATABASE_PASS);
        return $pdo;
    } catch (PDOException $exception) {
        // If there is an error with the connection,
        // stop the script and display the error.
        echo "Database connection unsuccessful";
        // die($e->getMessage());
        exit('Failed to connect to database!');
    }
}


// Template header, feel free to customize this
function template_header($title)
{
    // Get the number of items in the shopping cart, which will be displayed in the header.
    $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
    echo <<<TRUMAN
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>$title</title>
            <link href="style.css" rel="stylesheet" type="text/css">
        </head>
        <body>
            <header>
                <div class="content-wrapper">
                    <h1>Running Store</h1>
                    <nav>
                        <a href="index.php">Home</a>
                        <a href="index.php?page=products">Products</a>
                    </nav>
                    <div class="link-icons">
                        <a href="index.php?page=cart">
                            <i class="fas fa-shopping-cart"></i>
                            <span>$num_items_in_cart</span>
                        </a>
                    </div>
                </div>
            </header>
            <main>
    TRUMAN;
}

// Template footer
function template_footer()
{
    $year = date('Y');
    echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; $year, Shopping Cart System</p>
            </div>
        </footer>
    </body>
    </html>
EOT;
}
?>

