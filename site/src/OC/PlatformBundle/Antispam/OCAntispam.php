<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 15/06/2018
 * Time: 12:32
 */

namespace OC\PlatformBundle\Antispam;


class OCAntispam
{
    /**
     * Vérifie si le texte est un spam ou non
     *
     * @param string $text
     * @return bool
     */
    public function isSpam($text)
    {
        return strlen($text) < 50;
    }
}