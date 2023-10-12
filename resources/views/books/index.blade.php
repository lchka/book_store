

@extends('layouts.app')

@section('content')

<div class="container">
    <h1>All Books</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
</div>
