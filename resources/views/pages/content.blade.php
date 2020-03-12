@extends('layouts.base')

@section('content')
<div class="container text-center">
<h3 style="color: #3D84CC;" >Create content</h3>

<form class="text-center" style="color: #3D84CC;" action="content" method="POST">
                                {{-- field1 --}}
                                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                                <div class="md-form">
                                    <input type="text" id="title" name="title" class="form-control">
                                    <label  for style="color: #3D84CC;="title">Title</label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="content" name="content" class="form-control">
                                    <label for style="color: #3D84CC; ="content">Content</label>
                                </div>
                                 <div class="modal-footer justify-content-center">
                                {{-- Button --}}
                                    <button type="submit" id="Submit" name="submit" class="btn btn-deep-orange btn-rounded">Post</button>
                                </div>
                            </form>
</div>


@endsection     