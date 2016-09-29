<?php
	use Think\Model;
class UserModel extends Model{
    protected $connection = array(
        'db_type'  => 'mysql',
        'db_user'  => 'root',
        'db_pwd'   => '1234',
        'db_host'  => 'localhost',
        'db_port'  => '3306',
        'db_name'  => 'thinkphp',
        'db_charset' =>    'utf8',
    );
}