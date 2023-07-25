<style>
    .form-gap {
        padding-top: 70px;
    }
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="form-gap"></div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Forgot Password?</h2>
                        <p>You can reset your password here.</p>
                        @if (session()->has('Password'))
                        <div class="alert alert-danger">{{ session()->get('Password') }}</div>
                    @endif
                        @if (session()->has('E_mail'))
                        <div class="alert alert-danger">{{ session()->get('E_mail') }}</div>
                    @endif
                        <div class="panel-body">

                            <form id="register-form" role="form" action="{{ route('forget_success') }}"
                                autocomplete="off" class="form" method="get ">
                                <span class="text-danger">
                                    @error('E_mail')
                                        {{$message}}
                                    @enderror
                                </span>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-envelope color-blue"></i></span>
                                        <input value="{{old('E_mail')}}" id="email" name="E_mail" placeholder="email address"
                                            class="form-control" type="email">
                                           
                                    </div>
                                    <br>
                                    <span class="text-danger">
                                        @error('Mobile_Nomber')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i
                                                class="glyphicon glyphicon-envelope color-blue"></i></span>
                                        <input value="{{old('Mobile_Nomber')}}"  id="email" name="Mobile_Nomber" placeholder="Mobile_Nomber"
                                            class="form-control" type="number">
                                           
                                    </div>
                                    <br>
                                    <span class="text-danger">
                                        @error('New_Password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                                            <input value="{{old('New_Password')}}"  id="email" name="New_Password" placeholder=" New Password "
                                                class="form-control" type="number">
                                        </div>
                                        <br>
                                        <span class="text-danger">
                                            @error('Confirm_Password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                                            <input value="{{old('Confirm_Password')}}"  id="email" name="Confirm_Password" placeholder=" Confirm Password "
                                                class="form-control" type="number">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <input name="recover-submit" class="btn btn-lg btn-primary btn-block"
                                        value="Confirm" type="submit">
                                </div>

                                <input type="hidden" class="hide" name="token" id="token" value="">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
