<table style="text-align: center;">
    <?php
        $number = 1;    
        $columns = 14;
        $rows = 60;
        
        echo "\n";
    
        for($i=$number; $i<$columns; $i++){
            echo '<tr>' . "\n";
            
            for($j=0; $j<$rows; $j++){
                echo '<td>' . $number++ . '</td>' . "\n";          
            }
            
            echo '</tr>' . "\n" . "\n";
        }
    
    ?>
</table>