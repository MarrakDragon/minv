@extends('layouts.app')

@section('content')

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
    @endif
    
</div>



@endsection