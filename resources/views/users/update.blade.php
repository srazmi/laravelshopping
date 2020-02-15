<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        @if ($errors->any())
        
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        
                        

                        
                        <form action="{{"/update/"}}"  method="GET" class="register-form" id="register-form">
                            {{ csrf_field() }}
                            @if(\Session::has('success'))
                            <p>{{\Session::get('success')}}
                                @endif
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" value="{{$user->name}}" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" value="{{$user->username}}" name="username" id="username" placeholder="Your UserName"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" value="{{$user->mail}}" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            {{-- <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" value="{{$user->password}}" name="pass" id="pass" placeholder="Password"/>
                            </div> --}}
                            <div class="form-group">
                                <label for="gender"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" value="{{$user->gender_id}}" name="gender_id" id="gender_id" placeholder="gender_id"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <button>update</button>
                                {{-- <a href="{{url("/update/".$user->id)}}" name="signup" id="signup" class="form-submit" value="update">update</a> --}}
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>