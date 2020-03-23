<?php if (isset($_REQUEST['multiple'])) : ?>
    <div class="playGround center">
        <h2> به روز کنید <kbd>F5</kbd> برای بازی کردن فقط کافی است صفحه را با کلید
            <br>شما در حال بازی با کامپیوتر هستید قضاوت برد و باخت با شما
        </h2>
        <?php
        $rnd = rand(1, 3);
        $rnd1 = rand(1, 3); ?>
        <?php
        if ($rnd == $rnd1) {
            echo "<div class ='result'>مساوی</div>";
        } elseif ($rnd == 1 && $rnd1 == 2) {
            echo "<div class ='result'>بازیکن شماره 2 برنده شد</div>";
        } elseif ($rnd == 3 && $rnd1 == 2) {
            echo "<div class ='result'>بازیکن شماره 1 برنده شد</div>";
        } elseif ($rnd == 1 && $rnd1 == 3) {
            echo "<div class ='result'>بازیکن شماره 1 برنده شد</div>";
        } elseif ($rnd == 2 && $rnd1 == 3) {
            echo "<div class ='result'>بازیکن شماره 2 برنده شد</div>";
        } elseif ($rnd == 3 && $rnd1 == 1) {
            echo "<div class ='result'>بازیکن شماره 2 برنده شد</div>";
        } elseif ($rnd == 2 && $rnd1 == 1) {
            echo "<div class ='result'>بازیکن شماره 1 برنده شد</div>";
        }
        ?>
        <div class='player1'>
            <h3>بازیکن شماره 1</h3>
            <?php

            if ($rnd == 1) {
                echo "<div class='rock'></div>";
            } elseif ($rnd == 2) {
                echo "<div class='paper'></div>";
            } else {
                echo "<div class='Scissors'></div>";
            }
            ?>
        </div>

        <div class='player2'>
            <h3>بازیکن شماره 2</h3>
            <?php

            if ($rnd1 == 1) {
                echo "<div class='rock'></div>";
            } elseif ($rnd1 == 2) {
                echo "<div class='paper'></div>";
            } else {
                echo "<div class='Scissors'></div>";
            }
            ?>
        </div>

    </div>
<?php endif; ?>