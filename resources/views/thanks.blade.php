<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      text-align: center;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #3498db;
    }

    p {
      font-size: 18px;
      color: #555;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      font-size: 16px;
      text-decoration: none;
      color: #fff;
      background-color: #3498db;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .button:hover {
      background-color: #267bbf;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Thank You!</h1>
    <p>Your message has been received.</p>
    <a href="{{url('/')}}" class="button">Back to Home</a>
  </div>

</body>
</html>
