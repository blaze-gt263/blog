<?php

include(ROOT_PATH . "/app/database/db.php");

if (isset($_POST['register-btn'])) {
    unset($_POST['register-btn'], $_POST['passwordconf']);
    $_POST['admin'] = 0;

    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $user_id = create('users', $_POST);
    $user = selectOne('users', ['id' => $user_id]);
    dd($user);
}
