<?php
/**
 * League.Url (http://url.thephpleague.com)
 *
 * @package   League.uri
 * @author    Ignace Nyamagana Butera <nyamsprod@gmail.com>
 * @copyright 2013-2015 Ignace Nyamagana Butera
 * @license   https://github.com/thephpleague/uri/blob/master/LICENSE (MIT License)
 * @version   4.0.0
 * @link      https://github.com/thephpleague/uri/
 */
namespace League\Uri\Modifiers;

use League\Uri\Components\Host;
use League\Uri\Modifiers\Filters\FilterTrait;
use League\Uri\Modifiers\Filters\Flag;

/**
 * Filter the host component labels
 *
 * @package League.uri
 * @author  Ignace Nyamagana Butera <nyamsprod@gmail.com>
 * @since   4.0.0
 */
class FilterLabels extends AbstractHostModifier
{
    use FilterTrait;

    /**
     * {@inheritdoc}
     */
    protected function modify($str)
    {
        return (string) (new Host($str))->filter($this->callable, $this->flag);
    }
}