<div>
    <?php
    $pass = '123456'; //用戶密碼
    $p1 = password_hash($pass, PASSWORD_DEFAULT); //使用password_hash產生雜湊演算法的密碼
    $p2 = password_hash($pass, PASSWORD_DEFAULT); //就算有用戶使用相同的密碼，hash()不會重複、每一次都會產生不同的密碼

    echo "$p1 <br>";
    echo "$p2 <br>";

    // 確認密碼是否正確
    echo password_verify('123457', $p1) ? 'yes<br>' : 'no<br>';
    echo password_verify($pass, $p2) ? 'yes<br>' : 'no<br>';



    ?>
</div>