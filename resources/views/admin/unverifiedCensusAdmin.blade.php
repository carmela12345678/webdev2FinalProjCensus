@extends('layout/layout')

@section('body')

    <div>
    <h3>Unverified Data</h3>
    <form action="searchUnverified" method='GET'>
		@csrf
        <input type="text" name='searchUnverified' placeholder="Search Record">
        <input type="submit" name='searchUnverified'>
    </form>

	@foreach($records as $value)
        <h1><a href="/censusRecord/{{$value['id']}}">{{$value['firstname']}}</h1>
        <form action="census-delete" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$value['id']}}">
        <input type="submit" value="Delete">
        </form>
    @endforeach

@endsection