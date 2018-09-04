@extends('layouts.app')


@section('content')

  <div class="panel panel-default">

    <div class="panel-heading">

        Create new category

    </div>

    <div class="panel-body">

      <form id="form-category" action="{{route('category.store')}}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="branch">Department</label>

          <div>
              <select class="form-control" id="department" name="department" required autofocus>
                  <option>IT</option>
                  <option>CSE</option>
                  <option>ECE</option>
                  <option>EEE</option>
                  <option>CIVIL</option>
              </select>
          </div>
        </div>

        <div class="form-group">
          <label for="year">Year</label>

          <div>
              <select class="form-control" id="year" name="year" required autofocus>
                  <option>First</option>
                  <option>Second</option>
                  <option>Third</option>
                  <option>Fourth</option>
              </select>
          </div>
        </div>

        <div class="form-group">
          <label for="branch">Semester</label>

          <div>
              <select class="form-control" id="semester" name="semester" required autofocus>
                  <option>1-1</option>
                  <option>1-2</option>
                  <option>2-1</option>
                  <option>2-2</option>
                  <option>3-1</option>
                  <option>3-2</option>
                  <option>4-1</option>
                  <option>4-2</option>
              </select>
          </div>
        </div>

        <div class="form-group">

          <div class="text-center">
            <button class="btn btn-success" type="submit">
              Store catagory
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

  $("#form-category").submit(function(e)
  {

    e.preventDefault();

    var form = $(this);

    $.ajax({

           type: "POST",
           url: '{{route('category.store')}}',
           data: form.serialize(), 
           success: function(data)
           {
                console.log(data);
               //location.reload();
           }
    });

  });

});
</script>

@endsection
