<?php

/**
 * Copyright (c) 2014 Mashware
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Alberto Vioque <mashware@gmail.com>
 */

namespace LionMail\LionCoreBundle\Tests\Services;

use LionMail\LionCoreBundle\Services\Enginer;

/**
 * Class Enginer
 *
 * @package LionMail\LionCoreBundle\Tests\Services
 */
class EnginerTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var EnginerMailer
     */
    private $enginer;

    /**
     * @var EnginerMailer
     */
    private $enginerMailer;

    /**
     * @var LionMessage
     */
    private $lionMessage;

    public function setUp()
    {
        $this->lionMessage = $this->getMock('LionMail\LionCoreBundle\Adapter\Interfaces\LionMessage');
        $this->enginerMailer = $this->getMock('LionMail\LionCoreBundle\Adapter\Interfaces\EnginerMailer');

        $this->enginer = new Enginer($this->enginerMailer);
    }

    public function testCreateMessageReturnInstanceOfLionMessage()
    {
        $this->enginerMailer->expects($this->once())
            ->method('createMessage')
            ->will($this->returnValue($this->lionMessage));

        $messageCreated = $this->enginer->createMessage();

        $this->assertInstanceOf('LionMail\LionCoreBundle\Adapter\Interfaces\LionMessage', $messageCreated);
    }
}