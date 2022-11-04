<html>

<head>
    <title>Business Administration</title>
</head>

<body>
    <link rel="stylesheet" type="text/css" href="http://localhost/laraval/mysecondproject/resources/css/s2.css" />
    <div class="maincontainer">
        <img src="http://localhost/laraval/mysecondproject/resources/images/logo.png" class="pic" />
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
            <div class="left">
                <ul class="table">
                    <li><a href="{{url('/profile')}}" style="text-decoration: none; color:#006064;">Page Summary</a></li>
                    <li>Add Page</li>
                    <li>Change Password</li>
                    <li>Login Informaton</br>Username : Admin</br>Email : example@domain.com</li>
                </ul>
            </div>
            <div class="right">
                <p class="right1">Page Manager</p>
                <div class="right2">
                    <p class="add">Add Page</p>
                    <form method="post" action="{{url('edit_form/'.$findrec[0]->id)}}">
                        {{csrf_field()}}
                        <table class="tb">
                            <tr>
                                <td class="td4">Name</td>
                                <td><input type="text" name="name" value="{{isset($findrec[0]->name) ? $findrec[0]->name:''}} "></td>
                            </tr>
                            <tr>
                                <td class="td4">content</td>
                                <td><img src="http://localhost/laraval/mysecondproject/resources/images/pic.png" class="pic1"><br /><input type="text" class="t1" name="content" value="{{isset($findrec[0]->content) ? $findrec[0]->content:''}} "></td>
                            </tr>
                            <tr>
                                <td class="td4">Status</td>
                                @if ($findrec[0]->status==1);
                                <td><input type="checkbox" name="status" checked></td>
                                @else
                                <td><input type="checkbox" name="status"></td>
                                @endif
                                <!-- <td><input type="checkbox" name="status" value="{{isset($findrec[0]->status) ? $findrec[0]->status:''}} "></td> -->
                            </tr>
                        </table>
                        <p class="left1"><input type="submit" value="Save" class="button2" name="save"><span class="span1"><input type="submit" value="Cancel" class="button2"></span></p>
                    </form>
                </div>
            </div>
        </div>

        <div class="maincontainer3">
        </div>
</body>

</html>