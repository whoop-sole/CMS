<!-- User.php -->

<?php

class User {
    private $username;
    private $email;

    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }

    public function display() {
        echo "<p>Username: {$this->username}</p>";
        echo "<p>Email: {$this->email}</p>";
    }
}

?>
