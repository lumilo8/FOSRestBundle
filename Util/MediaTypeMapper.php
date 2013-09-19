<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Util;

class MediaTypeMapper implements MediaTypeMapperInterface
{
    /**
     * @param array $controllerMap
     * @param string $mediaType
     *
     * @return string
     */
    public function map(array $controllerMap, $mediaType)
    {
        if (preg_match('/v(\d\.\d)/', $mediaType, $matches)) {
            if (isset($controllerMap['config'][$matches[1]])) {
                return $controllerMap['config'][$matches[1]];
            }
        }

        return null;
    }
}
