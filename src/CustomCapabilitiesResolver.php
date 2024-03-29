<?php

namespace My\steward;

use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Lmc\Steward\ConfigProvider;
use Lmc\Steward\Selenium\CustomCapabilitiesResolverInterface;
use Lmc\Steward\Test\AbstractTestCase;

/**
 * You can define capabilities for one test run using the `--capability` option of `steward run` command. However,
 * if you need some custom logic logic or when you need some global capabilities which don't differ between runs,
 * you can implement the CustomCapabilitiesResolverInterface.
 *
 * Then you must specify the Resolver in steward.yml configuration file like this:
 * `capabilities_resolver: My\Steward\CapabilitiesResolver`
 *
 * @see https://github.com/lmc-eu/steward/wiki/Set-custom-capabilities
 */
class CustomCapabilitiesResolver implements CustomCapabilitiesResolverInterface
{
    /** @var ConfigProvider */
    private $config;
    protected $conf;

    public function __construct(ConfigProvider $config)
    {
       $this->config = $config;
    }

    public function resolveDesiredCapabilities(AbstractTestCase $test, DesiredCapabilities $capabilities)
    {
        return $capabilities;
    }


    public function resolveRequiredCapabilities(AbstractTestCase $test, DesiredCapabilities $capabilities)
    {
        return $capabilities;
    }
}
