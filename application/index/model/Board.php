<?php
namespace app\index\model;
use think\Model;
use think\Db;
use think\model\concern\SoftDelete;
class Board extends Model
{
	use SoftDelete;
    protected $deleteTime = 'softDelete_time';
}
