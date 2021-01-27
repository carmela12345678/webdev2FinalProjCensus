@extends('layouts.app')

@section('content')

    <div style="background:#44CCFF; border: 1px solid black;">
    <h1>New Census Records</h1>
    </div>

    <div class="form-group">
        <form action="new-rec" method='POST'>
        @csrf
        <label for="civilStatus">First Name:</label>
        <input type="text" name="fname" placeholder="First Name">
        <label for="civilStatus">Last Name:</label>
        <input type="text" name="lname" placeholder="Last Name">
        <label for="civilStatus">Age:</label>
        <input type="number" name="age" placeholder="Age"><br>
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br>
        <label for="civilStatus">Civil Status:</label>
        <select name="civilStatus" id="civilStatus">
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Widowed">Widowed</option>
        </select><br>
        <label for="female">Date of Birth:</label>
        <input type="date" name="dateOfBirthe"><br>
        <label for="educational">Highest Educational Attainment:</label>
        <input type="text" name="educational" placeholder="Educational Attainment">
        <label for="sourceOfIncome">Source of Income</label>
        <input type="number" name="sourceOfIncome" placeholder="Source of Income">
        <label for="add">Address:</label>
        <input type="text" name="add" placeholder="Address">
        <label for="role">Household Role:</label>
        <select name="role" id="role">
            <option value="Head">Head</option>
            <option value="Member">Member</option>
        </select><br>
        <input type="submit" name="newRecSubmit" class="btn btn-primary">
        </form>
    </div>

@endsection