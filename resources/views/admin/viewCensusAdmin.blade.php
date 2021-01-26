@extends('layout/layout')

@section('body')
    <div>
    <h3>Verified Data</h3>
    <form action="searchVerified" method='GET'>
        <input type="text" name='searchVerified' placeholder="Search Record">
        <input type="submit" name='searchVerified'>
    </form>
@endsection