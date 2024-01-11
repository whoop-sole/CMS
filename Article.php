<!-- Article.php -->

<?php

class Article {
    private $title;
    private $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function display() {
        echo "<h2>{$this->title}</h2>";
        echo "<p>{$this->content}</p>";
    }
}

?>
