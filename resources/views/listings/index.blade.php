@extends('layout')

@section('content')
@unless(count($listings) == 0)
    @foreach($listings as $listing)
        <h2>
            <a href="/listings/{{$listing['id']}}">{{$listing['name']}}</a>
        </h2>
        <p>{{$listing['country']}}</p>
        <p>{{$listing['date']}}</p>
    @endforeach

@else
    <p>No Listings found</p>
@endunless

@endsection
<a href="/listings/create">create</a>
