@extends('layout.master')
@section('header')
    <h2>Create New</h2>
@endsection
@section('content')
    <div class="col-md-6">
        <form action="{{ route('cats.store') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name">Name Cat</label>
                <input type="text" class="form-control" name="name" placeholder="Plesea Enter Name Cat">
            </div>
            <div class="form-group">
                <label for="date_birth">Date Of Birth</label>
                <input type="date" class="form-control" name="date_of_birth" placeholder="Plesea Enter Date Of Birth">
            </div>
            <div class="form-group">
                <label for="breed">Breed Cat</label>
                <input type="text" class="form-control" name="breed_id" placeholder="Plesea Enter Breed Cat">
            </div>
            <input type="submit" value="Create">
        </form>
    </div>
@endsection