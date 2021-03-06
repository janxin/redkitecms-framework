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

namespace RedKiteCms\EventSystem\Listener\PageCollection;


use RedKiteCms\Configuration\ConfigurationHandler;
use RedKiteCms\EventSystem\Event\PageCollection\SiteSavedEvent;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Class SiteSavedListener listens to SiteSavedEvent to update the whole assets from backend to production
 *
 * @author  RedKite Labs <webmaster@redkite-labs.com>
 * @package RedKiteCms\EventSystem\Listener\Page
 */
class SiteSavedListener
{
    /**
     * @type \RedKiteCms\Configuration\ConfigurationHandler
     */
    private $configurationHandler;

    /**
     * Constructor
     *
     * @param \RedKiteCms\Configuration\ConfigurationHandler $configurationHandler
     */
    public function __construct(ConfigurationHandler $configurationHandler)
    {
        $this->configurationHandler = $configurationHandler;
    }

    /**
     * Synchronizes the backend folder with the production one
     * @param \RedKiteCms\EventSystem\Event\PageCollection\SiteSavedEvent $event
     */
    public function onSiteSaved(SiteSavedEvent $event)
    {
        $fs = new Filesystem();
        $fs->mirror(
            $this->configurationHandler->uploadAssetsDir(),
            $this->configurationHandler->uploadAssetsDirProduction()
        );
    }
}