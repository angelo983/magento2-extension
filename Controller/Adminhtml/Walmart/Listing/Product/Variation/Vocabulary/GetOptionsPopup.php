<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  M2E LTD
 * @license    Commercial use is forbidden
 */

namespace Ess\M2ePro\Controller\Adminhtml\Walmart\Listing\Product\Variation\Vocabulary;

use Ess\M2ePro\Controller\Adminhtml\Walmart\Main;

class GetOptionsPopup extends Main
{
    public function execute()
    {
        $block = $this->createBlock('Walmart\Listing\Product\Variation\VocabularyOptionsPopup');

        $this->setAjaxContent($block);

        return $this->getResult();
    }
}