<?php

namespace Hvendor\Modulevm\Api;

interface TestApiManagementInterface
{
    /**
     * get test Api data.
     *
     * @api
     *
     * @param int $id
     *
     * @return \Hvendor\Modulevm\Api\Data\TestApiInterface
     */
    public function getApiData($id);
     /**
     * get test Api data.
     *
     * @api
     *
     * 
     *
     * @return \Hvendor\Modulevm\Api\Data\TestApiInterface
     */
    public function getString();


   
}