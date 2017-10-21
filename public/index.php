<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Desktop Notification</title>
    <style>
        html, body {
            width: 1024px;
            height: 100%;
            font-size: 2rem;
            margin: 0 auto;
        }
        .flex-center {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="flex-center">
        <form action="submit.php" method="post">
            <input type="text" name="title" placeholder="Enter title">

            <input type="text" name="message" placeholder="Enter your message">

            <button type="submit">Notify</button>
        </form>
    </div>
</body>
</html>
