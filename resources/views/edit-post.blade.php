<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit post</title>

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

        .post-card {
            border: 3px solid black;
            max-width: 500px;
            margin: 12px auto;
            border-radius: 12px;
            padding: 12px
        }

        .actions {
            display: flex;
            justify-content: left;
            gap: 24px
        }
    </style>
</head>
<body>
    
<div class="form-card">
    <h1 class="p-10">edit post</h1>

<form action="/edit-post/{{$post->id}}" method="POST" class="fixed-form p-10">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{$post->title}}" class="p-10">
    <textarea name="body" id="body" cols="30" rows="10" class="p-10">{{$post->body}}</textarea>
    <button class="p-10">save changes</button>
</form>
</div>

</body>
</html>