<?php

namespace TalhaAnwar\LaravelValidationHelper;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TalhaAnwar\LaravelValidationHelper\Skeleton\SkeletonClass
 */
class ValidationHelperFacade extends Facade
{
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
