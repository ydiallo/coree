<?php
/**
 *  Leo Theme for Prestashop 1.6.x
 *
 * @author    http://www.leotheme.com
 * @copyright Copyright (C) October 2013 LeoThemes.com <@emai:leotheme@gmail.com>
 *               <info@leotheme.com>.All rights reserved.
 * @license   GNU General Public License version 2
 */

if (!defined('_PS_VERSION_')) {
    # module validation
    exit;
}

class LeoSlideshowStatus extends Module
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance == null) {
            # module validation
            self::$instance = new LeoSlideshowStatus();
        }
        return self::$instance;
    }
    const SLIDER_TARGET_SAME = 'same';
    const SLIDER_TARGET_NEW = 'new';

    public function getSliderTargetOption()
    {
        return array(
            array('id' => self::SLIDER_TARGET_SAME, 'name' => $this->l('Same Window')),
            array('id' => self::SLIDER_TARGET_NEW, 'name' => $this->l('New Window')),
        );
    }
    const SLIDER_STATUS_DISABLE = '0';
    const SLIDER_STATUS_ENABLE = '1';
    const SLIDER_STATUS_COMING = '2';
    const GROUP_STATUS_DISABLE = '0';
    const GROUP_STATUS_ENABLE = '1';
}
