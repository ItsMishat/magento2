<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Framework\ObjectManager\Factory\Fixture\Compiled;

class SimpleClassTesting
{
    /**
     * @var \StdClass
     */
    private $nonSharedDependency;

    /**
     * @var \StdClass
     */
    private $sharedDependency;

    /**
     * @var string
     */
    private $value;

    /**
     * @var array
     */
    private $valueArray;

    /**
     * @var string
     */
    private $globalValue;

    /**
     * @param \StdClass $nonSharedDependency
     * @param \StdClass $sharedDependency
     * @param string $value
     * @param array $valueArray
     * @param string $globalValue
     */
    public function __construct(
        \StdClass $nonSharedDependency,
        \StdClass $sharedDependency,
        $value = 'value',
        array $valueArray = [
            'default_value1',
            'default_value2'
        ],
        $globalValue = ''
    ) {

        $this->nonSharedDependency = $nonSharedDependency;
        $this->sharedDependency = $sharedDependency;
        $this->value = $value;
        $this->valueArray = $valueArray;
        $this->globalValue = $globalValue;
    }

    /**
     * @return string
     */
    public function getGlobalValue()
    {
        return $this->globalValue;
    }

    /**
     * @return \StdClass
     */
    public function getNonSharedDependency()
    {
        return $this->nonSharedDependency;
    }

    /**
     * @return \StdClass
     */
    public function getSharedDependency()
    {
        return $this->sharedDependency;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return array
     */
    public function getValueArray()
    {
        return $this->valueArray;
    }
}
