<?php
/**
 * Call actions after configuration is saved
 */
class Meigee_ThemeOptionsMinimalism_Model_Observer
{
	/**
     * After any system config is saved
     */
	public function cssgenerate()
	{
		$section = Mage::app()->getRequest()->getParam('section');

		if ($section == 'meigee_minimalism_design')
		{
			Mage::getSingleton('ThemeOptionsMinimalism/Cssgenerate')->saveCss();
			$response = Mage::app()->getFrontController()->getResponse();
			$response->sendResponse();
		}

	}
}
