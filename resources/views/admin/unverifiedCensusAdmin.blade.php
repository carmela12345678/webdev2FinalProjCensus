@extends('layouts.app')

@section('content')

    <div>
    <h3>Unverified Data</h3>
    <form action="searchUnverified" method='GET'>
		@csrf
        <input type="text" name='searchUnverified' placeholder="Search Record">
        <input type="submit" name='searchUnverified'>
    </form>


    
@endsection