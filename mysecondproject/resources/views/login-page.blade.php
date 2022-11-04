<!DOCTYPE html>
<html>

<head>
    <title>Business Administration</title>
</head>

<body>
    <link rel="stylesheet" type="text/css" href="http://localhost/laraval/mysecondproject/resources/css/style.css" />
    <div class="maincontainer">
        <img src="logo.png" class="pic" />
    </div>
    </div>
    <!--inner container ends here-->
    <div class="maincontainer1">
        <div class="innercontainer1">
            <h3 class="logo">Friday,8th july 2012</h3>
        </div>
    </div>
    <div class="maincontainer2">
        <div class="innercontainer2">

            <p class="log">Login</p>

            <form method="POST" action="{{url('/login-submit')}}">
                {{csrf_field()}}
                <table class="logintab">
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="uname" /></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Login" class="sign" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="maincontainer3">
    </div>
</body>

</html>