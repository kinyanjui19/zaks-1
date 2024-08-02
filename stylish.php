<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Website</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .content {
    text-align: center;
  }
  
  #info {
    font-size: 24px;
    color: #333;
  }
        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #ffe6e6;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }
        .header h1 {
            color: #fff;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .header p {
            color: #fff;
            font-size: 18px;
        }
        .button {
            background-color: #ffc5c5;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #ffb6b6;
            box-shadow: 0 0 10px rgba(255, 182, 182, 0.5);
        }
        .button:active {
            background-color: #ffa07a;
            box-shadow: 0 0 10px rgba(255, 160, 122, 0.5);
        }
        .glow {
            text-align: center;
            margin: 20px;
        }
        .glow span {
            background-color: #ffc5c5;
            padding: 10px;
            border-radius: 10px;
            color: #fff;
        }
        .glow span:hover {
            box-shadow: 0 0 10px rgba(255, 182, 182, 0.5);
        }
        .animation {
            text-align: center;
            margin: 20px;
        }
        .animation span {
            display: inline-block;
            padding: 10px;
            border-radius: 10px;
            background-color: #ffc5c5;
            color: #fff;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Stylish Website</h1>
            <p>Welcome to our stylish website!</p>
        </div>
        <div class="glow">
            <span>This text glows on hover!</span>
        </div>
        <div class="animation">
            <span>This text pulses!</span>
        </div>
        <button class="button">Click me!</button>
    </div>
</body>
</html>