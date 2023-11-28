<?php

namespace Hvendor\Modulevm\Model;

use Hvendor\Modulevm\Model\Customerdata;
use Hvendor\Modulevm\Model\ResourceModel\Customerdata as ResourceModelCustomerdata;
use Hvendor\Modulevm\Model\ResourceModel\Customerdata\Collection;

/**
 * Marketplace Product Model.
 *
 * @method \Hvendor\Marketplace\Model\ResourceModel\Product _getResource()
 * @method \Hvendor\Marketplace\Model\ResourceModel\Product getResource()
 */
class TestApi  implements \Hvendor\Modulevm\Api\Data\TestApiInterface
{

    private $cusmotercollection;
    private $model;
    private $resourcemodel;
    public function __construct(
        Collection $cusmotercollection,
        Customerdata $model,
        ResourceModelCustomerdata $resourcemodel

    )
    {  
        $this->cusmotercollection=$cusmotercollection;
        $this->model=$model;
        $this->resourcemodel=$resourcemodel;
    }

    /**
     * Get ID.
     *
     * @return int
     */
    public function getId()
    {
        return 10;
    }

    /**
     * Set ID.
     *
     * @param int $id
     *
     * @return \Hvendor\Modulevm\Api\Data\ProductInterface
     */
    public function setId($id)
    {
    }

    /**
     * Get title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return 'this is test title';
    }

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return \Hvendor\Modulevm\Api\Data\ProductInterface
     */
    public function setTitle($title)
    {
    }

    /**
     * Get desc.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return 'this is test api description';
    }

    /**
     * Set Desc.
     *
     * @param string $desc
     *
     * @return \Hvendor\Marketplace\Api\Data\ProductInterface
     */
    public function setDescription($desc)
    {

    }
    /**
     * Set Desc.
     *
     * 
     *
     * @return \Hvendor\Marketplace\Api\Data\ProductInterface
     */
    public function getCustomerdetails(){
        return $this->cusmotercollection->getData();

    }
     /**
     * Set Desc.
     *
     * @param int
     *
     * @return mixed 
     */
    public function getSpeciticCustomerdetails($id,$key){

        if(isset($key)){
            if($key=="1234"){
                try{

                    $this->resourcemodel->load($this->model,$id);
                    return $this->model->getData();
                }catch(\Exception $exception){
                   return "no data found";
                }

            }
            else{
                return "wroung api key";
            }
           
            
        }
        else{
            return "wrong api key";
        }


        



    }
     /**
     * Set Desc.
     *
     * @param int
     *
     * @return \Hvendor\Marketplace\Api\Data\ProductInterface
     */
    public function deleteCustomer($id){

        // try{
            $this->resourcemodel->load($this->model,$id);
            $obj=$this->resourcemodel->delete($this->model);
            if($obj){

                // return $this->cusmotercollection->getData();
                return array("Deleted successfully");
            }


        // }catch(\Exception $e){
        //     return "error in deleting";

        // }



    }
    /**
     * Set Desc.
     *
     * @param mixed
     *
     * @return \Hvendor\Marketplace\Api\Data\ProductInterface
     */
    public function setCustomer($array)
    {
        try{

            $mymodel=$this->model;
            $mymodel->setData($array);
            $this->resourcemodel->save($mymodel);
            return array("data"=>"updated successfully");
        }
        catch(\Exception $e){
            return array("data"=>"error in updateing");
        }
        
    }


}