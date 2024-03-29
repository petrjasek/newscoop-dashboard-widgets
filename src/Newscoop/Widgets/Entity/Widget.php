<?php
/**
 * @package Newscoop\Widgets
 * @author Petr Jasek <petr.jasek@sourcefabric.org>
 * @author Paweł Mikołajczuk <pawel.mikolajczuk@sourcefabric.org>
 * @copyright 2012 Sourcefabric o.p.s.
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

namespace Newscoop\Widgets\Entity;

/**
 * @Entity
 * @Table(name="Widget")
 */
class Widget
{
    /**
     * @Id 
     * @GeneratedValue
     * @Column(type="integer", name="Id")
     * @var int
     */
    private $id;

    /**
     * @Column(type="string", name="path")
     * @var string
     */
    private $path;

    /**
     * @Column(type="string", name="class")
     * @var string
     */
    private $class;


    public function getId()
    {
        return $this->id;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }
}
