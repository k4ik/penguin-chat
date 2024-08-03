<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penguin Chat</title>
    <link rel="shortcut icon" href="/resources/images/gif.webp" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Modern+Antiqua&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Modern Antiqua", serif;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url("/resources/images/bg.png");
            background-repeat: no-repeat;
            background-size: cover;
        }

        section {
            background-color: rgba(255,255,255,0.9);
            max-width: 400px;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            gap: 30px;
            border-radius: 12px;
            box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
        }
        
        h1 {
            font-size: 32px;
        }

        div {
            display: flex;
            gap: 20px;
        }

        a {
            background-color: rgb(0, 150, 255);
            padding: 5px 30px;
            border-radius: 8px;
            color: #FFF;
            text-decoration: none;
            box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body>
    <main>
        <section>
            <h1>WELCOME!!!</h1>
            <div>
                <a href="/login">Log In</a>
                <a href="/signup">Sign up</a>
            </div>
        </section>
    </main>
</body>
</html>