<!DOCTYPE html>
<html lang="en">

<head>
    <title>Abujad Login </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v19/css/util.css">

    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v19/css/main.css">



</head>

<body>
    <div class="limiter">
        <div class="container-login100">

            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                @if (session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                @endif
                <form action="{{ route('login.action.abujad', ['slug' => App::getLocale()]) }} " method="POST"
                    class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-b-33">
                        ABUJAD PANEL
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="username" name="username" value="{{ old('username') }}"
                            id="username" placeholder="Email">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>
                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" id="password" placeholder="Password">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>
                    <div class="container-login100-form-btn m-t-20">
                        <button class="login100-form-btn">
                            S'identifier
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </div>



</body>

</html>
