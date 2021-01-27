@extends('layouts.app')

@section('content')

    <div style="background:#44CCFF; border: 1px solid black;">
    <h1>New Census Records</h1>
    </div>

    <div>
        <form action="new-rec" method='POST'>
        @csrf
        <input type="text" name="fname" placeholder="First Name">
        <input type="text" name="lname" placeholder="Last Name">
        <input type="number" name="age" placeholder="Age"><br>
        <input type="radio"  name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio"  name="status" value="male">
        <label for="male">Single</label><br>
        <input type="radio" name="status" value="female">
        <label for="female">Married</label><br>
        <input type="radio" name="status" value="female">
        <label for="female">Widow</label><br>
        Date of Birth:
        <input type="date" name="dateOfBirthe">
        <input type="text" name="educational" placeholder="Ediucational Attainment">
        <input type="number" name="sourceOfIncome" placeholder="Source of Income">
        <input type="text" name="add" placeholder="Address">
        <input type="radio"  name="role" value="Head">
        <label for="male">Head</label><br>
        <input type="radio" name="role" value="Member">
        <label for="female">Member</label><br>
        <input type="submit" name="newRecSubmit" class="btn btn-primary">
        </form>
    </div>

@endsection