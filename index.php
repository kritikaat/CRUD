<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">
</head>
<body>
    <h3>signup</h3>
    <form action="includes/formhandeler.inc.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type= "password" name="pwd" placeholder="password">
        <input type="text" name="email" placeholder="email">
        <button>signup</button>
</form>

        <h3>change account</h3>
    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type= "password" name="pwd" placeholder="password">
        <input type="text" name="email" placeholder="email">
        <button>change</button>  
    </form>  
    <h3>delete account</h3>
    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type= "password" name="pwd" placeholder="password">
        <button>delete</button>  
    </form>

    <h3>search</h3>
    <form action="search.php" method="POST">
        <label for="search">search for user:</label>
        <input id="search" type="text" name="usersearch" placeholder = "Search...">
        <button>Search</button>

        <script>
    document.addEventListener("DOMContentLoaded", function() {
        const headings = document.querySelectorAll("h3");
        headings.forEach((heading, index) => {
            setTimeout(() => {
                heading.classList.add("show");
            }, index * 100);
        });
    });
</script>

    
</body>
</html>