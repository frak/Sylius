<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @author Anna Walasek <anna.walasek@lakion.com>
 */
final class ImageUniqueCode extends Constraint
{
    public $message = 'This code should be unique.';
}
