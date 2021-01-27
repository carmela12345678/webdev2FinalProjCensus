@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Unverified Census Records') }} 
                    <form action="searchUnverified" method='GET'>
                        @csrf
                        <input type="text" name='searchUnverified' placeholder="Search Record">
                        <input type="submit" name='searchUnverified'>
                    </form>
                </div>
                <div class="table-responsive" style="margin-right:20px; margin-left:20px;">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <td scope="col">Record Id</td>
                            <td scope="col">Family Name</td>
                            <td scope="col">Address</td>
                            </tr>
                        </thead>
                        <tbody>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if(!empty($records))
                        <ul class="list-group">
                            <li class="list-group-item active">Name</li>
                            @foreach($records as $value)
                            <li class="list-group-item">
                                <h4><a href="/censusRecord/{{$value['id']}}">{{$value['firstname']}}</h4>
                                <form action="census-delete" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$value['id']}}">
                                <input type="submit" value="Delete" class="btn-danger">
                                </form>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    </tbody>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

@endsection