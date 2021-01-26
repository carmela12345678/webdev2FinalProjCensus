@extends('layout/layout')

@section('body')

    <div>
    <h3>ACCOUNTS</h3>
    <form action="searchUser" method='GET'>
        <input type="text" name='searchUser' placeholder="Search User Account">
        <input type="submit" name='searchUser'>
    </form>
    </div>

@endsection