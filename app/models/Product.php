<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Product extends BaseModel
{
    /**
     * 软删除
     * @var boolean
     */
    protected $softDelete = false;

    /**
     * 数据库表名称（不包含前缀）
     * @var string
     */
    protected $table = 'product';



}
