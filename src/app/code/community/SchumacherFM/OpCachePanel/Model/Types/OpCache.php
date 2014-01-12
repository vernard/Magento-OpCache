<?php

/**
 * @category    SchumacherFM_OpCachePanel
 * @package     Helper
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class SchumacherFM_OpCachePanel_Model_Types_OpCache extends SchumacherFM_OpCachePanel_Model_Types_AbstractCache
{

    /**
     * @return bool
     */
    public function reset()
    {
        return opcache_reset();
    }
}
