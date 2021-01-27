@extends('layouts.app')

@section('content')
<div class="row">
<div class="col">
    <div class="jumbotron" style=”background-color:#44CCFF;>
        <div class="container">
            <h1 class="row justify-content-center">New Census Records</h1><br>
            <hr class="my-4">
            <div class="form-group">
                <form action="new-rec" method='POST'>
                @csrf
                    <input type="hidden" name="record" value="0">
                    <div class="form-row">
                        <div class="col">
                            <label for="formGroupExampleInput">First Name:</label>
                            <input type="text" class="form-control" name="fname" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="civilStatus">Last Name:</label>
                            <input type="text" class="form-control" name="lname" placeholder="Last Name">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <label for="civilStatus">Age:</label>
                            <input type="number" class="form-control" name="age" placeholder="Age">
                        </div>
                        <div class="col">
                            <label for="gender">Gender:</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="civilStatus">Civil Status:</label>
                            <select class="form-control" name="status" id="status">
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <label for="female">Date of Birth:</label>
                            <input type="date" class="form-control" name="dateOfBirth">
                        </div>
                        <div class="col">
                            <label for="role">Household Role:</label>
                            <select class="form-control" name="role" id="role">
                                <option value="Head">Head</option>
                                <option value="Member">Member</option>
                            </select>
                        </div>
                    </div><br>
                    <label for="educational">Highest Educational Attainment:</label>
                    <input type="text" class="form-control" name="educational" placeholder="Educational Attainment"><br>
                    <label for="sourceOfIncome">Monthly Income</label>
                    <input type="number" class="form-control" name="sourceOfIncome" placeholder="Source of Income"><br>
                    <label for="add">Address:</label>
                    <input type="text" class="form-control" name="add" placeholder="Address">
                    <br>
                    <input type="submit" name="newRecSubmit" class="btn btn-primary">
                </form>
            </div>

        </div>
    </div>

</div>
<div class="col">
    <div class="jumbotron" style=”background-color:#44CCFF;>
        <div class="container">
            <h1 class="row justify-content-center">New Census Records</h1><br>
            <hr class="my-4">
            <div class="form-group">
                <form action="new-rec" method='POST'>
                @csrf
                    <div class="form-row">
                        <div class="col">
                            <label for="formGroupExampleInput">First Name:</label>
                            <input type="text" class="form-control" name="fname" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label for="civilStatus">Last Name:</label>
                            <input type="text" class="form-control" name="lname" placeholder="Last Name">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <label for="civilStatus">Age:</label>
                            <input type="number" class="form-control" name="age" placeholder="Age">
                        </div>
                        <div class="col">
                            <label for="gender">Gender:</label>
                            <select class="form-control" name="gender" id="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="civilStatus">Civil Status:</label>
                            <select class="form-control" name="civilStatus" id="civilStatus">
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col">
                            <label for="female">Date of Birth:</label>
                            <input type="date" class="form-control" name="dateOfBirth">
                        </div>
                        <div class="col">
                            <label for="role">Household Role:</label>
                            <select class="form-control" name="role" id="role">
                                <option value="Head">Head</option>
                                <option value="Member">Member</option>
                            </select>
                        </div>
                    </div><br>
                    <label for="educational">Highest Educational Attainment:</label>
                    <input type="text" class="form-control" name="educational" placeholder="Educational Attainment"><br>
                    <label for="sourceOfIncome">Source of Income</label>
                    <input type="number" class="form-control" name="sourceOfIncome" placeholder="Source of Income"><br>
                    <label for="add">Address:</label>
                    <input type="text" class="form-control" name="add" placeholder="Address"><br>
                    <input type="submit" name="newRecSubmit" class="btn btn-primary">
                </form>
            </div>

        </div>
    </div>
</div>
@endsection