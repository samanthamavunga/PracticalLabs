<?php
include_once (dirname(__FILE__)).'/../controllers/post_controller.php';

if(isset($_GET['id'])){
    $deletePost = deletePost($_GET['id']);
    if($deletePost){
        header("location: ../index.php");
    }else{
        echo "something went wrong";
    }
}