<?php

namespace MarvinLabs\Html\FontAwesome\Elements;

use Spatie\Html\BaseElement;

/**
 * Class FontAwesomeIcon
 * @package MarvinLabs\Html\FontAwesome\Elements
 *
 *          A font-awesome icon element
 */
class FontAwesomeIcon extends BaseElement
{
    protected $tag = 'i';

    /**
     * Set the icon to be used
     *
     * @param string $name Name of the icon (without any 'fa-' prefix)
     *
     * @return static
     */
    public function name($name, $style="solid")
    {
        $styleLetter = strtolower(substr($style, 0, 1));

        if (!empty($styleLetter) && !in_array($styleLetter, ['b', 'l', 'r', 's'])) {
            $styleLetter = 's';
        }

        return $this->addClass(['fa' . $styleLetter, "fa-{$name}"]);
    }

    /**
     * To increase icon sizes relative to their container.
     *
     * @param string $size One of: xs, sm, lg, 2x through 10x
     *
     * @return static
     *
     * @throws \InvalidArgumentException
     */
    public function size($size = 'lg')
    {
        if ( !in_array($size, ['xs', 'sm', 'lg', '2x', '3x', '4x', '5x', '6x', '7x', '8x', '9x', '10x'], true))
        {
            throw new \InvalidArgumentException('Invalid icon size. Should either be: xs, sm, lg, 2x through 10x');
        }

        return $this->addClass("fa-{$size}");
    }

    /**
     * Great to use when different icon widths throw off alignment. Especially useful in things like nav lists & list
     * groups.
     *
     * @return static
     */
    public function fixedWidth()
    {
        return $this->addClass('fa-fw');
    }

    /**
     * Rotate
     *
     * @return static
     */
    public function spin()
    {
        return $this->addClass('fa-spin');
    }

    /**
     * Rotate with 8 steps.
     *
     * @return static
     */
    public function pulse()
    {
        return $this->addClass('fa-pulse');
    }

    /**
     * Easily replace default bullets in unordered lists.
     *
     * @return static
     */
    public function forList()
    {
        return $this->addClass('fa-li');
    }

    /**
     * Rotate
     *
     * @param int $angle Either 90, 180, or 270
     *
     * @return static
     *
     * @throws \InvalidArgumentException
     */
    public function rotate($angle)
    {
        if ( !in_array($angle, [90, 180, 270], true))
        {
            throw new \InvalidArgumentException('Invalid angle. Should either be: 90, 180, 270');
        }

        return $this->addClass("fa-rotate-{$angle}");
    }

    /**
     * Alternate color (white)
     *
     * @return static
     */
    public function inverse()
    {
        return $this->addClass('fa-inverse');
    }

    /**
     * Flip horizontal
     *
     * @return static
     */
    public function flipX()
    {
        return $this->addClass('fa-flip-horizontal');
    }

    /**
     * Flip vertical
     *
     * @return static
     */
    public function flipY()
    {
        return $this->addClass('fa-flip-vertical');
    }

    /**
     * Flip in both directions
     *
     * @return static
     */
    public function flip()
    {
        return $this->flipX()->flipY();
    }
}
