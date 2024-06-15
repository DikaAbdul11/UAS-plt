@extends('layouts.app')
  
@section('title', 'Submission')
  
@section('contents')
    <h1 class="mb-0">Add Submission</h1>
    <hr />
    <form action="{{ route('submission.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col">
                <input type="text" name="author" class="form-control" placeholder="Author">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="file" name="file" class="form-control" placeholder="File">
            </div>
            <div class="col">
                <textarea class="form-control" name="abstract" placeholder="Abstract"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection