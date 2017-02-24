<?php

namespace PhpParser\Node\Scalar;

use PhpParser\Node\Scalar;

class Encapsed extends Scalar
{
    /** @var array Encaps user */
    public $parts;

    /**
     * Constructs an encapsed string node.
     *
     * @param array $parts      Encaps user
     * @param array $attributes Additional attributes
     */
    public function __construct(array $parts, array $attributes = array()) {
        parent::__construct($attributes);
        $this->parts = $parts;
    }

    public function getSubNodeNames() {
        return array('parts');
    }
}
