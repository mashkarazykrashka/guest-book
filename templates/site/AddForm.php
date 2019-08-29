<form action=<?= $targetURL ?> method="post">
<div class="form-group">
            <?php
            echo "Добавить запись:";
            echo "<br>";
            
            foreach ($fields as $val) {
                echo $val;
                echo "<input type='text' name=$val>";
            }
            ?>
            <input type="submit" value="Добавить">
            </div>
        </form>