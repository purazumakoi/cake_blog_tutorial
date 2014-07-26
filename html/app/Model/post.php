<?php
/**
 * Created by PhpStorm.
 * User: purazumakoi
 * Date: 2014/07/27
 * Time: 5:12
 */

class Post extends AppModel {
	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty'
		),
		'body' => array(
			'rule' => 'notEmpty'
		)
	);
}