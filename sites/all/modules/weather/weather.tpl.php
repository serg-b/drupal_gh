<?php ?>

<div class="weather_module">
    <div class="city"><?php print $weather->city['name'] ?></div>
    <div class="params">
        <div>Вологість повітря : <?php print ($weather->temperature['value']- 273.15) ?> &deg;C</div>
        <div>Температура : <?php print $weather->humidity['value']?>%</div>
        <div>Швидкість вітру : <?php print $weather->wind->speed['value'] ?> m/s</div>
    </div>
    <div class="choose-city">
    <?php
    print main_function();
    ?>
    </div>
</div>




