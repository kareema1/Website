<?php

include "index.php";
include "addObserver.php";
include "admin.php";


//Check Session
function TestSession(){  
    if(GetUser() == true){
        echo"true";
        return true;
    }else{
        return false;
 }
}
 
 //Check the connect to Server
 function TestConnectToServer(){
    if(ConnectToServer() != null){
     return true;
    }else{
     return false;
    }
 }
 
 
 //Return the Averg (Score)
 function TestAverg(){
    if(2 == GetAverg(10,5)){
        return true;
    }
    return false;
 }
 
 //if sum is equal
 function TestSum(){
    if(Sum(1,2) == 3){
        return true;
    }
    return false;
 }
 
 
 //Check password Match
 function TestPasswordMatch(){
    $str = "123";
    if(PassowrdMatch("123",$str)){
        return true;
    }else{
        return false;
    }
 }

?>