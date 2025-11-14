<?php
class Product extends CI_Model{

  function findAll($id,$material,$material2)
    {
      $this->db->where('cname', $id);
      if(!empty($material) || !empty($material2)) {


	        $this->db->or_where('material', $material);
          $this->db->or_where('material', $material2);

	    }

        return $this->db->get('product')->result();
    }

    function filterproducts($id,$material)
      {
        $this->db->where('cname', $id);
  	        $this->db->or_where('material', $material);


          return $this->db->get('product')->result();
      }

    function findAllsub($id)
      {
        $this->db->where('sname', $id);


          return $this->db->get('product')->result();
      }

      function search($keyword)
        {
          $this->db->where('pname', $keyword);


            return $this->db->get('product')->result();
        }

      function productdetail($id)
        {
          $this->db->where('id', $id);


            return $this->db->get('product')->result();
        }

        function selectfeatured()
          {


            $this->db->select('*');
            $this->db->from('featured');
             $this->db->order_by("id", "desc");
            $this->db->limit(4);
           $query = $this->db->get();
           $result = $query->result();
           return $result;
          }
      function featured($pid)
        {


          $this->db->select('*');
         $this->db->where("id", $pid);
          $this->db->from('product');

         $query = $this->db->get();
         $result = $query->result();
         return $result;
        }

        function stockdown($productid,$productsize)
          {


            $this->db->set($productsize, $productsize-1, false);
   $this->db->where('id' , $productid);
   $this->db->update('product');
          }



    function find($id)
    {
        return $this->db->where('id', $id)->get('product')->row();
    }


    public function selectcoupon($coupon) {
    				$this->db->select('*');
    				$this->db->where("name", $coupon);
    				$this->db->from('coupon');
    			 $query = $this->db->get();
    			 $result = $query->result();
    			 return $result;

    	}

      public function selectcategory() {
              $this->db->select('*');
              $this->db->where("subcat", "No");
              $this->db->from('category');
             $query = $this->db->get();
             $result = $query->result();
             return $result;

        }
        public function selectcategorywithsub() {
                $this->db->select('*');
                $this->db->where("subcat", "Yes");
                $this->db->from('category');
               $query = $this->db->get();
               $result = $query->result();
               return $result;

          }

        public function selectsubcategory() {
                $this->db->select('*');
                $this->db->from('subcategory');
               $query = $this->db->get();
               $result = $query->result();
               return $result;

          }



      public function applied($disme,$id){
        $this->db->where("id", $id);
        $this->db->update('codeigniter_register', array('coupon' => $disme ));
		return true;
      }

      public function appliedoff($disme,$id){
        $this->db->where("id", $id);
        $this->db->update('codeigniter_register', array('coupon' => $disme ));
    return true;
      }
      public function selectapplied($id) {
              $this->db->select('*');
              $this->db->where("id", $id);
              $this->db->from('codeigniter_register');
             $query = $this->db->get();
             $result = $query->result();
             return $result;

        }


        public function addorder($customerid,$name,$phone,$email,$address,$landmark,$state,$city,$pin,$orderid,$productname,$total,$productid,$productcolor,$productsize,$price) {

        		$this->db->insert('orders', array('customerid' => $customerid, 'name' => $name, 'phone' => $phone, 'email' => $email, 'address' => $address, 'landmark' => $landmark, 'state' => $state, 'city' => $city, 'pin' => $pin, 'orderid' => $orderid, 'productname' => $productname, 'grand_total' => $total, 'productid' => $productid, 'productcolor' => $productcolor, 'productsize' => $productsize, 'price' => $price));
        		return true;
        }




        public function selectorderid($lastid) {
                $this->db->select('*');
                $this->db->where("id", $lastid);
                $this->db->from('orders');
               $query = $this->db->get();
               $result = $query->result();
               return $result;

          }


          public function selectwishlist($id) {
                  $this->db->select('*');
                  $this->db->where("customerid", $id);
                  $this->db->from('wishlist');
                 $query = $this->db->get();
                 $result = $query->result();
                 return $result;

            }

            public function selecttrack($id) {
                    $this->db->select('*');
                    $this->db->where("customerid", $id);
                    $this->db->from('orders');
                   $query = $this->db->get();
                   $result = $query->result();
                   return $result;

              }

              public function selectorderdetails($id) {
                      $this->db->select('*');
                      $this->db->where("id", $id);
                      $this->db->from('orders');
                     $query = $this->db->get();
                     $result = $query->result();
                     return $result;

                }

              public function selectaccount($id) {
                      $this->db->select('*');
                      $this->db->where("id", $id);
                      $this->db->from('codeigniter_register');
                     $query = $this->db->get();
                     $result = $query->result();
                     return $result;

                }

              public function selectwishlistproduct($id) {
                      $this->db->select('*');
                      $this->db->where("id", $id);
                      $this->db->from('product');
                     $query = $this->db->get();
                     $result = $query->result();
                     return $result;

                }

                public function wexist($id,$customerid) {
                        $this->db->select('*');
                        $this->db->where("pid", $id);
                        $this->db->where("customerid", $customerid);
                        $this->db->from('wishlist');
                       $query = $this->db->get();
                       $result = $query->result();
                       return $result;

                  }
                public function addtowishlist($id,$pname,$customerid) {


							$this->db->insert('wishlist', array('pid' => $id, 'pname' => $pname, 'customerid' => $customerid));
							return true;
					}


          public function editpassword($id, $password) {

          				$this->db->set('password', $password);
          		$this->db->where('id', $id);
          		$this->db->update('codeigniter_register');


          	}

            public function updatephone($iid, $phonenumber) {

            				$this->db->set('phone', $phonenumber);
            		$this->db->where('id', $iid);
            		$this->db->update('codeigniter_register');


            	}

              public function updateaddress($id,$address,$city,$state,$pin){
                $this->db->where("id", $id);
                $this->db->update('codeigniter_register', array('address' => $address, 'city' => $city, 'state' => $state, 'pin' => $pin ));
                return true;

              }

            public function selectblog()
          		      {
          						$this->db->select('*');
          			 $this->db->from('blog');
                 $this->db->limit(3);
          			 $query = $this->db->get();
          			 $result = $query->result();
          			 return $result;
          		      }

                    public function blogdetail($blogid)
                  		      {
                  						$this->db->select('*');
                              $this->db->where('id', $blogid);
                  			 $this->db->from('blog');

                  			 $query = $this->db->get();
                  			 $result = $query->result();
                  			 return $result;
                  		      }

                    public function removewishlist($id) {

                    $this->db->where_in('id', $id);
                    $this->db->delete('wishlist');

                  }

                  function filename_exists($prodid)
  {
    $this->db->select('*');
    $this->db->where('id', $prodid);

    $this->db->from('product');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }

  public function listoffers()
          {
            $this->db->select('*');
            $this->db->where("id", 1);
       $this->db->from('offers');
       $query = $this->db->get();
       $result = $query->result();
       return $result;
          }



}
