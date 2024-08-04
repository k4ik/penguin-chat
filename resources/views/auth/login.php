<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
            background: url("/resources/images/bg.png");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }

        .penguin {
            width: 10%;
            position: fixed;
            bottom: 15%;
            right: 10%;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 450px;
            width: 100%;
            background-color: rgba(255,255,255,0.9);
            padding: 80px 20px;
            border-radius: 12px;
            box-shadow: 1px 1px 5px rgba(0,0,0,0.5);
        }

        fieldset {
            display: flex;
            gap: 10px;
            border: none;
            align-items: center;
        }
        
        input {
            margin-bottom: 10px;
            padding: 5px;
            outline: none;
            border: none;
            border-bottom: 1px solid black;
            width: 100%;
            background: transparent;
        }

        .input-img {
            width: 35px;
            height: 30px;
            margin-bottom: 5px;
        }

        button {
            background-color: rgba(0, 150, 255);
            border-radius: 8px;
            padding: 10px;
            font-weight: bold;
            color: #FFF;
            border: none;

            &:hover {
                background-color: rgba(0, 110, 255);

            }
        }

        a {
            font-weight: bold;
            color: rgba(0, 150, 255);

            &:hover {
                color: rgba(0, 110, 255);
            }
        }
    </style>
</head>
<body>
    <main>
        <img src="/resources/images/gif.webp" class="penguin" />
        <form>
            <fieldset>
                <img src="/resources/images/user.svg" alt="user svg" class="input-img" />
                <input type="text" name="username" id="username" placeholder="Username" required />
            </fieldset>
            <fieldset>
                <img src="/resources/images/lock.svg" alt="lock svg" class="input-img" />
                <input type="password" name="password" id="password" placeholder="Password" required />
            </fieldset>
            <button>Login</button>
        </form>
        <p>Don't have an account yet? <a href="/signup">Sign up</a></p>
    </main>
</body>
</html>
