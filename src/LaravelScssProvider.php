<?php

namespace Pawlox\LaravelScss;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelScssProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //Register the Starting Tag
        Blade::directive('scss', function () {
            return "<?php echo (new Leafo\ScssPhp\Compiler)->compile(\"";//$scssCompiler->compile($scss);
        });
        //Register the Ending Tag
        Blade::directive('endscss', function () {
            return "\"); ?>";
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
