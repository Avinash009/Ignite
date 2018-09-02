@extends('layouts.app')


@section('content')

  <div class="panel panel-default">

    <div class="panel-heading">

        Create new tag

    </div>

    <div class="panel-body">

      <form id="form-tag" action="{{route('tag.store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">

          <label for="tag">Tag</label>

          <input type="text" name="tag" class="form-control">

        </div>

        <div class="form-group">

          <div class="text-center">
            <button class="btn btn-success" type="submit">
              Store tag
            </button>
          </div>

        </div>
      </form>

    </div>

  </div>

@endsection


@section('scripts')

<script>

$( document ).ready(function() {

  $("#form-tag").submit(function(e)
  {
    e.preventDefault();

    var form = $(this);

    $.ajax({

           type: "POST",
           url: '{{route('tag.store')}}',
           data: form.serialize(), 
           success: function(data)
           {
               location.reload();
           }
    });

  });

});
</script>

@endsection