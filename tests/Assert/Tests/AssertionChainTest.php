<?php
/**
 * Assert
 *
 * LICENSE
 *
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to kontakt@beberlei.de so I can send you a copy immediately.
 */

namespace Assert\Tests;

class AssertionChainTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_chains_assertions()
    {
        \Assert\that(10)->notEmpty()->integer();
    }

    /**
     * @test
     */
    public function it_shifts_arguments_to_assertions_by_one()
    {
        \Assert\that(10)->eq(10);
    }

    /**
     * @test
     */
    public function it_knowns_default_error_message()
    {
        $this->setExpectedException('Assert\InvalidArgumentException', 'Not Null and such');

        \Assert\that(null, 'Not Null and such')->notEmpty();
    }
}
