<?php

namespace TalhaAnwar\LaravelValidationHelper;

use Illuminate\Support\Facades\Facade;
use talhaanwar\LaravelValidationHelper\Traits\LVH;

/**
 * @see \TalhaAnwar\LaravelValidationHelper\Skeleton\SkeletonClass
 */
class LaravelValidationHelperFacade extends Facade
{
	use LVH;
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'LVH';
    }
}
