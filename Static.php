<?php

require_once "helper/MathHelper.php";

MathHelper::$name = "MathHelper";

echo MathHelper::$name . PHP_EOL;

echo MathHelper::add(1, 2);
