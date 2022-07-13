<?php
function dequy($data,$selected,$parent=0,$lv=''){
    foreach ($data as $val){
        if ($val->parent == $parent){
            if ($val->id==$selected){
                echo  '<option value="'.$val->id.'" selected>'.$lv.$val->name.'</option>';
            }else
                echo  '<option value="'.$val->id.'">'.$lv.$val->name.'</option>';
            dequy($data,$selected,$val->id,$lv.'---|');
        }
    }
}
function dequytable($data,$parent=0,$lv=''){
    foreach ($data as $val){
        if ($val->parent == $parent){
            echo '<tr>
                <td>'.$lv.$val->name.'</td>
                <td><a  href="'.route('admin.astronomicalentity.delete',$val->id).'" onclick="return deleteConfirm()">Xóa</a></td>
            <td><a href="'.route('admin.astronomicalentity.edit',$val->id).'">Sửa</a></td>
                </tr>';
            dequytable($data,$val->id,$lv.'---|');
        }
    }
}
?>
