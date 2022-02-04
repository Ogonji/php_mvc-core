<?php

namespace app\core;
use app\core\db\DbModel;


abstract class userModel extends DbModel{
    abstract public function getDisplayName(): string;
}