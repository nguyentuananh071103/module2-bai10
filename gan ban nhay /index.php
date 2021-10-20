<?php
include_once 'Dancer.php';
$queue1 = new SplQueue();
$queue2 = new SplQueue();

$dancer1 = new Dancer('Anh', 'Male');
$dancer2 = new Dancer('Đức', 'Male');
$dancer3 = new Dancer('Tuấn', 'Male');
$dancer4 = new Dancer('Hiệp', 'Male');

$dancer5 = new Dancer('Hoa', 'Female');
$dancer6 = new Dancer('Liên', 'Female');
$dancer7 = new Dancer('Ly', 'Female');

$queue1->enqueue($dancer1);
$queue1->enqueue($dancer2);
$queue1->enqueue($dancer3);
$queue1->enqueue($dancer4);

$queue2->enqueue($dancer5);
$queue2->enqueue($dancer6);
$queue2->enqueue($dancer7);

function check($queue1, $queue2)
{
    if ($queue1->count() == 0 || $queue2->count() == 0) {
        echo 'có người phải đổi';
    } else {
        echo '<br>';
        echo ($queue1->dequeue()->name) . ' and ' . ($queue2->dequeue()->name);
    }
}
function countWait($queue1, $queue2)
{
    return ($queue1->count() + $queue2->count());
}
check($queue1, $queue2);
echo '<br>';
check($queue1, $queue2);
echo '<br>';
echo '<br>';
echo countWait($queue1, $queue2);