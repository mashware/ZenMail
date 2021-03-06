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

namespace ZenMail\ZenSwiftAdapterBundle\Adapter;

use ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMessageInterface;

/**
 * Class ZenSwiftMessageAdapter
 * @package ZenMail\ZenSwiftAdapterBundle\Adapter
 */
class ZenSwiftMessageAdapter implements ZenMessageInterface
{

    /**
     * @var \Swift_Message
     */
    private $swiftMessage;

    /**
     * @param \Swift_Message $swiftMessage
     */
    function __construct(\Swift_Message $swiftMessage)
    {
        $this->swiftMessage = $swiftMessage;
    }

    /**
     * Set the from address of this message.
     *
     * You may pass an array of addresses if this message is from multiple people.
     *
     * If $name is passed and the first parameter is a string, this name will be
     * associated with the address.
     *
     * @param string $addresses
     * @param string $name optional
     *
     * @return $this self Object
     */
    public function setFrom($addresses, $name = null)
    {
        $this->swiftMessage->setFrom($addresses, $name);

        return $this;
    }

    /**
     * Get the from address of this message.
     *
     * @return mixed
     */
    public function getFrom()
    {
        return $this->swiftMessage->getFrom();
    }

    /**
     * Set the to addresses of this message.
     *
     * If multiple recipients will receive the message an array should be used.
     * Example: array('receiver@domain.org', 'other@domain.org' => 'A name')
     *
     * If $name is passed and the first parameter is a string, this name will be
     * associated with the address.
     *
     * @param mixed $addresses
     * @param string $name optional
     *
     * @return $this self Object
     */
    public function setTo($addresses, $name = null)
    {
        $this->swiftMessage->setTo($addresses, $name);

        return $this;
    }

    /**
     * Get the To addresses of this message.
     *
     * @return array
     */
    public function getTo()
    {
        return $this->swiftMessage->getTo();
    }

    /**
     * Set the Cc addresses of this message.
     *
     * If $name is passed and the first parameter is a string, this name will be
     * associated with the address.
     *
     * @param mixed $addresses
     * @param string $name optional
     *
     * @return $this self Object
     */
    public function setCc($addresses, $name = null)
    {
        $this->swiftMessage->setCc($addresses, $name);

        return $this;
    }

    /**
     * Get the Cc address of this message.
     *
     * @return array
     */
    public function getCc()
    {
        return $this->swiftMessage->getCc();
    }

    /**
     * Set the Bcc addresses of this message.
     *
     * If $name is passed and the first parameter is a string, this name will be
     * associated with the address.
     *
     * @param mixed $addresses
     * @param string $name optional
     *
     * @return $this self Object
     */
    public function setBcc($addresses, $name = null)
    {
        $this->swiftMessage->setBcc($addresses, $name);

        return $this;
    }

    /**
     * Get the Bcc addresses of this message.
     *
     * @return array
     */
    public function getBcc()
    {
        return $this->swiftMessage->getBcc();
    }

    /**
     * Set the subject of this message.
     *
     * @param string $subject
     * @return $this self Object
     */
    public function setSubject($subject)
    {
        $this->swiftMessage->setSubject($subject);

        return $this;
    }

    /**
     * Get the subject of this message.
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->swiftMessage->getSubject();
    }

    /**
     * Set the body of this entity, either as a string, or as an instance of
     * {@link Swift_OutputByteStream}.
     *
     * @param mixed $body
     * @param string $contentType optional
     * @param string $charset optional
     *
     * @return $this self Object
     */
    public function setBody($body, $contentType = null, $charset = null)
    {
        $this->swiftMessage->setBody($body, $contentType, $charset);

        return $this;
    }

    /**
     * Get the body of this entity as a string.
     *
     * @return string
     */
    public function getBody()
    {
        return $this->swiftMessage->getBody();
    }

    /**
     * Set the sender of this message.
     *
     * This does not override the From field, but it has a higher significance.
     *
     * @param string $address
     * @param string $name optional
     *
     * @return $this self Object
     */
    public function setSender($address, $name = null)
    {
        $this->swiftMessage->setSender($address, $name);

        return $this;
    }

    /**
     * Get the sender of this message.
     *
     * @return string
     */
    public function getSender()
    {
        return $this->swiftMessage->getSender();
    }

    /**
     * Set the reply-to address of this message.
     *
     * You may pass an array of addresses if replies will go to multiple people.
     *
     * If $name is passed and the first parameter is a string, this name will be
     * associated with the address.
     *
     * @param string $addresses
     * @param string $name optional
     *
     * @return $this self Object
     */
    public function setReplyTo($addresses, $name = null)
    {
        $this->swiftMessage->setReplyTo($addresses, $name);

        return $this;
    }

    /**
     * Get the body of this entity as a string.
     *
     * @return string
     */
    public function getReplyTo()
    {
        return $this->swiftMessage->getReplyTo();
    }

    /**
     * Set the date at which this message was created.
     *
     * @param \DateTime $date
     * @return $this self Object
     */
    public function setDate(\DateTime $date)
    {
        $this->swiftMessage->setDate($date->getTimestamp());

        return $this;
    }

    /**
     * Get the date at which the message was sent getDate() (traducir)
     *
     * @return \DateTime
     */
    public function getDate()
    {
        $date = $this->swiftMessage->getDate();
        $dateTime = new \DateTime('@' . $date);

        return $dateTime;
    }

    /**
     * Set the Content-type of this entity.
     *
     * @param string $type
     * @return $this self Object
     */
    public function setContentType($type)
    {
        $this->swiftMessage->setContentType($type);

        return $this;
    }

    /**
     * Get the Content-type of this entity.
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->swiftMessage->getContentType();
    }

    /**
     * Devuelve el objeto original (traducir)
     *
     * @return mixed
     */
    public function getInstanceMessage()
    {
        return $this->swiftMessage;
    }


    /**
     * Returns a string representation of this object.
     *
     * @see toString()
     *
     * @return string
     */
    public function __toString()
    {
        return $this->swiftMessage->__toString();
    }
}