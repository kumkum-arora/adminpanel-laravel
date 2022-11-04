<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\add;
use App\Models\student;
use App\Models\addproduct;
use App\Models\password;
use Carbon\Carbon;
use Session;

class Icontroller extends Controller
{
    public function login_page()
    {
        return view('login-page');
    }
    public function login_submit(Request  $request)
    {

        $username = $request->get('uname');
        $password = $request->get('pass');
        $data = password::select('*')->where('username', $username)
            ->where('password', $password)
            ->first();
        if ($data) {
            Session()->put("user_session", $username);
            return redirect('/profile');
        }
    }
    public function profile()
    {
        return view("profile");
    }
    public function logout()
    {
        Session()->flush();
        return redirect('login-page');
    }
    public function add_page()
    {
        return view("add");
    }
    public function form_submit(Request $request)
    {
        $add = new add;
        if ($request->isMethod('post')) {
            $add->name = $request->get('name');
            $add->content = $request->get('content');
            if ($request->get('status')) {
                $add->status = $request->get('status');
            }
            if ($add->status == "on") {
                $add->status = 1;
            } else {
                $add->status = 0;
            }
            $add->save();
        }
        return redirect("/profile");
    }
    public function displaydata()
    {
        $data = add::paginate(8);
        return view('profile', compact('data'));
    }
    public function deletedata($id)
    {
        $ob = add::find($id);
        $ob->delete();
        return redirect("profile");
    }
    public function editdisp($id)
    {
        $findrec = add::where('id', $id)->get();
        return view('edit1', compact('findrec'));
    }
    public function editdata(Request $request, $id = '')
    {
        $add = add::find($id);
        if ($request->isMethod('post')) {
            $add->name = $request->get('name');
            $add->content = $request->get('content');
            // $add->status = $request->get('status');
            if (!empty($request->get('status'))) {
                $add->status = $request->get('status');
            }
            if ($add->status == "on") {
                $add->status = 1;
            } else {
                $add->status = 0;
            }
            $add->save();
        }
        return redirect("profile");
    }
    public function search(Request $request)
    {
        if ($request->isMethod('post')) {
            $name = $request->get('name');
            $data = add::where('name', 'LIKE', '%' . $name . '%')->paginate(8);
        }
        return view('profile', compact('data'));
    }
    public function display_addcategory()
    {
        return view("addcategory");
    }
    public function category_submit(Request $request)
    {
        $add = new student;
        if ($request->isMethod('post')) {
            $add->category = $request->get('category');
            $add->save();
        }
        return redirect("/categorysummery");
    }
    public function displaycategory()
    {
        $data = student::paginate(5);
        return view('categorysummery', compact('data'));
    }
    public function delete_category($id)
    {
        $ob = student::find($id);
        $ob->delete();
        return redirect("categorysummery");
    }
    public function edit_categorydisplay($id)
    {
        $findcategory = student::where('id', $id)->get();
        return view('addcategory', compact('findcategory'));
    }
    public function editcategory(Request $request, $id = '')
    {
        $add = student::find($id);
        if ($request->isMethod('post')) {
            $add->category = $request->get('category');
            $add->save();
        }
        return redirect("categorysummery");
    }
    public function search_category(Request $request)
    {
        if ($request->isMethod('post')) {
            $category = $request->get('categoryname');
            $data = student::where('category', 'LIKE', '%' . $category . '%')->paginate(5);
        }
        return view('categorysummery', compact('data'));
    }
    public function add_productpage()
    {
        return view("addproduct");
    }
    public function selectcategory()
    {
        $data = student::paginate(5);
        return view('addproduct', compact('data'));
    }
    public function add_product(Request $request)
    {
        $this->validate($request, ['selectcategory' => 'required']);
        $this->validate($request, ['productname' => 'required']);
        $this->validate($request, ['pdescription' => 'required']);
        $this->validate($request, ['proprice' => 'required']);
        $add = new addproduct;
        if ($request->isMethod('post')) {
            $add->category = $request->get('selectcategory');
            $add->pname = $request->get('productname');
            $add->pdescription = $request->get('pdescription');
            $add->proprice = $request->get('proprice');
            if (!empty($request->file('image'))) {
                $file = $request->file('image');
                $current = uniqid(Carbon::now()->format('YmdHs'));
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $fullfilename = $current . "." . $file->getClientOriginalExtension();
                // print_r($fullfilename);
                $destinationPath = public_path('upload_image');
                $file->move($destinationPath, $fullfilename);
                $add->proimage = $fullfilename;
            }
            $add->save();
        }
        return redirect("productcategory");
    }
    public function display_product_category()
    {
        return view("productcategory");
    }
    public function  display_productsummery()
    {
        $data = addproduct::paginate(3);
        return view('productcategory', compact('data'));
    }
    public function delete_product($id)
    {
        $ob = addproduct::find($id);
        unlink('upload_image/' . $ob->proimage);
        $ob->delete();
        return redirect("productcategory");
    }
    public function edit_productdisplay($id)
    {
        $data = student::paginate(5);
        $findproduct = addproduct::where('id', $id)->get();
        return view('addproduct', compact('data', 'findproduct'));
    }
    public function editproduct(Request $request, $id = '')
    {
        $add = addproduct::find($id);
        if ($request->isMethod('post')) {
            // $add->category = $request->get('selectcategory');
            $add->pname = $request->get('productname');
            $add->pdescription = $request->get('pdescription');
            $add->proprice = $request->get('proprice');
            if (!empty($request->file('image'))) {
                $file = $request->file('image');
                $current = uniqid(Carbon::now()->format('YmdHs'));
                $file->getClientOriginalName();
                $file->getClientOriginalExtension();
                $fullfilename = $current . "." . $file->getClientOriginalExtension();
                // print_r($fullfilename);
                $destinationPath = public_path('upload_image');
                $file->move($destinationPath, $fullfilename);
                $add->proimage = $fullfilename;
                $ob = addproduct::find($id);
                unlink('upload_image/' . $ob->proimage);
            }
            $add->save();
        }
        return redirect("productcategory");
    }
    public function search_product(Request $request)
    {

        if ($request->isMethod('post')) {
            $name = $request->get('productname');
            $data = addproduct::where('pname', 'LIKE', '%' . $name . '%')->paginate(5);
        }
        return view('productcategory', compact('data'));
    }
    public function change()
    {
        return view("change");
    }

    public function update_password(Request $request)
    {
        $username = $request->session()->get('user_session');
        $password = $request->get('oldp');
        $data = password::select('*')->where('username', $username)
            ->where('password', $password)
            ->first();
        if ($data) {
            if ($request->isMethod('post')) {
                $data->password = $request->get('pnew');
                $data->save();
            }
        }
        return redirect("change");
    }
}
