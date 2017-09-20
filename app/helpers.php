<?php

function getroundname($roundid){
    switch ($roundid) {
    case 1:return "ช้างเผือก"; break;
    case 2:return "โอลิมปิก"; break;
    case 3:return "รับตรง"; break;
    case 4:return "ต่อเนื่อง"; break;
    case 5:return "Admission"; break;
    default:return "Bui";
  }

}

function get_status($pass,$confirm)
{
  if($pass==0){
    return "ไม่ผ่าน";
  }
  elseif ($pass==1 && $confirm==1) {
    return "ยืนยันสิทธิ์แล้ว";
  }
  else {
    return "สละสิทธิ์";
  }
}


?>
