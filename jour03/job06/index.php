<?php
            $str = "Les choses que l'on possede finissent par nous posseder.";
            $str_len = count(str_split($str));

            for ($i = $str_len - 1; $i >= 0; --$i)
                echo $str[$i];
        ?>
