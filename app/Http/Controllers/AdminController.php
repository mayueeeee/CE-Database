<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
  /*Function for Dashboard Page*/
  public function dashboard()
  {
    $all_girls = DB::table('girlinfo')->count();
    $pass_girls = DB::table('girlinfo')->where('isPass', 1)->count();
    $confirm_girls = DB::table('girlinfo')->where('isConfirm', 1)->count();
    $bye = $pass_girls - $confirm_girls;
    return view('admin.dashboard') -> withAll($all_girls)
                                   -> withPass($pass_girls)
                                   -> withConfirm($confirm_girls)
                                   -> withBye($bye);
  }
  /*Function for System Setting Page*/
  public function sys_setting()
  {
    $current_round = GirlController::getroundname(0);
    $input_enable = \App\System::find('enable_input') -> value;
    if($input_enable==1){
      $form_enable_checked = "checked";
    }
    else if($input_enable==0){
      $form_enable_checked = "";
    }
    return view('admin.setting') ->withRoundname($current_round)
                                 ->withInput_check($form_enable_checked);
  }
  public function save_setting(Request $Request)
  {
    $round = $Request->input('selectRound');
    $enable = $Request->input('checkEnable');
    if($enable != NULL){
      DB::table('system') ->where('setting', 'enable_input') ->update(['value' => 1]);
    }
    else {
      DB::table('system') ->where('setting', 'enable_input') ->update(['value' => 0]);
    }
    if($round != NULL){
      DB::table('system') ->where('setting', 'round') ->update(['value' => $round]);
    }
    return redirect()->action('AdminController@sys_setting');
  }

  /*Function for Listing girls*/
  public function getAllGirls()
  {
    //echo "Happy New Year 2017 นะจ๊ะ";
    $girls = \App\Girl::get();
    return view('admin.girlslist',compact('girls'));
    //echo $girls;

  }

  /*Function for get girl information*/
  public function getGirl($id)
  {
    $girl = \App\Girl::findOrFail($id);
    //return $girl;
    return view('admin.girlinfo',compact('girl'));

  }













  /*Function for Debug POST Data*/
  public function viewpost(Request $Request)
  {
    # code...
    echo $Request;
  }


}
