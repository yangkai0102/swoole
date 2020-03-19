<?php

$path='./bq/';

$data=scandir($path);
unset($data[0]);
unset($data[1]);

echo json_encode($data,JSON_UNESCAPED_UNICODE);