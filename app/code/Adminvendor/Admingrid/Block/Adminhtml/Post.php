<?php
namespace Adminvendor\Admingrid\Block\Adminhtml;

class Post extends \Magento\Backend\Block\Widget\Grid\Container
{

	protected function _construct()
	{
		$this->_controller = 'adminhtml_post';
		$this->_blockGroup = 'Adminvendor_Admingrid';
		$this->_headerText = __('FAQ');
		$this->_addButtonLabel = __('Add New');
		parent::_construct();
	}
    protected function _prepareLayout()
    {
        // Get the URL of the controller action you want to link to
        $url = $this->getUrl('Adminfaq'); // Replace with your actual controller and action path

        // Add the action to the "Create New FAQ" button
        $this->buttonList->update('add', 'label', __('Add New'));
        $this->buttonList->update('add', 'onclick', "setLocation('" . $url . "')");

        parent::_prepareLayout();
    }
}