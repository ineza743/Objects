<?php

require('../model/business.php');

//adding businesses
function adding_business($first_name,$last_name,$email,$phone,$occupation,$role,$address,$business,$linkedin,$document,$details,$FileDestination,$password,$Padd){
    $bus = new business();
    return $bus->add_business($first_name,$last_name,$email,$phone,$occupation,$role,$address,$business,$linkedin,$document,$details,$FileDestination,$password,$Padd);
}

//duplicate emails
function duplicate($email){
    $bus = new business();
    return $bus->duplicate_business($email);
}

//selecting businesses
function selecting_businesses(){
    $bus = new business();
    return $bus->select_businesses();
}


//selecting 1 business
function selecting_business($email){
    $bus = new business();
    return $bus->select_business($email);

}

//deleting business
function deleting_business($id){
    $bus = new business();
    return $bus->delete_business($Sid);

}

//updating investor
function updating_business($business_id,$f_name, $l_name,$email,$phone,$bussiness_name,$role,$address,$business_type,$linkedin,$instagram,$twitter,$details,$picture){
    $bus = new business();
    return $bus->update_business($business_id,$f_name, $l_name,$email,$phone,$bussiness_name,$role,$address,$business_type,$linkedin,$instagram,$twitter,$details,$picture);

}

function selecting_total(){
    $bus = new business();
    return $bus->total_business();
}




?>