<?php

namespace Idrd\Parques;

use Illuminate\Support\ServiceProvider;
use Idrd\Parques\Repo\EloquentParque;
use Idrd\Parques\Repo\EloquentLocalizacion;

class ParquesServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'parques');

		$this->loadViewsFrom(__DIR__ . '/../../resources/views', 'parques');
		
		$this->publishes([
	        __DIR__.'/../../config/parques.php' => config_path('parques.php'),
	    ]);
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Idrd\Parques\Repo\ParqueInterface',function($app)
		{
			return new EloquentParque($app);
		});

		$this->app->bind('Idrd\Parques\Repo\LocalizacionInterface',function($app)
		{
			return new EloquentLocalizacion($app);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
