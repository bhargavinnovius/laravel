@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New User</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a class="btn btn-sm btn-outline-danger" href="{{ route('users.index') }}">Back</a>
    </div>
  </div>
</div>
<x-alert/>

<form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
  @csrf
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="form-group">
            <strong>Headline:</strong>
            <input class="form-control" type="text" name="headline" placeholder="Headline">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="form-group">
            <strong>Publisher:</strong>
            <input class="form-control" type="text" name="publisher" placeholder="Publisher">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
      <div class="form-group">
          <strong>Author:</strong>
          <input class="form-control" type="text" name="author" placeholder="Author">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
      <div class="form-group">
          <strong>Cover:</strong>
          <input class="form-control" type="file" name="cover" placeholder="Cover">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
      <div class="form-group">
          <strong>PDF:</strong>
          <input class="form-control" type="file" name="pdf" placeholder="PDF">
      </div>
    </div>
   
    
    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection