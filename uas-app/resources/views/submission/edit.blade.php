@extends('layouts.app')
  
@section('title', 'Edit Submission')
  
@section('contents')
    <h1 class="mb-0">Edit Submission</h1>
    <hr />
    <form action="{{ route('submission.update', $submission->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $submission->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Author</label>
                <input type="text" name="author" class="form-control" placeholder="Author" value="{{ $submission->author }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">File</label>
                <input type="file" name="file" class="form-control" placeholder="File" value="{{ $submission->file }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Abstract</label>
                <textarea class="form-control" name="abstract" placeholder="Abstract" >{{ $submission->abstract }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection