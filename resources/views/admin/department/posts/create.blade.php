@extends('layouts.app')


@section('content')

  <div class="panel panel-default">

    <div class="panel-heading">

        Create new post

    </div>

    <div class="panel-body">

      <form action="" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">

          <label for="title">Title</label>

          <input type="text" name="title" class="form-control">

        </div>

        <div class="form-group">

          <label for="category">Select Department</label>

          <select name="department" id="department" class="form-control">

              @foreach($departments as $department)
                <option value="{{$department->department}}">{{$department->department}}</option>
              @endforeach

          </select>

        </div>

        <div class="form-group">

          <label for="category">Select Year</label>

          <select name="year" id="year" class="form-control">

              @foreach($years as $year)
                <option value="{{$year->year}}">{{$year->year}}</option>
              @endforeach

          </select>

        </div>

        <div class="form-group">

          <label for="category">Select Semester</label>

          <select name="semester" id="semester" class="form-control">

              @foreach($semesters as $semester)
                <option value="{{$semester->semester}}">{{$semester->semester}}</option>
              @endforeach

          </select>

        </div>

        <div class="form-group">
          <label for="tag">Select tags</label>

          @foreach($tags as $tag)
            <div class="checkbox">
              <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}">{{ $tag->tag }}</lable>
            </div>
          @endforeach


        </div>

        <div class="form-group">

          <label for="content">Content</label>

          <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>

        </div>

        <div class="form-group">

          <div class="text-center">

            <button class="btn btn-success"type="submit">Submit post</button>

          </div>

        <div>
      </form>

    </div>

  </div>

@stop


@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
@stop

@section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script>
      $(document).ready(function() {
            $('#content').summernote();
      });
</script>
@stop
