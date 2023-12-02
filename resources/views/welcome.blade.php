<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: #333;
            margin: 0 15px;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        h2 {
          text-align: center;
        }
    </style>
</head>
<body>

    <header>
        <h1>Simple Home Page</h1>
    </header>

    <nav>
        <a href="{{'home'}}">Home</a>
        <a href="{{'about'}}">About</a>
        <a href="{{'second'}}">Contact</a>
    </nav>

    <main>
        <h2>Welcome to Our Website</h2>
    </main>

    <footer>
        &copy; 2023 Simple Home Page
    </footer>

</body>
</html>
