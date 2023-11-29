<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
        html {
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        .p-10{
            padding: 10px;
            font-family: inherit;
            font-size: 16px
        }

        .pb-20{
            padding-bottom: 20px
        }

        .fixed-form{
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .form-card{
            border: 3px solid black;
            max-width: 500px;
            margin: auto;
            border-radius: 12px
        }
    </style>
</head>

<body>
    <h1 class="pb-20">TESTEO WEBSITE LARAVEL OMG</h1>

    <div class="p-10 form-card">
        <h2>Register</h2>
        <form action="" class="fixed-form">
            <input type="text" name="name" placeholder="name" id="name" autocomplete="name" class="p-10">
            <input type="email" placeholder="email" type="email" autocomplete="email" name="email" id="email" class="p-10">
            <input type="password" placeholder="password" type="password" autocomplete="password" name="password" id="password" class="p-10">
            <button class="p-10">Register</button>
        </form>
    </div>
</body>

</html>
