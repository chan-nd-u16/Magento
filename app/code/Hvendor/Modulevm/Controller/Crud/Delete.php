<?php
/**
 *
 * @package     magento2
 * @author      Codilar Technologies
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        https://www.codilar.com/
 */

namespace Hvendor\Modulevm\Controller\Crud;

use Hvendor\Modulevm\Model\Customerdata;
use Hvendor\Modulevm\Model\ResourceModel\Customerdata as ResourceModelCustomerdata;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
// use Hvendor\Modulevm\Model\CustomerdataFactory;

class Delete extends Action
{
    /**
     * @var Customer
     */
    private $customer;
    /**
     * @var CustomerResource
     */
    private $customerResource;
    // private $customerdataFactory;
    /**
     * Add constructor.
     * @param Context $context
     * @param Customerdata $customer
     * @param ResourceModelCustomerdata $customerResource
     */
    public function __construct(
        Context $context,
        Customerdata $customer,
        ResourceModelCustomerdata $customerResource,
        // CustomerdataFactory $customerdataFactory
        
    )
    {
        parent::__construct($context);
        $this->customer = $customer;
        $this->customerResource = $customerResource;
        // $this->customerdataFactory=$customerdataFactory;
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        /* Get the post data */

        /* Set the data in the model */
        // $customerModel = $this->customer;
        // $customerModel->setData($data);
       
        // $customerModel->load();
        $data = $this->getRequest()->getParams();

        

        try {
            // $data = $this->getRequest()->getParams('id');
            // $factoryobject=$this->customerdataFactory->create()->load($data);
            // $factoryobject->delete();
            
            $this->customerResource->load($this->customer,$data['id']);
            $this->customerResource->delete($this->customer);
          


            /* Use the resource model to save the model in the DB */
            // $this->customerResource->save($customerModel);
            $this->messageManager->addSuccessMessage("Details  Deleted successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving in Details"));
        }

        /* Redirect back to cars page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('viewmodule');
        return $redirect;
    }
}