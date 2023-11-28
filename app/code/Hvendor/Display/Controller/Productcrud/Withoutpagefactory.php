<?php
namespace Hvendor\Display\Controller\Productcrud;

class Withoutpagefactory extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        </head>
        <body>
            <a href="http://localhost/myphpPograms/ecommerce%20task/ecommerce%20cart%20with%20login/adminpanel/adminpanel.php" class="btn btn-primary">Go to Adminpanel</a>
            <form id="myform" method="post">
                <input type="text" name="search" id="string" placeholder="search" class="form-control" style="width:50%;margin:auto;">
            </form>
            <div id="cat"></div>
            
        <table class="table table-striped -sm">
               <thead>
                <tr>
                     <th>id</th>
                    <th>Product Name</th>
                    
                    <th>Product Image</th>
                    <th>Product Desc</th>
                    <th>Product Price</th>
                    <th>stockstatus</th>
                    <th>quantity</th>
                 
                    <th>Update</th>
                    <th>Delete</th>            
        
                </tr>
               </thead>
               <tbody>';
               $auth=mysqli_connect('localhost','root','root','ecommerse');
    
               $query="SELECT * FROM `products`";
               $sel=mysqli_query($auth,$query);
               for($i=0;$i<$sel->num_rows;$i++){
                    
                $one=mysqli_fetch_array($sel);
                echo  "<tr>
                    <td class='align-middle'>$one[id]</td>
                    <td class='align-middle'>$one[productname]</td>
                    
                    <td class='align-middle'> <img src='http://localhost/myphpPograms/ecommerce%20task/ecommerce%20cart%20with%20login/adminpanel/images/$one[productimage]' height='100px' width='100px'> </td>
                    <td class='align-middle'>$one[productdesc]</td>
                    <td class='align-middle'>$one[productprice]</td>
                    <td class='align-middle'>$one[stockstatus]</td>
                    <td class='align-middle'>$one[quantity]</td>
                    
                
                <td class='align-middle'><a href='http://localhost/myphpPograms/ecommerce%20task/ecommerce%20cart%20with%20login/adminpanel/productupdateforcontrolleronly.php?id=$one[id]&pname=$one[productname]&pdesc=$one[productdesc]&pprice=$one[productprice]&quantity=$one[quantity]' class='btn btn-primary'>update</a></td>
                    <td class='align-middle'><a href='http://localhost/myphpPograms/ecommerce%20task/ecommerce%20cart%20with%20login/adminpanel/productdelete.php?id=$one[id]' class='btn btn-danger'>Delete</a></td>

                </tr>";


               }
               echo "</tbody>
               </table>
               
           </body>
           </html>
           <script>
           $('#myform').keyup(function(e){
                   e.preventDefault()
                   $.ajax({
                       url:'http://localhost/myphpPograms/ecommerce%20task/ecommerce%20cart%20with%20login/adminpanel/searchproductsmagentoapi.php',
                       type:'POST',
                       data:{name:$('#string').val()},
                       success:function(response){
                           $('#cat').html(response)
                       }
                   })
           
           
               })
           
           </script>";
		exit;
	}
}