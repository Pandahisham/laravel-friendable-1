<?php

namespace Tshafer\Friendable;

use Tshafer\ServiceProvider\ServiceProvider as BaseProvider;

    /**
     * Class ServiceProvider.
     */
    class ServiceProvider extends BaseProvider
    {
        /**
         * @var string
         */
        protected $packageName = 'friendable';

        /**
         *
         */
        public function boot()
        {
            $this->setup(__DIR__)
                 ->publishMigrations();
        }
    }
