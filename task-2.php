<?php

/*
    1. Дана задача: На школьной выставке 80 рисунков. 23 из них выполнены
    фломастерами, 40 карандашами, а остальные — красками. Сколько рисунков,
    выполненные красками, на школьной выставке?
    2. Описать и вывести условия, решение этой задачи на PHP. Все
    предоставленные числа из пункта 1 должны быть указаны в константах.
 */



define("ALL_DRAWINGS", "80"); //Всего рисунков
define("FELT_TIP_DRAWINGS", "23"); //Рисунков фломастерами
define("PENS_DRAWINGS", "40"); //Рисунков карандашами
define("PAINTS_DRAWINGS", ALL_DRAWINGS - FELT_TIP_DRAWINGS - PENS_DRAWINGS); //Рисунков красками

echo 'На школьной выставке ' . ALL_DRAWINGS . ' рисунков.' . '<br>';
echo FELT_TIP_DRAWINGS . ' из них выполнены фломастерами, ' . PENS_DRAWINGS . ' карандашами';
echo ', а остальные — красками.' . '<br>';
echo 'Сколько рисунков, выполненные красками, на школьной выставке?' . '<br>';
echo '<h3>Решение задачи</h3>';
echo 'Для определения количества рисунков красками, ';
echo 'вычитаем из общего количества рисунков нарисованное фломастерами и карандашами' . '<br><br>';
echo  ALL_DRAWINGS . '-' . FELT_TIP_DRAWINGS . '-' . PENS_DRAWINGS . '=' . PAINTS_DRAWINGS . '<br><br>';
