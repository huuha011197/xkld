<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\danh_muc;
use App\don_hang;
use App\lich_thi_tuyen;
use App\dk_tham_gia;
use Hash;
use Session;
use Auth;
class adminController extends Controller
{
    
    public function getadmin(){
    	return view('admin.home');
    }
    public function login(){
        return view('admin.login');
    }
    public function reg(){
        return view('admin.reg');
    }
    public function regsave(Request $req){
        $data=$req->all();
        $data['password']=Hash::make($req->password);
        User::create($data);
        return redirect()->back()->with('thongbao','Đăng kí thành công');

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('getadmin');
    }
    public function getlogin(Request $req){
        $this->validate($req,[
            'name' => 'required',
            'password' => 'required',
        ],
        [
            'name.required'=>"Bạn chưa nhập name",
            'password.required'=>'Bạn chưa nhập mật khẩu',
        ]);
        $cre=array('name'=>$req->name,'password'=>$req->password);
        if (Auth::attempt($cre)) {
           return redirect()->back()->with(['flag'=>'success','thongbao'=>'Đăng nhập thành công']);
        }else{
            return redirect()->back()->with(['flag'=>'danger','thongbao'=>'Đăng nhập thất bại sai email hoặc mật khẩu']);
        }
    }
     public function list_category(){
         $danh_muc=danh_muc::all();
        return view('admin.list_category',compact('danh_muc'));
    }
    public function add_category(){
        return view('admin.add_category');
    }
    public function add_save_category(Request $req){
        $this->validate($req,[
            'name' => 'required|min:4',
        ],
        [
            'name.required'=>"Bạn chưa nhập tên",
            'name.min'=>"Tên danh mục tối thiểu 4 kí tự",
        ]);
            $data= $req->all();
            danh_muc:: create($data);
        return redirect()->back()->with('success', "Thêm mới thành công");
    }
    public function cagetory_delete($id){
        $category= Danh_muc::find($id);
        $category->delete();
        return redirect()->back()->with('success', "XÓA thành công");
    }
    public function cagetory_update($id){
        $category=Danh_muc::find($id);
        return view('admin.update_category',compact('category'));
    }
    public function update_save_category(Request $req,  $id){
        $category= Danh_muc::find($id);
        $data=$req->all();
        $category->update($data);
        return redirect()->back()->with('success', "Cập nhật thành công");
    }
    public function list_don_hang(){
        $danh_muc=danh_muc::all();
        $product=don_hang::all()->groupBy('danhmuc_id');
       return view('admin.list_don_hang',compact('product','danh_muc'));
   }
   public function add_don_hang(){
        $danh_muc=danh_muc::all();
        return view('admin.add_don_hang',compact('danh_muc'));
}
    public function add_save_don_hang(Request $req){
        $this->validate($req,[
            'name' => 'required|min:4',
        ],
        [
            'name.required'=>"Bạn chưa nhập tên",
            'name.min'=>"Tên đơn hàng tối thiểu 4 kí tự",
        ]);
            $data= $req->all();
            $a=don_hang:: create($data);
            $data['doi_tuoi']=$req->tu." Đến ".$req->den;
            $data['donhang_id']=$a->id;
            dk_tham_gia:: create($data);
            $data['lich_bay']=$req->tu2."/".$req->den2;
            lich_thi_tuyen::create($data);
        return redirect()->back()->with('success', "Thêm mới thành công");
    }
}
