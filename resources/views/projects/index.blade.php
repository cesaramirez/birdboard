@extends('layouts.app')
@section('content')
<div class="flex items-center mb-3">
    <a href="/projects/create">New Project</a>
</div>
<div class="flex">
@forelse ($projects as $project)
    <div class="bg-white w-1/3 p-4 mr-4 rounded shadow h-48">
        <h3 class="font-normal text-xl mb-6">{{ $project->title }}</h3>
        <div class="text-black opacity-40">
            {{ str_limit($project->description, 100) }}
        </div>
    </div>
    @empty
    <div>No projects yet.</div>
    @endforelse
</div>
@endsection
