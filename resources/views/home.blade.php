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

        .post-card{
            border: 3px solid black;
            max-width: 500px;
            margin: 12px auto ;
            border-radius: 12px;
            padding: 12px
        }
    </style>
</head>

<body>

    @auth

        <h1>Bienvenido {{ Auth::user()->name }}</h1>

        <form action="/logout" method="POST">
            @csrf
            <button class="p-10"> log out </button>
        </form>

        <div class="form-card p-10">
            <h2>Create a new post</h2>
            <form action="/create-post" method="POST" class="fixed-form">
                @csrf

                <input type="text" name="title" placeholder="Title of your post" class="p-10">
                <textarea name="body" placeholder="Write your thoughts here..." rows="10" class="p-10"
                    style="font-family: inherit; font-size: 16px"></textarea>
                <button class="p-10">publish</button>
            </form>
        </div>

        <hr>

        <div class="p-10">
            @foreach ($posts as $post)
                <div class="post-card p-10">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->body }}</p>
                    <a href="/edit-post/{{$post->id}}">edit post</a>
                </div>
            @endforeach
        </div>
    @else
        <h1 class="pb-20">TESTEO WEBSITE LARAVEL OMG</h1>

        <div class="p-10 form-card">
            <h2>Register</h2>
            <form action="/register" method="POST" class="fixed-form">
                @csrf
                <input type="text" name="name" placeholder="name" id="name" autocomplete="name" class="p-10"
                    required>
                <input type="email" placeholder="email" type="email" autocomplete="email" name="email" id="email"
                    class="p-10" required>
                <input type="password" placeholder="password" type="password" autocomplete="password" name="password"
                    id="password" class="p-10" required>
                <button class="p-10">Register</button>
            </form>

            <a href="/login">already have an account? log in!</a>

        </div>

    @endauth

</body>

</html>
