@extends('layouts.app')

@section('description')
@section('page_title', 'My Hobbies')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">
                        {{auth()->user()->name ?? ''}} Hobbies
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($hobbies as $hobbie)
                                <li class="list-group-item">
                                    {{$hobbie->name}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="mt-2">
                    <a class="btn btn-success btn-sm" href="/hobby/create">
                        <i class="fas fa-plus-circle"></i> New Hobby
                    </a>
                </div>
            </div>
        </div>
    </div>    
@endsection