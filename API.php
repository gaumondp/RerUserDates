<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\RerUserDates;

/**
 * Provided by RerUserDates plugin
 *
 * @method static \Piwik\Plugins\RerUserDates\API getInstance()
 * @package Piwik\Plugins\RerUserDates
 */
class API extends \Piwik\Plugin\API
{

    /**
     * @return boolean
     */
    public function getSettingsCalendars()
    {
        $settings = new Settings('RerUserDates');
        return $settings->calendars->getValue();
    }

} 
