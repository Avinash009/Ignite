
<!-- The Modal -->
<div class="modal fade" id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form class="form-horizontal loginForm" method="POST" action="">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="row">
                            <label for="email" class="col-3 control-label align-self-center align-self-center">E-Mail Address</label>

                            <div class="col-7">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                            <label for="password" class="col-3 control-label align-self-center align-self-ceter align-self-center">Password</label>

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



            <!-- Modal footer -->
            <div class="modal-footer login-footer">
                    <div class="form-group">
                        <div class="row">

                            <div class="">
                            <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                            </div>
                        </div>
                    </div>
                
            </div>

        </div>
    </div>
</div>
@section('script')
<script>
    $(function () {
        $('body').on('submit', '.loginForm', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: '{{ route('login') }}',
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