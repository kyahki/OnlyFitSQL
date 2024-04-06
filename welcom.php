<body>
    <?php
    // See the password_hash() example to see where this came from.
    $hash = '$2y$10$.vGA1O9wmRjrwAVXD98HNOgsNpDczlqm3Jq7KnEd1rVAGv3Fykk1a';

    if (password_verify('rasmuslerdorf', $hash)) {
        echo 'Password is valid!             ';
    } else {
        echo 'Invalid password.        ';
    }

    echo password_hash("bhq123zxc", PASSWORD_DEFAULT);

    $hashed = '$2y$10$GTukJJxreJ/nZz0cQXXfwu785E0SszTEgJgnqoP.EJ8D8xyuhXUlW';
    
    echo password_verify("bhq123zxc", $hashed) ? 'password correct' : 'password incorrect';
    ?>
</body>