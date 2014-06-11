<?php

/*
 * This file is part of the NJQ Contacts Sytem package.
 *
 * (c) Denis Voytyuk <ask@artprima.cz>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artprima\Bundle\FormsExtraBundle\Form\Model;

/**
 * Class EntityView
 *
 * @author Denis Voytyuk <ask@artprima.cz>
 *
 * @package Artprima\Bundle\FormsExtraBundle\Form\Model
 */
class EntityView
{
    private $id;
    private $text;

    /**
     * @param int|string $id
     * @param string $text
     */
    public function __construct($id, $text)
    {
        $this->id = $id;
        $this->text = $text;
    }

    /**
     * @return int|string
     */
    public function x__toString()
    {
        return $this->id;
    }

    /**
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function gettext()
    {
        return $this->text;
    }

} 