<?php
require_once __DIR__."/../controller/controller.php";
require_once __DIR__."/../model/Member.model.php";
require_once __DIR__."/../controller/urlcontroller.controller.php";
class MemberController extends controller {

    public function gotodashboard($uname,$password){
        $member=Member::getInstance($uname);
        $valid=$member->getMemberValidation($uname,$password);
        $url = new URLController();
        if($valid=="user"){$data = $member->getMemberData($uname);$url->loaduserdashboard($data);}
        elseif($valid=="admin"){$data = $member->getMemberData($uname);$url->loadadmindashboard($data);}
        elseif($valid=="invalid"){$url->loadwithmessage("Invalid","Sorry, You have entered invalid username or password, Please retry !!!");}
        else{$url->loadwithmessage("Error",$valid);}


    }
    public function signupmember($nic,$fname,$lname,$uname,$email,$mobileno,$password){
        $url = new URLController();
        $member=Member::getInstance($uname);
        $status=$member->signupmember($nic,$fname,$lname,$uname,$email,$mobileno,$password);
        if($status=="Success"){$url->loadwithmessage("Success","SignUp Success We We check Your Details and Contact you !");}
        else{$url->loadwithmessage("Failed",$status);}

    }
    public function viewmydetails($uname){
        $member=Member::getInstance($uname);
        $url = new URLController();
        $data = $member->getMemberData($uname);
        $url->loadmydetails($data);

    }
    public function printmydetails($uname){
        $member=Member::getInstance($uname);
        $url = new URLController();
        $data = $member->getMemberData($uname);
        $url->loadmydetailsforprint($data);
        
    }
    public function updatemember($nic,$uname,$fname,$lname,$profilepic,$email,$mobile,$password,$privilege,$status){
        $member=Member::getInstance($uname);
        $url = new URLController();
        $status=$member->updatemember($nic,$uname,$fname,$lname,$profilepic,$email,$mobile,$password,$privilege,$status);
        if($status=="Success"){$url->loadwithmessage("Success","Your Update Success !");}
        else{$url->loadwithmessage("Failed",$status);}
        
    }
    public function getallmemberdetails(){
        $member = Member::getInstance("...");
        return $member->getallmemberdetails();
        
    }

}




?>
