<?php
    session_start();   //告訴系統準備開始使用
    unset($_SESSION["counter"]);
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=counter.php'>";

?>