<?php

class Article
{
    public function __construct()
    {
        $this->db = new PDO(
            'mysql:host=localhost;port=2020;dbname=LMC','editor', '123xyz'
        );
    }

    public function save($data)
    {
        $sql = 'INSERT INTO articles VALUES (' . $_GET['id'] . ', '. $data['title'] . ', ' . $data['content'] . ')';

        $this->db->query($sql);
    }

    public function getArticle()
    {
        $sql = 'SELECT * FROM articles WHERE id = ' . $_GET['id'];
        $result = $this->db->query($sql)[0];

        echo '<h1>' . $result['title'] . '</h1>' . '<p>' . $result['content'] . '</p>';
    }
}
