<?php
    include 'src/model.php';

    if (isset($_GET['id'])) {
        $postId = $_GET['id'];

        $post = getPost($postId);

        if ($post) {
            $comments = getComment($postId);

            include 'templates/post.php';
        } else {
            echo 'Post not found.';
        }
    } else {
        echo 'Post ID not provided.';
    }
?>