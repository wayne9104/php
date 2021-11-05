<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234")) //帳號與密碼
        echo "welcome";        //輸入正確顯示內容
    else
        echo "Login failure";  //輸入錯誤內容
?>