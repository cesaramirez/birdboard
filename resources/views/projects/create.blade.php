@extends('layouts.app')
@section('content')
<form method="POST" action="/projects">
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
            <a href="/projects" class="button">Cancel</a>
        </div>
    </div>
</form>
@endsection
