<?php

namespace app\Services;
use app\Database\PDODriver;

abstract class BaseRepository
{
    public function __construct(
        protected PDODriver $connection,
    ) {
    }

}
