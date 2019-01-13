<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" integrity="sha256-dMQYvN6BU9M4mHK94P22cZ4dPGTSGOVP41yVXvXatws="
        crossorigin="anonymous" />
    <title>Birdboard Project</title>
</head>

<body>
    <form method="POST" action="/projects" class="container" style="padding-top: 40px">
        @csrf
        <h1 class="heading is-1">Create a Projects</h1>
        <div class="field">
            <label for="title" class="label">Title</label>
            <div class="control">
                <input type="text" class="input" name="title" placeholder="title">
            </div>
        </div>
        <div class="field">
            <label for="title" class="description">Description</label>
            <div class="control">
                <textarea class="textarea" name="description"></textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>
    </form>
</body>

</html>
