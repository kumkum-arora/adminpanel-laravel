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
                <p class="right1">Page Manager</p>
                <div class="right2">
                    <p class="add">Add Page</p>
                    @if (isset($findproduct[0]))
                    <form action="{{url('editproduct-submit/'.$findproduct[0]->id)}}" method="POST" enctype="multipart/form-data">

                        @else

                        @endif
                        <form method="POST" action="{{url('add-product')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <table class="tb">
                                <tr>
                                    <td class="td4">Select Category</td>
                                    <td>
                                        <select name="selectcategory" value="{{isset($findproduct[0]->category) ? $findproduct[0]->category:''}} ">
                                            <option value="" selected>Select</option>
                                            @foreach($data as $row)
                                            <option value="{{$row->category}}">{{$row->category}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td4">Product Name</td>
                                    <td><input type="text" name="productname" value="{{isset($findproduct[0]->pname) ? $findproduct[0]->pname:''}} "></td>
                                </tr>
                                <tr>
                                    <td class="td4">Product Description</td>
                                    <td><input type="text" name="pdescription" style="height:250px" value="{{isset($findproduct[0]->pdescription) ? $findproduct[0]->pdescription:''}} "></textarea></td>
                                    <!-- <td><textarea name="pdescription" style="height:250px" value="{{isset($findproduct[0]->pdescription) ? $findproduct[0]->pdescription:''}} "></textarea></td> -->
                                    <!-- <input type="textarea" name="productdes" class="textbig" ></td> -->
                                </tr>
                                <tr>
                                    <td class="td4">Product Price</td>
                                    <td><input type="text" name="proprice" value="{{isset($findproduct[0]->proprice) ? $findproduct[0]->proprice:''}} "></td>
                                </tr>
                                <tr>
                                    <td class="td4">Product Image</td>
                                    <td><input type="file" name="image" required value="{{isset($findproduct[0]->proimage) ? $findproduct[0]->proimage:''}} "></td>
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