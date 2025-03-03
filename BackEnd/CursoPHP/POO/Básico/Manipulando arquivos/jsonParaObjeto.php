<?php

$stringJson = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';

var_dump(json_decode($stringJson, true));