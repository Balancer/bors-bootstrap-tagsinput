# bors/bootstrap-tagsinput

[Bootstrap Tags Input](http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/) jQuery plugin providing a Twitter Bootstrap user interface for managing tags

```bash
# To use the CDN-version
composer require bors/bootstrap-tagsinput

# To use the local asset version, you also need:
composer require bower-asset/bootstrap-tagsinput
```

The local or CDN version is detected by the install of the package `bower-asset/bootstrap-tagsinput`.

Call `\B2\Bootstrap\TagsInput::load();` in `pre_show()` method on any view or config.

```php
namespace \MyApp;

class View extends \B2\View
{
	function pre_show()
	{
		\B2\Bootstrap\TagsInput::load();
		return parent::pre_show();
	}
}
```
