<?php

require('../model/supporter.php');

//adding investors
function adding_investor($first_name, $last_name,	$email,	$address,$phone,$occupation,$business_type,$document,$password,$details){
    $investor = new supporter();
    return $investor->add_investor($first_name, $last_name,	$email,	$address,$phone,$occupation,$business_type,$document,$password,$details);
}

//selecting investors
function selecting_investors(){
    $investor = new supporter();
    return $investor->select_investors();
}


//selecting 1 investor
function selecting_investor($email){
    $investor = new supporter();
    return $investor->select_investor($email);

}

//deleting investor
function deleting_investor($id){
    $investor = new supporter();
    return $investor->delete_investor($Sid);

}

//updating investor
function updating_investor($investor_id,$first_name, $last_name,$email,$address,$phone,$occupation,$business_type,$document,$password,$details){
    $investor = new customer();
    return $investor->update_investor($investor_id,$first_name, $last_name,$email,$address,$phone,$occupation,$business_type,$document,$password,$details);

}



//adding incubators
function adding_incubator($first_name, $last_name,	$email,	$address,$phone,$occupation,$business_type,$document,$password,$details){
    $investor = new supporter();
    return $investor->add_incubator($first_name, $last_name,	$email,	$address,$phone,$occupation,$business_type,$document,$password,$details);
}

//selecting incubators
function selecting_incubators(){
    $investor = new supporter();
    return $investor->select_incubators();
}


//selecting 1 incubator
function selecting_incubator($email){
    $investor = new supporter();
    return $investor->select_incubator($email);

}

//deleting incubator
function deleting_incubator($id){
    $investor = new supporter();
    return $investor->delete_incubator($Sid);

}

//updating investor
function updating_incubator($investor_id,$first_name, $last_name,$email,$address,$phone,$occupation,$business_type,$document,$password,$details){
    $investor = new supporter();
    return $investor->update_incubator($investor_id,$first_name, $last_name,$email,$address,$phone,$occupation,$business_type,$document,$password,$details);

}

function total_investor(){
    $investor = new supporter();
    return $investor->total_investors();
}

function total_incubator(){
    $investor = new supporter();
    return $investor->total_incubators();
}


?>