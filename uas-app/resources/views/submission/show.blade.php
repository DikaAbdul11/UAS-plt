@extends('layouts.app')
  
@section('title', 'Show Submission')
  
@section('contents')
    <h1 class="mb-0">Detail Submission</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $submission->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Author</label>
            <input type="text" name="author" class="form-control" placeholder="Author" value="{{ $submission->author }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">File</label>
            <input type="text" name="file" class="form-control" placeholder="File" value="{{ $submission->file }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Abstract</label>
            <textarea class="form-control" name="abstract" placeholder="Abstract" readonly>{{ $submission->abstract }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $submission->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $submission->updated_at }}" readonly>
        </div>
    </div>
@endsection