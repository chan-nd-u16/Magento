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


class Add extends Action
{
    /**
     * @var Customer
     */
    private $customer;
    /**
     * @var CustomerResource
     */
    private $customerResource;

    /**
     * Add constructor.
     * @param Context $context
     * @param Car $car
     * @param CarResource $carResource
     */
    public function __construct(
        Context $context,
        Customerdata $customer,
        ResourceModelCustomerdata $customerResource
    )
    {
        parent::__construct($context);
        $this->customer = $customer;
        $this->customerResource = $customerResource;
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
        $data = $this->getRequest()->getParams();

        /* Set the data in the model */
        $customerModel = $this->customer;
        $customerModel->setData($data);

        try {
            /* Use the resource model to save the model in the DB */
            $this->customerResource->save($customerModel);
            $this->messageManager->addSuccessMessage("Details  saved successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving in Details"));
        }

        /* Redirect back to cars page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('viewmodule');
        return $redirect;
    }
}