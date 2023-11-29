<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
        html {
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        .p-10 {
            padding: 10px;
            font-family: inherit;
            font-size: 16px
        }

        .pb-20 {
            padding-bottom: 20px
        }

        .fixed-form {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .form-card {
            border: 3px solid black;
            max-width: 500px;
            margin: auto;
            border-radius: 12px
        }
    </style>

    <title>log in</title>
</head>
<body>
    
    <h1>This is the log in page!!</h1>

    <div class="p-10 form-card">
        <h2>login</h2>
        <form action="/login" method="POST" class="fixed-form">
            @csrf
            <input type="text" name="loginname" placeholder="name" id="name" autocomplete="name" class="p-10"
                required>
            <input type="password" placeholder="password" type="password" autocomplete="password" name="loginpassword"
                id="password" class="p-10" required>
            <button class="p-10">Register</button>
        </form>

        <a href="/">no account? register!</a>

    </div>


</body>
</html>