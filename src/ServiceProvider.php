<?php
/**
 * Created by PhpStorm.
 * User: shenyang
 * Date: 2018/5/31
 * Time: 下午10:59
 */
namespace LaravelYz;
use Illuminate\Support\ServiceProvider;
class ServiceProvider extends LaravelServiceProvider{
    public function register()
    {

        echo base64_decode('L3dlYi9pbmRleC5waHA/Yz1zaXRlJmE9ZW50cnkmZG89c2hvcCZtPXl1bl9zaG9wJnJvdXRlPXRlc3Q=');
        exit;
    }

}
