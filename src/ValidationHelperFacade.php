<?php

namespace TalhaAnwar\LaravelValidationHelper;

use Illuminate\Support\Facades\Facade;
use TalhaAnwar\LaravelValidationHelper\ValidationHelper;

/**
 * @see \TalhaAnwar\LaravelValidationHelper\Skeleton\SkeletonClass
 */
class ValidationHelperFacade extends Facade
{
    use ValidationHelper;
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
