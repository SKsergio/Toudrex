@extends('templates.LoginApp')

{{-- pass the specific css --}}
@push('css')
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
@endpush

@section('content')  
<div class="main">
    <div class="content__main">

        <secction class="sc1">
            <img src="{{asset('img/file.png')}}" alt="logo papaaa" id="logo">
            <section>
                <p>Always stay connected with yours :)</p>
            </section>
        </secction>

        <secction class="sc2">

            <div class="wrapper">

                <h1>Toudrex</h1>

                <form class="form__login" method="POST" action="">

                    <div class="container_inputs">
                        <div class="input__box">
                            <input type="text" class="input_file" required id="user_gmail" name="user_login" autocomplete="new-username">
                            <span>User</span>
                            <i></i>
                        </div>

                        <div class="input__box">
                            <input type="password" class="input_file" required id="password" name="password_login" autocomplete="new-password">
                            <span>Password</span>
                            <i></i>
                        </div>
                    </div>
                    
                    <div class="butons">

                        <input type="submit" id="loginBtn" value="Login" class="LOGBTN">
                        
                        <div class="forg">
                            <a id="forgotPassword" href="#">Forgotten password?</a>
                        </div>

                        <a class="create" id="createAccountBtn" href="#">Create new account</a>

                        
                    </div>
                    
                </form>
            </div>
            
        </secction>
    </div>  
</div>
@endsection