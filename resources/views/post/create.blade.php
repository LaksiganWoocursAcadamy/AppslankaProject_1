@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
<form method="POST" action="/posts" class="bg-light py-4  mt-4  border-width-2 border-primary rounded-3 p-4 ">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tittle</label>
        <input type="text" class="form-control" 
        id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
           </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="desc">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>

    </form>



@endsection