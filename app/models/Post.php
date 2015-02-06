<?php


class Post extends BaseModel
{
    protected $table = 'posts';

    public static $rules = array(
    'title'      => 'required|max:100',
    'body'       => 'required|max:10000'
	);

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function renderBody($summary = false)
	{
		$body = $this->body;

		if ($summary == true){

			$body = str_limit($body, 5);
		}

		$parsedown = new Parsedown();

		$body = $parsedown->text($body);


		$config = HTMLPurifier_Config::createDefault();
		$purifier = new HTMLPurifier($config);
		$clean_body = $purifier->purify($body);


		return $clean_body;
	}

	public function uploadFile($file)
	{
		
	}



}