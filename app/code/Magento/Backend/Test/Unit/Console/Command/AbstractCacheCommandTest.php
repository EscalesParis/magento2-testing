<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Backend\Test\Unit\Console\Command;

use Magento\Backend\Console\Command\AbstractCacheManageCommand;

abstract class AbstractCacheCommandTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Magento\Framework\App\Cache\Manager|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $cacheManager;

    /**
     * @var AbstractCacheManageCommand
     */
    protected $command;

    public function setUp()
    {
        $this->cacheManager = $this->getMock('Magento\Framework\App\Cache\Manager', [], [], '', false);
    }

    /**
     * Formats expected output for testExecute data providers
     *
     * @param array $types
     * @return string
     */
    abstract public function getExpectedExecutionOutput(array $types);
}
