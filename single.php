<?php if (isset($_REQUEST['single'])) : ?>
        <div class="playGround center">
            <h2> به روز کنید <kbd>F5</kbd> برای بازی کردن فقط کافی است صفحه را با کلید
                <br>شما در حال بازی با کامپیوتر هستید قضاوت برد و باخت با شما
            </h2>
            <h3>CPU</h3>
            <?php
            $rnd = rand(1, 3);
            if ($rnd == 1) {
                echo "<div class='rock center'></div>";
            } elseif ($rnd == 2) {
                echo "<div class='paper center'></div>";
            } else {
                echo "<div class='Scissors center'></div>";
            }
            ?>

        </div>
    <?php endif; ?>