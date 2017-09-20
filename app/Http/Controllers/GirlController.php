<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GirlController extends Controller
{
    public static function getroundname($rid){
      if($rid==0){
        $roundid = \App\System::find('round') -> value;
      }
      else {
        $roundid = $rid;
      }
      switch ($roundid) {
        case 1:return "ช้างเผือก"; break;
        case 2:return "โอลิมปิก"; break;
        case 3:return "รับตรง"; break;
        case 4:return "ต่อเนื่อง"; break;
        case 5:return "Admission"; break;
        default:return "Bui";
      }

    }

    public function getHome(){
      $enable_form = \App\System::find('enable_input') -> value;
      $enable_regis_id = \App\System::find('enable_regisid_page') -> value;
      $round = GirlController::getroundname(0);
      return view('index') -> withRoundname($round)
                           -> withEnable($enable_form);
    }

    public function postHome(Request $id){
      $enable_form = \App\System::find('enable_input') -> value;
      $regisid=$id->input('regisID');
      $round = GirlController::getroundname(0);
      return view('girlform') -> withRegis(0)
                              -> withEnable($enable_form)
                              -> withRoundname($round);
    }

    public function savedata(Request $postdata){
      //Receive form data
      $round = \App\System::find('round') -> value;
      $encoded_img = $postdata->input('imageURI');
      $regisid = $postdata->input('regisID');
      $txtFirstName = $postdata->input('txtFirstName');
      $txtLastName = $postdata->input('txtLastName');
      $txtNickName = $postdata->input('txtNickName');
      $txtSex = $postdata->input('txtSex');
      $txtPhone = $postdata->input('txtPhone');
      $txtParentPhone = $postdata->input('txtParentPhone');
      $txtLine = $postdata->input('txtLine');
      $txtFacebook = $postdata->input('txtFacebook');
      $txtSchoolName = $postdata->input('txtSchoolName');
      $txtEmail = $postdata->input('txtEmail');
      $txtSize = $postdata->input('txtSize');
      $txtReligion = $postdata->input('txtReligion');

      //Save data to DB and get record ID
      $gid = DB::table('girlinfo')->insertGetId(
        ['regisID' => $regisid, 'Round' => $round, 'txtFirstName' => $txtFirstName, 'txtLastName' => $txtLastName,
        'txtNickName' => $txtNickName, 'txtSex' => $txtSex, 'txtPhone' => $txtPhone, 'txtParentPhone' => $txtParentPhone,
        'txtLine' => $txtLine, 'txtFacebook' => $txtFacebook, 'txtSchool' => $txtSchoolName,'txtEmail' => $txtEmail,
        'txtSize' => $txtSize, 'txtReligion' => $txtReligion]);
      //echo "Primary ID:".$gid."\n";

      //Store girl image
      $imgdata = base64_decode($encoded_img);
      $filename = $gid.$regisid.".jpg";
      //echo "Regis : ".$regisid;
      //echo "\nfilename : ".$filename;

      if($imgdata!="")
      {
        Storage::disk('girlstorage')->put("girlphotos/".$round."/".$filename, $imgdata);
        //return("\nupload success");
        return view('confirm') -> withGirlname($txtNickName)
                               -> withError(0)
                               -> withRoundname(GirlController::getroundname(0));
      }
      else{
        return view('confirm') -> withError(1)
                               -> withRoundname(GirlController::getroundname(0));
      }
    }
}
