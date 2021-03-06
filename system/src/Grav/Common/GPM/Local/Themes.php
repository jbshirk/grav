<?php
/**
 * @package    Grav.Common.GPM
 *
 * @copyright  Copyright (C) 2015 - 2018 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\GPM\Local;

use Grav\Common\Grav;

class Themes extends AbstractPackageCollection
{
    /**
     * @var string
     */
    protected $type = 'themes';

    /**
     * Local Themes Constructor
     */
    public function __construct()
    {
        parent::__construct(Grav::instance()['themes']->all());
    }
}
