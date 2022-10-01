<?php declare(strict_types=1);
/*
 * This file is part of sebastian/type.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Type;

final class MixedType extends Type
{
    public function __construct()
    {
        parent::__construct('mixed', true);
    }

    public function isAssignable(Type $other): bool
    {
        return !$other instanceof VoidType;
    }

    public function asString(): string
    {
        return 'mixed';
    }

    /**
     * @psalm-assert-if-true MixedType $this
     */
    public function isMixed(): bool
    {
        return true;
    }
}
