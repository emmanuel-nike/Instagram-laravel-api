<?php

/*
 * This file is part of Laravel Instagram.
 *
 * (c) Emmanuel Ikechukwu N <free2liveb4u@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Emmanueln\Instagram\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the Instagram facade class.
 *
 * @author Emmanuel Ikechukwu N <free2liveb4u@gmail.com>
 */
class Instagram extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'instagram';
    }
}
