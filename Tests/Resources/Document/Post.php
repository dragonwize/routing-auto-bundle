<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2015 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Bundle\RoutingAutoBundle\Tests\Resources\Document;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;

/**
 * @PHPCR\Document(
 *      referenceable=true
 * )
 */
class Post
{
    /**
     * @PHPCR\Id()
     */
    public $path;

    /**
     * @PHPCR\Referrers(
     *   referringDocument="Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\Route",
     *   referencedBy="content"
     * )
     */
    public $routes;

    /**
     * @PHPCR\ParentDocument()
     */
    public $blog;

    /**
     * @PHPCR\Nodename()
     */
    public $name;

    /**
     * @PHPCR\Field(type="string")
     */
    public $title;

    /**
     * @PHPCR\Field(type="string", nullable=true)
     */
    public $body;

    /**
     * @PHPCR\Field(type="date", nullable=true)
     */
    public $date;

    public function getTitle()
    {
        return $this->title;
    }

    public function getBlog()
    {
        return $this->blog;
    }

    public function getBlogTitle()
    {
        return $this->getBlog()->getTitle();
    }

    public function getDate()
    {
        return $this->date;
    }
}
