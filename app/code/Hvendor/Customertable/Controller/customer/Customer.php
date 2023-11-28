<?php
/**
 *
 * @package     magento2
 * @author      Codilar Technologies
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        https://www.codilar.com/
 */
namespace Hvendor\Customertable\Controller\customer;
use Magento\Framework\App\Action\Context;

use Hvendor\Customertable\Model\Cus;
use Hvendor\Customertable\Model\ResourceModel\Cus as ResourceModelCus;

class Customer extends \Magento\Framework\App\Action\Action
{
	private $customer;

    private $customerResource;


	public function __construct(
		Context $context,
		Cus $customer,
        ResourceModelCus $customerResource )
	{
		
		parent::__construct($context);
        $this->customer=$customer;
        $this->customerResource=$customerResource;
	}

	public function execute()
	{
		$data=$this->getRequest()->getParams();
        $customervariable=$this->customer;
        $customervariable->setData($data);

        try{
            $this->customerResource->save($customervariable);
            $this->messageManager->addSuccessMessage("CustomerSaved successfully");
        }
        catch(\Exception $exception){
            $this->messageManager->addErrorMessage("Error in saving");
        }
        $redirect=$this->resultRedirectFactory->create();
        $redirect->setPath('addcustomerdisplay');
        return $redirect;










        
	}
}
