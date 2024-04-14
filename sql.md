## SQL Query

- Seleziona gli utenti che hanno postato almeno un video

SELECT `user_id` FROM `medias` WHERE `type` = 'video';

- Seleziona tutti i post senza Like (13)

SELECT

- Conta il numero di like per ogni post (165)

SELECT post_id, COUNT(\*) AS `user_id` FROM likes GROUP BY post_id;(175)

- Ordina gli utenti per il numero di media caricati (25)



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