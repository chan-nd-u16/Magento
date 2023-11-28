<?php
/**
 * Webkul Software.
 *
 * @category  Webkul
 *
 * @author    Webkul
 * @copyright Copyright (c) Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */

namespace Hvendor\Modulevm\Api\Data;

/**
 * Marketplace product interface.
 *
 * @api
 */
interface TestApiInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ENTITY_ID = 'entity_id';

    const TITLE = 'title';

    const DESC = 'description';
    /**#@-*/

    /**
     * Get ID.
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set ID.
     *
     * @param int $id
     *
     * @return \Hvendor\Marketplace\Api\Data\ProductInterface
     */
    public function setId($id);

    /**
     * Get title.
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Set title.
     *
     * @param string $title
     *
     * @return \Hvendor\Marketplace\Api\Data\ProductInterface
     */
    public function setTitle($title);

    /**
     * Get desc.
     *
     * @return string|null
     */
    public function getDescription();

    /**
     * Set Desc.
     *
     * @param string $desc
     *
     * @return \Hvendor\Marketplace\Api\Data\ProductInterface
     */
    public function setDescription($desc);
    /**
     * Set Desc.
     *
     * 
     *
     * @return \Hvendor\Marketplace\Api\Data\ProductInterface
     */

    public function getCustomerdetails();
    /**
     * Set Desc.
     *
     * @param int $id
     * @param int $key
     *
     * @return mixed
     */
    public function getSpeciticCustomerdetails($id,$key);
     /**
     * Set Desc.
     *
     * @param int
     *
     * @return \Hvendor\Marketplace\Api\Data\ProductInterface
     */
    public function deleteCustomer($id);
     /**
     * Set Desc.
     *
     * @param mixed
     *
     * @return \Hvendor\Marketplace\Api\Data\ProductInterface
     */
    public function setCustomer($array);
    
}