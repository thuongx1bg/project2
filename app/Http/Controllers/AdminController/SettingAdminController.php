<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Exception;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Stmt\TryCatch;

class SettingAdminController extends Controller
{
    public function index(){
        $settings=Setting::paginate(5);
        view()->share('settings', $settings);
        return view('back-end.admin.setting.index');
    }
    public function create(){
        return view('back-end.admin.setting.add');
    }
    public function store(Request $request){
        try{
            DB::beginTransaction();
            $setting=Setting::create([
                'config_key'=>$request->config_key,
                'config_value'=>$request->config_value
    
            ]);
            DB::commit();
          session()->flash('success','Bạn đã thêm ');
          
            return redirect()->route('setting.index');

        }
        catch(Exception $exception){
            DB::rollBack();

        }

       
    }
    public function edit($id){
        $setting=Setting::where('id',$id)->first();
        
        view()->share('setting', $setting);
        return view('back-end.admin.setting.edit');

    }

    public function update($id,Request $request){

        try{
            DB::beginTransaction();
            $setting=Setting::find($id);
            $setting->update([
                'config_key'=>$request->config_key,
                'config_value'=>$request->config_value
            ]);
            DB::commit();
            session()->flash('success','Bạn đã sửa');
            return redirect()->route('setting.index');


        }
        catch(Exception $e){
            DB::rollBack();
        }
       
    }

    public function delete($id){
        Setting::where('id',$id)->delete();
        session()->flash('success','Bạn đã xoá ');

        return redirect()->route('setting.index');

    }
}
