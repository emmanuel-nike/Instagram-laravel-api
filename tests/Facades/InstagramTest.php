<?php
/*
 * This file is part of Laravel Instagram.
 *
 * (c) Emmanuel Ikechukwu N <free2liveb4u@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Emmanueln\Tests\Instagram\Facades;

use Emmanueln\Instagram\Instagram;
/**
 * This is the Instagram test class.
 *
 * @author Emmanuel Ikechukwu N <free2liveb4u@gmail.com>
 */
class InstagramTest extends AbstractTestCase
{
    use FacadeTrait;
    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'instagram';
    }
    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Instagram::class;
    }
}
