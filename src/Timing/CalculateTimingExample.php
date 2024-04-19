<?php

declare(strict_types=1);

namespace PhpCodingCompetition\Timing;

$startTime = microtime(true);
$endTime = microtime(true);
$totalTime = $endTime - $startTime;

echo ($totalTime * 1000) . ' seconds' . PHP_EOL;