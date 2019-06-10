@extends('layouts.app')

@section('content')

@if(Session::has('success_message'))
<div class="alert alert-success">
    <span class="glyphicon glyphicon-ok"></span>
    {!! session('success_message') !!}
    
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
    
</div>
@endif

<div class="panel panel-default">
    
    @if(count($categories) == 0)
    <div class="panel-body text-center">
        <h4>{{ trans('categories.none_available') }}</h4>
    </div>
    @else    
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="row">
                    <ul>
                        @foreach($categories as $category)
                        <li>
                            <h3>{{ $category->name }}</h3>
                            <hr />
                            @if(count($category->children))
                            @include('categories._indexChildren',['categories' => $category->children])
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    
</div>
@endsection