<?php

namespace B2\Bootstrap;

class TagsInput
{
	static function load()
	{
		if(empty(\bors::$bower_asset_packages['bower-asset/bootstrap-tagsinput']))
		{
			bors_use('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css');
			bors_use('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js');
		}
		else
			bors_use('/bower-asset/ionicons/css/ionicons.min.css');
	}
}
