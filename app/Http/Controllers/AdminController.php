<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Hash; 
use App\Models\Slider;
use App\Models\User;
use App\Models\Clock;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin/login');
    }

    public function proses_login(Request $request){
        // dd($request->all());
        $data = User::where('username', $request->username)->first();
        if($data){
            if(\Hash::check($request->password,$data->password)){
                session(['status' => 'login',
                        'username' => $request->username]);
                return redirect()->route('slider');
            }
            else {
                return redirect()->route('login')->with('message','Password Salah!');
            }
        }
        else{
            return redirect()->route('login')->with('message','Username tidak ditemukan!');
        }
    }
    
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
    public function slider()
    {
        $images = DB::table('slider')->get();
        return view('admin/viewslider', ['images' => $images]);
    }

    public function addslider()
    {
        return view('admin/addslider');
    }

    public function clock()
    {
        $clock = DB::table('clock')->first();
        return view('admin/clock',['clock' => $clock]);
    }

    public function proses_upload(Request $request){
		$this->validate($request, [
			'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'deskripsi' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('image');
        dd($file);
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_slider';
		$file->move($tujuan_upload,$nama_file);
 
		Slider::create([
			'nama' => $nama_file,
			'deskripsi' => $request->deskripsi,
            'tgl_upload' => time(),
		]);
 
        return redirect()->route('slider')->with('success','Upload Slider Berhasil');
	}

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $image_path = public_path("data_slider/$slider->nama");

        if(File::exists($image_path)){
            File::delete($image_path);
        }

        DB::delete('delete from slider where id = ?',[$id]);
        return redirect('/slider')->with('success', 'Data berhasil dihapus!');
    }
    public function profile()
    {
        $data = User::where('username','=', session('username'))->first();
        return view('admin/profile', ['data' => $data]);
    }

    public function edit(Request $request)
    {
        $this->validate($request,[
            'password' => 'required|min:8',
            'confirm_password' => 'required_with:password|same:password|'
        ]);

        $pass = Hash::make($request->password);

        DB::table('users')->where('id',$request->id)->update([
            'username' => $request->input('username'),
            'password' => $pass
        ]);

        return redirect('/slider')->with('success', 'Data profil berhasil diubah!');
    }

    public function editclock(Request $request)
    {
        $this->validate($request, [
            'date' => 'required|date|after:today',
            'time' => 'required|',
            'link' => 'required|'
        ]);

        DB::table('clock')->where('id',$request->id)->update([
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'link' => $request->input('link'),
        ]);

        return redirect('/clock')->with('success', 'Data Waktu Countdown berhasil diubah!');
    }
    
}
