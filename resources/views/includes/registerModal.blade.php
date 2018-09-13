
<!-- The Modal -->
<div class="modal fade" id="registerModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Registration</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form class="form-horizontal registerForm" method="POST" action=""><!--{{ route('register') }}-->
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <div class="row">
                            <label for="first_name" class="col-3 control-label align-self-center align-self-center">First Name</label>

                            <div class="col-7">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <div class="row">
                            <label for="last_name" class="col-3 control-label align-self-center align-self-ceter align-self-center">Last Name</label>

                            <div class="col-7">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                        <div class="row">
                            <label for="mobile" class="col-3 control-label align-self-center align-self-ceter" >Mobile</label>

                            <div class="col-7">
                                <input  type="text" class="form-control mobile" name="mobile"  value="{{ old('mobile') }}" required autofocus>

                                @if ($errors->has('mobile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('branch') ? ' has-error' : '' }}">
                        <div class="row">
                            <label for="branch" class="col-3 control-label align-self-center">Branch</label>

                            <div class="col-7">
                                <select class="form-control" id="branch" name="branch" required autofocus>
                                    <option>CSE</option>
                                    <option>ECE</option>
                                    <option>IT</option>
                                    <option>EEE</option>
                                    <option>CIVIL</option>
                                </select>
                                <!-- <input id="branch" type="text" class="form-control" name="branch" value="{{ old('branch') }}" required autofocus> -->

                                @if ($errors->has('branch'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('branch') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="row">
                            <label for="email" class="col-3 control-label align-self-center">E-Mail Address</label> 

                            <div class="col-7">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="row">
                            <label for="password" class="col-3 control-label align-self-center">Password</label>

                            <div class="col-7">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label for="password-confirm" class="col-3 control-label align-self-center">Confirm Password</label>

                            <div class="col-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                    </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" >Register</button>
            </div>
            </form>
        </div>
    </div>
</div>


@section('script')
<script>
    $('.mobile').keypress(function (e) {
        //console.log(e.which)
        console.log();
        if ($(this).val().length >= 10)
        {
            return false;
        }
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
    });

    $(function () {
        $('body').on('submit', '.registerForm', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: '{{ route('register') }}',
                data: $(this).serializeArray(),
                success: function (data) {
                    console.log(data);

                },
                error: function (data) {
                    console.log(data);
                }
            })
        }
        );
    });
</script>
@stop