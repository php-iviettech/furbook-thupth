@extends('layout.master')
@section('header')
    <h2>Edit a cat</h2>
@stop
@section('content')
    <div class="col-md-6">
        <form action="{{ route('cats.update',$cat->id) }}" method="post">
            {{ method_field('PUT') }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name">Name Cat</label>
                <input type="text" class="form-control" name="name" placeholder="Plesea Enter Name Cat" value="{{ $cat->name }}">
            </div>
            <div class="form-group">
                <label for="date_birth">Date Of Birth</label>
                <input type="date" class="form-control" name="date_of_birth" placeholder="Plesea Enter Date Of Birth" value="{{ $cat->date_of_birth }}">
            </div>
            <div class="form-group">
                <label for="breed">Breed Cat</label>
                <input type="text" class="form-control" name="breed_id" placeholder="Plesea Enter Breed Cat" value="{{ $cat->breed_id }}" {{--readonly--}}>
            </div>
            <input type="submit" value="Create">
        </form>
    </div>
@stop