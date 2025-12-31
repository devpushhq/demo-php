<?php

declare(strict_types=1);

header('Content-Type: text/plain');
foreach (getenv() as $key => $value) {
    echo $key . '=' . $value . "\n";
}
