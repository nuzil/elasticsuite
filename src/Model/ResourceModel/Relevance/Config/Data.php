<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Smile Elastic Suite to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile_ElasticSuiteCore
 * @author    Romain Ruaud <romain.ruaud@smile.fr>
 * @copyright 2016 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */

namespace Smile\ElasticSuiteCore\Model\ResourceModel\Relevance\Config;

/**
 * Relevance configuration data Resource Model
 *
 * @category Smile
 * @package  Smile_ElasticSuiteCore
 * @author   Romain Ruaud <romain.ruaud@smile.fr>
 */
class Data extends \Magento\Config\Model\ResourceModel\Config\Data
{

    /**
     * Define main table
     *
     * @return void
     */
    // @codingStandardsIgnoreStart This method is inherited
    protected function _construct()
    {
        // @codingStandardsIgnoreEnd
        $this->_init('smile_elasticsuite_relevance_config_data', 'config_id');
    }
}
