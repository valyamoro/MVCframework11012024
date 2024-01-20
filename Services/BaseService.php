<?php

namespace app\Services;

abstract class BaseService
{
    public function __construct(
        protected BaseRepository $repository,
    ) {
    }

}
