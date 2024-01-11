<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>
</head>
<body>
    <h1>Post Details</h1>

    <div>
        <h2><?php echo $post['firstname'] . ' ' . $post['lastname']; ?></h2>
        <p>French Visit Date: <?php echo $post['reg_date']; ?></p>
        <p>Post Identifier: <?php echo $postId; ?></p>

        <?php if (!empty($comments)): ?>
            <h3>Comments:</h3>
            <ul>
                <?php foreach ($comments as $comment): ?>
                    <li>
                        <strong><?php echo $comment['firstname']; ?></strong>
                        <span>(<?php echo $comment['comment_date']; ?>):</span>
                        <p><?php echo $comment['comment']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
    <hr>
</body>
</html>