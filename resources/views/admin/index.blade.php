@extends('layouts.admin')

@if ( Session :: has ('info'))
    <div class=" row ">
        <div class="col -md -12 ">
            <p class=" alert alert - info ">{{ Session :: get('info') }} </p>
        </div>
    </div>
@endif

@section('content')
    <a class="btn btn-success" href="admin/create">New Post</a>

    <div class="flex">

        <hr/>

        <p class="simple-text">
            Learning Laravel
            <a>Edit</a>
        </p>
    </div>

    @foreach ( $posts as $post )
        <div class =" row ">
            <div class ="col -md -12 text - center ">
                <h1 class ="post - title " >{{ $post ['title'] }} </h1 >
                <p >{{ $post ['content'] }}! </p>
                <p><a href ="{{ route ('blog.post', ['id' => array_search ($post , $posts )]) }}">Read more ...</a>
            </div>
        </div >
        <hr >
    @endforeach
@stop

