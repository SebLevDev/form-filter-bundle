<?php

/*
 * This file is part of the composer-write-changelogs project.
 *
 * (c) Dev Spiriit <dev@spiriit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Spiriit\Bundle\FormFilterBundle\Filter;

/**
 * @author Cédric Girard <c.girard@lexik.fr>
 */
class RelationsAliasBag
{
    /**
     * @var array
     */
    private $aliases;

    /**
     * @param array $aliases
     */
    public function __construct(array $aliases = [])
    {
        $this->aliases = $aliases;
    }

    /**
     * @param string $relation
     * @return string
     */
    public function get($relation)
    {
        return $this->aliases[$relation];
    }

    /**
     * @param string $relation
     * @param string $alias
     */
    public function add($relation, $alias)
    {
        $this->aliases[$relation] = $alias;
    }

    /**
     * @param string $relation
     * @return bool
     */
    public function has($relation)
    {
        return isset($this->aliases[$relation]);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->aliases);
    }
}
