<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experimental Penguins</title>
    <link rel="shortcut icon" href="resources/assets/images/gif.webp" type="image/x-icon">
    <link rel="stylesheet" href="resources/assets/styles/index.css">
    <link rel="stylesheet" href="resources/assets/styles/welcome.css">
</head>
<body>
    <main>
        <picture>
            <img src="/resources/assets/images/gif.webp" alt="">
            <h1>Experimental Penguins</h1>
        </picture>
       <form action="http://localhost:8000/login" method="POST">
            <label>Please, enter a name for you penguin</label>
            <input type="text" name="nickname">
            <div>
                <a href="/credits">Credits</a>
                <button type="submit">Next</button>
            </div>
       </form>
    </main>
</body>
</html>