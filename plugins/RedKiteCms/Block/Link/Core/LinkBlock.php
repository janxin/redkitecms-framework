<?php
/**
 * This file is part of the RedKite CMS Application and it is distributed
 * under the GPL LICENSE Version 2.0. To use this application you must leave
 * intact this copyright notice.
 *
 * Copyright (c) RedKite Labs <info@redkite-labs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * For extra documentation and help please visit http://www.redkite-labs.com
 *
 * @license    GPL LICENSE Version 2.0
 *
 */
namespace RedKiteCms\Block\Link\Core;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Exclude;
use RedKiteCms\Content\Block\ExtendableBlock;

/**
 * Class LinkBlock is the object deputed to handle a link
 *
 * @author  RedKite Labs <webmaster@redkite-labs.com>
 * @package RedKiteCms\Block\Link\Core
 */
class LinkBlock extends ExtendableBlock
{
    /**
     * @Type("string")
     */
    protected $value = "link_block_displayed_value";
    /**
     * @Type("array")
     */
    protected $tags = array(
        'href' => '#',
    );
    /**
     * @Type("string")
     */
    protected $type = "Link";
    /**
     * @Type("string")
     */
    protected $customTag = "rkcms-link";
} 