<div>
    <?php
    $pass = '123456';
    $md5 = md5($pass);
    $sha1 = sha1($pass);
    echo "md5: $md5 <br>";
    echo "sha1: $sha1 <br>";
    echo "sha1: $sha1 <br>";

    // md5和sha1的缺點是當使用者使用相同的密碼時會generate一樣的密碼

    echo "password_hash: " . password_hash($pass, PASSWORD_DEFAULT) . "<br>";
    echo "password_hash: " . password_hash($pass, PASSWORD_DEFAULT) . "<br>";

    // password_hash 不會重複密碼
    ?>
</div>