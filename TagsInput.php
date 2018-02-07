<?php

namespace B2\Bootstrap;

class TagsInput
{
	static function load()
	{
		\B2\jQuery::load();
//		Conflict with AdminLTE
//		\B2\Bootstrap3::load();

		if(empty(\bors::$bower_asset_packages['bower-asset/bootstrap-tagsinput']))
		{
			bors_use('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css');
			bors_use('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js');
		}
		else
		{
			$bower_asset_path = \B2\Cfg::get('bower-asset.path', '/bower-asset') . '/bootstrap-tagsinput/dist';
			bors_use($bower_asset_path.'/bootstrap-tagsinput.css');
			bors_use($bower_asset_path.'/bootstrap-tagsinput.min.js');
		}
	}
}
