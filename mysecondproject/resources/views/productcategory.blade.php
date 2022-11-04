@if(session()->has('user_session'))
<!DOCTYPE html>
<html>

<head>
    <title>product category</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .pagination {
            list-style: none;
            margin-top: 20px;
        }

        .pagination li {
            display: inline;
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>

<body>
    <link rel="stylesheet" type="text/css" href="http://localhost/laraval/mysecondproject/resources/css/s1.css" />
    <div class="maincontainer">
        <img src="logo.png" class="pic" />
        <a href="{{url('/logout-user')}}" class="logout">Logout</a>
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
                <p class="right2">This section display the list of Pages</p>
                <p class="right3"><a><u>Click here</u></a> to create <a><u>new page</u></a></p>
                <form method="post" action="{{url('search-product')}}">
                    {{csrf_field()}}
                    <table class="uppertable">
                        <tr>
                            <td class="td1" colspan="2">Search</td>
                        </tr>
                        <tr>
                            <td>Search Product Here :</td>
                            <td><input type="text" name="productname"><input type="submit" name="search" value="Search" class="button"></td>
                        </tr>
                    </table>
                </form>
                <table class="righttable">
                    <tr class="tr1">
                        <td>Id</td>
                        <td>Product Category</td>
                        <td>Product Name</td>
                        <td>Product Description</td>
                        <td>Product Price</td>
                        <td>Product image</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    @foreach($data as $row)
                    <tr class="tr2">
                        <td>{{$row->id}}</td>
                        <td>{{$row->category}}</td>
                        <td>{{$row->pname}}</td>
                        <td>{{$row->pdescription}}</td>
                        <td>{{$row->proprice}}</td>
                        <td><img src="upload_image/{{$row->proimage}}" width="100px" height="60px"></td>
                        <td><a href="{{'edit-product/'.$row->id}}"><i class="fa-sharp fa-solid fa-pen"></i></td>
                        <td><a href="{{'delete-product/'.$row->id}}"><i class="fa-solid fa-trash"></i></td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="8">{{$data->links('pagi')}}
                        </td>
                    </tr>


                </table>
            </div>
        </div>
    </div>
    <div class="maincontainer3">
    </div>
</body>

</html>
@else
<script>
    window.location = "{{url('login-page')}}"
</script>
@endif