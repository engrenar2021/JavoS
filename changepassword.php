<?php
    #$user_email = "maryandrioli@gmail.com";
    #$user_pass = "blablabla"; // new password
    $user_email = readline("Email a alterar a senha: ");
    $user_pass = readline("Nova senha: ");
    $uid = readline("User ID in the database: "); // user_id in the database


    $length = 10;
    $characters = "123456789abcdefghijklmnopqrstuvwxyz";
    $user_code = "";
    if($uid && strlen($uid)) $user_code = $uid; 
    for ($p = 0; $p < $length; $p++) {
        $user_code .= $characters[mt_rand(0, strlen($characters)-1)];
    }
    if($uid && strlen($uid)) {
        $user_code = substr( $user_code, 0, -strlen($uid) );
    }
    #print("code: ");
    #print($user_code);
    #print("\n");
    $salt = sha1(mt_rand());
    $pass_digest = crypt($user_pass, '$2a$12$' . $salt);

    $data_insert = array('email' => $user_email, 'pass' => $pass_digest, 'code' => $user_code);
    #print_r($data_insert);
    #print("\n");
    print("SQL to use to update DB:");
    print("\n");
    print("UPDATE `users`\nSET `pass`='");
    print($pass_digest);
    print("', `code`='");
    print($user_code);
    print("'\nWHERE `uid`='");
    print($uid);
    print("'");
    print("\n");
