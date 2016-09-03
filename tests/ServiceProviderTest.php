<?php
/*
 * This file is part of Laravel Instagram.
 *
 * (c) Emmanuel Ikechukwu N <free2liveb4u@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Emmanueln\Tests\Instagram;

use Emmanueln\Instagram\Instagram;
/**
 * This is the service provider test class.
 *
 * @author Emmanuel Ikechukwu N <free2liveb4u@gmail.com>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;
    public function testInstagramIsInjectable()
    {
        $this->assertIsInjectable(Instagram:class);
    }
}
