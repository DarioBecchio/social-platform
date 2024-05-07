## SQL Query

- Seleziona gli utenti che hanno postato almeno un video

SELECT `medias` . `type` , `users` . `username`
FROM `medias`
JOIN `users`
ON `medias` . `user_id` = `users` . `id`
WHERE `medias` . `type` = 'video'
GROUP BY `users` . `username`;

- Seleziona tutti i post senza Like (13)

SELECT `posts` . `id`, `posts` . `user_id`, `posts` . `date`, `posts` . `created_at`
FROM `posts`
LEFT JOIN `likes` ON `posts` . `id` = `likes` . `post_id`
WHERE `likes` . `post_id` IS NULL;

- Conta il numero di like per ogni post (165)

SELECT `post_id`, COUNT(\*) AS `user_id` FROM `likes` GROUP BY `post_id`;

- Ordina gli utenti per il numero di media caricati (25)

SELECT `user_id`, COUNT(\*) AS `post_created` FROM `medias` GROUP BY `user_id` ORDER BY `post_created` DESC;

- Ordina gli utenti per totale di likes ricevuti nei loro posts

SELECT `posts` . `user_id`, SUM(CASE WHEN `likes` . `post_id` IS NOT NULL THEN 1 ELSE 0 END) AS `total_likes_received`
FROM `posts`
LEFT JOIN likes ON `posts` . `id` = `likes` . `post_id`
GROUP BY `posts` . `user_id`
ORDER BY `total_likes_received` DESC;

<?php while ($row = $result->fetch_assoc()) : 
        ['title'=>$title , 'date'=>$date] = $row;
            var_dump($title,$date); ?>

        <div>
            <p>
               Post title : <strong><?= $title ?></strong>

            </p>
            <p>
                Post upload: <strong><?= $date?></strong>
            </p>
        </div>

       <?php endwhile; ?>
