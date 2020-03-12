@extends('layouts.base')

@section('content')
<div class="container text-center">
<h3>Create content</h3>

<form class="text-center" style="color: #757575;" action="content" method="POST" enctype="multipart/form-data">
                                {{-- field1 --}}
                                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                                <div class="md-form">
                                    <input type="text" id="title" name="title" class="form-control">
                                    <label for="title">Title</label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="content" name="content" class="form-control">
                                    <label for="content">Content</label>
                                </div>
                                <div class="md-form" style="text-align:left;">
                                    <input type="file" id="inputImage" name="image">
                                </div>
                                <div class="modal-footer justify-content-center">
                                    {{-- <!-- Button --> --}}
                                    <button type="submit" id="Submit" name="submit" class="btn btn-deep-orange btn-rounded">Post</button>
                                </div>
                            </form>
</div>


@endsection                            