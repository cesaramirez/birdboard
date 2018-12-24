<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Birdboard Projects</title>
</head>

<body>
    <h1>Birdboard</h1>
    @forelse ($projects as $project)
    <li>
        <a href="{{ route('projects.show',$project) }}">{{ $project->title }}</a>
    </li>
    @empty
    <li>No projects yet.</li>
    @endforelse
</body>

</html>
