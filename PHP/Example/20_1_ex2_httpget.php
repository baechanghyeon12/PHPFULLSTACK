<?php
    // Get Method로 넘어온 데이터를 담고있는 변수
    var_dump($_GET);



    // $_GET["test1"]=1;  이렇게 수정되지 않도록 조심해야된다.
    // ** 주의사항 **

    // $post_get = $_GET; // 다른변수에 $_GET을 담아주고

    // $post_get["test1"]; // 위에서 담아준 변수를 사용한다.

    // $_GET은 원본 데이터이므로 값이 수정되지 않게 주심해야 합니다.
    // 그래서 현업에서는 다른 변수에 담아서 그 변수를 사용한다.
?>