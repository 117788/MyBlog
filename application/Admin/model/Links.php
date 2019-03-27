<?php
namespace app\admin\model;
use think\Model;
use think\Db;
use think\model\concern\SoftDelete;
class Links extends Model
{
	use SoftDelete;
    protected $deleteTime = 'softDelete_time';
}
