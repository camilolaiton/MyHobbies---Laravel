@extends('layouts.app')

@section('description')
@section('page_title', 'My Hobbies')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{auth()->user()->name ?? ''}} Hobbies
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium beatae iusto nihil? Accusantium veniam, neque hic deleniti magnam corrupti, porro doloremque est omnis necessitatibus perspiciatis nesciunt eius libero minima maxime?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis culpa odit vitae tenetur officiis et harum earum, praesentium debitis quis dignissimos deleniti laudantium nulla ullam libero rerum fuga! Culpa, labore?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio soluta exercitationem, illum iste sequi architecto deserunt, aliquid velit, perferendis delectus totam tempore pariatur laborum iure eveniet accusantium saepe vitae quam.
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection