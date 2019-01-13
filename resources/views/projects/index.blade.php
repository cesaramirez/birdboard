@extends('layouts.app')
@section('content')
<div class="flex items-center mb-3">
    <a href="/projects/create">New Project</a>
</div>
@forelse ($projects as $project)
<li>
    <a href="{{ route('projects.show',$project) }}">{{ $project->title }}</a>
</li>
@empty
<li>No projects yet.</li>
@endforelse
@endsection
