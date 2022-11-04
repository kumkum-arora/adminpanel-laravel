<html>

<head>
    <title>Business Administration</title>
</head>

<body>
    <link rel="stylesheet" type="text/css" href="http://localhost/laraval/mysecondproject/resources/css/s2.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/laraval/mysecondproject/resources/css/s1.css" />
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
                    <li><a href="{{url('/add')}}">Add Page</a></li>
                    <li><a href="{{url('/categorysummery')}}" style="text-decoration: none; color:#006064;">Category summary</a></li>
                    <li><a href="{{url('/addcategory')}}">Add Category</a></li>
                    <li><a href="{{url('/productcategory')}}">Product summary</a></li>
                    <li><a href="{{url('/addproduct')}}">Add Product</a></li>
                    <li><a href="{{url('/change')}}">Change Password</a></li>
                    <li>Login Informaton</br>Username : Admin</br>Email : example@domain.com</li>
                </ul>
            </div>
            <div class="right">
                <p class="right1">Category Manager</p>
                <div class="rightadd">
                    <p class="add">Add Category</p>
                    @if (isset($findcategory[0]))
                    <form action="{{url('editcategory-submit/'.$findcategory[0]->id)}}" method="POST">

                        @else

                        @endif
                        <form method="post" action="{{url('category-submit')}}">
                            {{csrf_field()}}
                            <table class="tb">
                                <tr>
                                    <td class="tdd">Category Name : <input type="text" name="category" value="{{isset($findcategory[0]->category) ? $findcategory[0]->category:''}} " placeholder="Enter category here..."></td>
                                </tr>
                            </table>
                            <p class="left2"><input type="submit" value="Save" class="button2" name="save"><span class="span1"><input type="submit" value="Cancel" class="button2"></span></p>
                        </form>
                </div>
            </div>
        </div>
        <div class="maincontainer3">
        </div>
</body>

</html>