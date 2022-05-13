<?php

/**this file creates instances of the classes created in models */
require('../model/opportunity.php');

//instances of Opportunities
function added_opportunity($opportunity_name, $reward, $details, $deadline, $investor_id, $apply){
    $opp = new Opportunities();
    return $opp->adding_opportunity($opportunity_name, $reward, $details, $deadline, $investor_id, $apply);
}



function fetched_opportunities(){
    $opp = new Opportunities();
    return $opp->fetch_opportunities();
}


function fetched_opportunity($opportunity_id){
    $opp = new Opportunities();
    return $opp->fetch_opportunity($opportunity_id);
}

function total_opportunity($user_id){
    $opp = new Opportunities();
    return $opp->sum_opportunity($user_id);
}

?>