@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{$title??"Dashboard"}}</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="mb-5">
                <div class="row g-2">
                    @foreach($boxes as $box)
                        <div class="col-lg-3 col-md-3 col-6">
                            <x-adminlte-small-box
                                title="{{$box['title']}}" text="{{$box['text']}}"
                                icon="{{$box['icon']}}" theme="{{$box['theme']}}"
                                url="{{$box['url']}}"
                                url-text="Detail"/>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection