<?php

namespace ItAce\Entities;

/**
 * Class SampleEntity
 *
 *
 *
 * @author Tadashi Matsuura <t_matsuura@it-ace.co.jp>
 * @copyright IT-ACE All Rights Reserved
 * @access public
 * @package ItAce\Entities
 * @category Entity
 * @version 1.0.0
 */
class SampleEntity
{

    protected $sample;

    public function __construct()
    {

        $this->sample = '';
    }

    public function getSample(): string
    {
        return $this->sample;
    }

    public function setSample(string $sample)
    {
        $this->sample = $sample;
    }

}
