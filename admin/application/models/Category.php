<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class category extends CI_Model {

		public function __construct()
		{
			parent::__construct();


		}



		function insert($data)
		{
		 $this->db->insert('vendors', $data);
		 return $this->db->insert_id();
		}

public function addcategory($name,$status,$types) {

		$this->db->insert('category', array('name' => $name, 'status' => $status, 'types' => implode(",",$types)));
		return true;
}

public function addoccassions($name,$perc) {

		$this->db->insert('city', array('name' => $name, 'perc' => $perc));
		return true;
}

public function addtoptext($name) {

		$this->db->insert('toptext', array('name' => $name));
		return true;
}

public function addtype($name,$pimage) {

	$this->db->insert('types', array('name' => $name, 'pimage' => implode(",",$pimage)));
	return true;
}

public function addmine($name,$cname) {

	$this->db->insert($cname, array('name' => $name));
	return true;
}

public function getCategories($cat_id='',$parent_cat=array()){
	$this->db->select('*');
	$this->db->from('subcategory');
	
	if(count($parent_cat)>0){
		$this->db->where_in('parentcategory',$parent_cat);
	}else{
		$this->db->where('parentcategory',0);    
	}
	$res = $this->db->get();
   // echo $this->db->last_query();exit;
	return is_object($res) ? $res->result_array() : array();
}


public function getCategories1($cat_id='',$parent_cat=array()){
	$this->db->select('*');
	$this->db->from('product');
	$this->db->where('status','Active'); 
	if(count($parent_cat)>0){
		$this->db->where_in('category',$parent_cat);
	}else{
		$this->db->where('category',0);    
	}
	$res = $this->db->get();
   // echo $this->db->last_query();exit;
	return is_object($res) ? $res->result_array() : array();
}

public function addsizes($name) {

		$this->db->insert('sizes', array('name' => $name));
		return true;
}

public function editcategory($name,$status,$id,$types) {
$this->db->where('id', $id);
		$this->db->update('category', array('name' => $name, 'status' => $status, 'types' => implode(",",$types)));
		return true;
}


public function addv1($amount,$date,$id) {
$this->db->where('id', $id);
		$this->db->update('orders', array('vamount1' => $amount, 'vdate1' => $date));
		return true;
}

public function addv2($amount,$date,$id) {
$this->db->where('id', $id);
		$this->db->update('orders', array('vamount2' => $amount, 'vdate2' => $date));
		return true;
}

public function addv3($amount,$date,$id) {
$this->db->where('id', $id);
		$this->db->update('orders', array('vamount3' => $amount, 'vdate3' => $date));
		return true;
}
public function addv4($amount,$date,$id) {
$this->db->where('id', $id);
		$this->db->update('orders', array('vamount4' => $amount, 'vdate4' => $date));
		return true;
}
public function addv5($amount,$date,$id) {
$this->db->where('id', $id);
		$this->db->update('orders', array('vamount5' => $amount, 'vdate5' => $date));
		return true;
}

public function addv6($amount,$date,$id) {
$this->db->where('id', $id);
		$this->db->update('orders', array('vamount6' => $amount, 'vdate6' => $date));
		return true;
}


public function activatevendor($id) {
	$this->db->where('id', $id);
			$this->db->update('vendors', array('status' => 1));
			return true;
	}

public function editoccassions($name,$id,$perc) {
$this->db->where('id', $id);
		$this->db->update('city', array('name' => $name, 'perc' => $perc));
		return true;
}

public function edittoptext($name,$id) {
$this->db->where('id', $id);
		$this->db->update('toptext', array('name' => $name));
		return true;
}

public function editenquiry($status,$id,$remarks,$fdate) {
$this->db->where('id', $id);
		$this->db->update('enquiries', array('status' => $status, 'remarks' => $remarks, 'fdate' => $fdate));
		return true;
}


public function edittype($name,$id,$pimage) {
	$this->db->where('id', $id);
			$this->db->update('types', array('name' => $name, 'pimage' => $pimage));
			return true;
	}
	
	public function changevendor($emi,$vendorid) {
	$this->db->where('id', $emi);
			$this->db->update('product', array('vid' => $vendorid));
			return true;
	}
	
	public function changepstatus($emi,$status) {
	$this->db->where('id', $emi);
			$this->db->update('product', array('status' => $status));
			return true;
	}


	public function editmine($name,$id,$cname) {
		$this->db->where('id', $id);
				$this->db->update($cname, array('name' => $name));
				return true;
		}
		
		public function editarrange($name,$id) {
		$this->db->where('id', $id);
				$this->db->update('product', array('pimage' => $name));
				return true;
		}

public function editsizes($name,$id) {
$this->db->where('id', $id);
		$this->db->update('sizes', array('name' => $name));
		return true;
}

public function markit($parentcategory) {
$this->db->where('name', $parentcategory);
		$this->db->update('category', array('subcat' => 'Yes'));
		return true;
}


public function selectcategory($id) {
				$this->db->select('*');
				$this->db->where("id", $id);
				$this->db->from('category');
			 $query = $this->db->get();
			 $result = $query->result();
			 return $result;

	}

public function selecttoptext($id) {
				$this->db->select('*');
				$this->db->where("id", $id);
				$this->db->from('toptext');
			 $query = $this->db->get();
			 $result = $query->result();
			 return $result;

	}	
	public function listvendorproducts($vid) {
				$this->db->select('*');
				$this->db->where("vid", $vid);
				$this->db->from('product');
			 $query = $this->db->get();
			 $result = $query->result();
			 return $result;

	}

public function checkemail($email) {
				$this->db->select('*');
				$this->db->where("email", $email);
				$this->db->from('codeigniter_register');
			 $query = $this->db->get();
			 $result = $query->result();
			 return $result;

	}


	public function selectmine($id,$cname) {
		$this->db->select('*');
		$this->db->where("id", $id);
		$this->db->from($cname);
	 $query = $this->db->get();
	 $result = $query->result();
	 return $result;

}

	public function listproductc($sid) {
					$this->db->select('*');
					$this->db->where("cid", $sid);
					$this->db->from('product');
				 $query = $this->db->get();
				 $result = $query->result();
				 return $result;

		}

	public function selectoccassions($id) {
					$this->db->select('*');
					$this->db->where("id", $id);
					$this->db->from('city');
				 $query = $this->db->get();
				 $result = $query->result();
				 return $result;

		}
		
			public function selectenquiry($id) {
					$this->db->select('*');
					$this->db->where("id", $id);
					$this->db->from('enquiries');
				 $query = $this->db->get();
				 $result = $query->result();
				 return $result;

		}


		public function selecttype($id) {
			$this->db->select('*');
			$this->db->where("id", $id);
			$this->db->from('types');
		 $query = $this->db->get();
		 $result = $query->result();
		 return $result;

}

		public function selectsizes($id) {
						$this->db->select('*');
						$this->db->where("id", $id);
						$this->db->from('sizes');
					 $query = $this->db->get();
					 $result = $query->result();
					 return $result;

			}
	public function vieworder($orderid) {
					$this->db->select('*');
					$this->db->where("id", $orderid);
					$this->db->from('orders');
				 $query = $this->db->get();
				 $result = $query->result();
				 return $result;

		}




  public function listcategory()
		      {
						$this->db->select('*');
			 $this->db->from('category');
			 $query = $this->db->get();
			 $result = $query->result();
			 return $result;
		      }
		      
		      
		      
  public function listprojects()
		      {
						$this->db->select('*');
			 $this->db->from('projects');
			 $query = $this->db->get();
			 $result = $query->result();
			 return $result;
		      }
		      
		        public function listregistrations()
		      {
						$this->db->select('*');
			 $this->db->from('registrations');
			 $query = $this->db->get();
			 $result = $query->result();
			 return $result;
		      }
		      
		       public function listhomeprojects()
		      {
						$this->db->select('*');
			 $this->db->from('homeprojects');
			 $query = $this->db->get();
			 $result = $query->result();
			 return $result;
		      }
		      
		         public function listblogs()
		      {
						$this->db->select('*');
			 $this->db->from('blog');
			 $query = $this->db->get();
			 $result = $query->result();
			 return $result;
		      }
		      
		      
		      
  public function listphotos()
		      {
						$this->db->select('*');
			 $this->db->from('photos');
			 $query = $this->db->get();
			 $result = $query->result();
			 return $result;
		      }
		      
		       public function listsliderbanners()
		      {
						$this->db->select('*');
			 $this->db->from('sliderbanner');
			 $query = $this->db->get();
			 $result = $query->result();
			 return $result;
		      }

			  
  public function listcities()
  {
			$this->db->select('*');
 $this->db->from('city');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  
  
   public function listenquiries()
  {
			$this->db->select('*');
 $this->db->from('enquiries');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  
    public function listtoptext()
  {
			$this->db->select('*');
 $this->db->from('toptext');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }

  public function listtypes()
  {
			$this->db->select('*');
 $this->db->from('types');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }

  public function lististyles()
  {
			$this->db->select('*');
 $this->db->from('istyles');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  public function listmstones()
  {
			$this->db->select('*');
 $this->db->from('mstones');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  public function listsstones()
  {
			$this->db->select('*');
 $this->db->from('sstones');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  public function listmcolors()
  {
			$this->db->select('*');
 $this->db->from('mcolors');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  public function listscolors()
  {
			$this->db->select('*');
 $this->db->from('scolors');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  public function listpshapes()
  {
			$this->db->select('*');
 $this->db->from('pshapes');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  public function listmetals()
  {
			$this->db->select('*');
 $this->db->from('metals');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  public function listmshapes()
  {
			$this->db->select('*');
 $this->db->from('mshapes');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  public function listnlengths()
  {
			$this->db->select('*');
 $this->db->from('nlengths');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  public function listbsizes()
  {
			$this->db->select('*');
 $this->db->from('bsizes');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  public function listrsizes()
  {
			$this->db->select('*');
 $this->db->from('rsizes');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  public function listarmletssizes()
  {
			$this->db->select('*');
 $this->db->from('armletssizes');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  public function listbasemetals()
  {
			$this->db->select('*');
 $this->db->from('basemetals');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  public function listpendanttypes()
  {
			$this->db->select('*');
 $this->db->from('pendanttypes');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  public function listchaintypes()
  {
			$this->db->select('*');
 $this->db->from('chaintypes');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }

  public function listwaistsizes()
  {
			$this->db->select('*');
 $this->db->from('waistsizes');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
  public function listocs()
  {
			$this->db->select('*');
 $this->db->from('ocs');
 $query = $this->db->get();
 $result = $query->result();
 return $result;
  }
 
					public function listoccassions()
						      {
										$this->db->select('*');
							 $this->db->from('city');
							 $query = $this->db->get();
							 $result = $query->result();
							 return $result;
						      }

									public function listsizes()
										      {
														$this->db->select('*');
											 $this->db->from('sizes');
											 $query = $this->db->get();
											 $result = $query->result();
											 return $result;
										      }




					public function addsubcategory($name,$parentcategory,$status,$pimage,$types) {

							$this->db->insert('subcategory', array('name' => $name, 'parentcategory' => $parentcategory, 'status' => $status, 'pimage' => $pimage, 'types' => implode(",",$types)));
							return true;
					}

					public function editsubcategory($name,$status,$parentcategory,$id,$pimage,$types) {
					$this->db->where('id', $id);
							$this->db->update('subcategory', array('name' => $name, 'parentcategory' => $parentcategory, 'status' => $status, 'pimage' => $pimage, 'types' => implode(",",$types)));
							return true;
					}


					public function selectsubcategory($id) {
									$this->db->select('*');
									$this->db->where("id", $id);
									$this->db->from('subcategory');
								 $query = $this->db->get();
								 $result = $query->result();
								 return $result;

						}
						
						
						public function searchreport($month,$year,$pid,$product,$trendy,$orderstatus,$tagging,$taggs) {
									$this->db->select('*');
									if($month){
									$this->db->where('MONTH(dater)', $month);
									
									}
									if($year){
									$this->db->where('YEAR(dater)', $year);
									}
									if($product){
									$this->db->where('productid', $product);
									}
									if($pid){
									    $this->db->where_in('productid', $pid);
									}
									if($orderstatus){
									$this->db->where('status', $orderstatus);
									}
									if($tagging){
									$this->db->where_in('productid', $taggs);
									}
									$this->db->from('orders');
								 $query = $this->db->get();
								 $result = $query->result();
								 return $result;

						}




					  public function listsubcategory()
							      {
											$this->db->select('*');
								 $this->db->from('subcategory');
								 $query = $this->db->get();
								 $result = $query->result();
								 return $result;
							      }




								  public function addhomeproject($name,$pimage,$totalbuildings,$available,$location,$unitsold,$category,$urlt){
									$this->db->insert('homeprojects', array('name' => $name, 'pimage' => implode(",",$pimage), 'totalbuildings' => $totalbuildings, 'available' => $available, 'location' => $location, 'unitsold' => $unitsold, 'category' => $category, 'urlt' => $urlt));
									return true;
							}
							
							public function addproject($name,$pimage){
									$this->db->insert('projects', array('name' => $name, 'photos' => implode(",",$pimage)));
									return true;
							}
		
		
							public function addbulkproducts($pname,$pprice,$pimage,$status,$cname,$sname,$xssize,$ssize,$msize,$lsize,$xlsize,$xxlsize,$xl3size,$description,$material,$sku,$pincode,$brandname,$offerprice) {
		
									$this->db->insert('product', array('pname' => $pname, 'pprice' => $pprice, 'pimage' => $pimage, 'status' => $status, 'cname' => $cname, 'sname' => $sname, 'xs' => $xssize, 's' => $ssize, 'm' => $msize, 'l' => $lsize, 'xl' => $xlsize, 'xxl' => $xxlsize, 'xxxl' => $xl3size, 'description' => $description, 'material' => $material, 'sku' => $sku, 'pincode' => $pincode, 'brandname' => $brandname, 'offerprice' => $offerprice ));
									return true;
							}
		
							public function editproduct($category,$subcategory,$pimage,$id) {
							$this->db->where("id", $id);
									$this->db->update('photos', array('category' => $category, 'subcategory' => $subcategory, 'pimage' => $pimage));
									return true;
							}
							
							public function editproject($name,$pimage,$id,$highlights,$summary,$amenities,$facts,$abouttag,$aboutheading,$projectsize,$acres,$totalunits,$availableunits,$projecttag,$projectheading,$galleryheading,$gallerysubheading,$ptraffic,$putilities,$paccess,$plocation,$buildingsize,$floorsize,$buildingsizeheading,$floorsizeheading,$gallerybehind,$d4,$d5,$d6,$location,$ptrafficheading,$putilitiesheading,$paccessheading,$plocationheading,$y1,$y2,$y3,$y4,$y5,$y6) {
							$this->db->where("id", $id);
									$this->db->update('projects', array('name' => $name, 'photos' => $pimage, 'highlights' => $highlights, 'summary' => $summary, 'amenities' => $amenities, 'facts' => $facts, 'abouttag' => $abouttag, 'aboutheading' => $aboutheading, 'projectsize' => $projectsize, 'acres' => $acres, 'totalunits' => $totalunits, 'availableunits' => $availableunits, 'galleryheading' => $galleryheading, 'gallerysubheading' => $gallerysubheading, 'projecttag' => $projecttag, 'projectheading' => $projectheading, 'ptraffic' => $ptraffic, 'putilities' => $putilities, 'paccess' => $paccess, 'plocation' => $plocation, 'buildingsize' => $buildingsize, 'floorsize' => $floorsize, 'buildingsizeheading' => $buildingsizeheading, 'floorsizeheading' => $floorsizeheading, 'gallerybehind' => $gallerybehind, 'retailfloorplan' => $d3, 'retail3dview' => $d4, 'floorplansretail' => $d5, 'floorplansoffice' => $d6, 'location' => $location, 'ptrafficheading' => $ptrafficheading, 'putilitiesheading' => $putilitiesheading, 'paccessheading' => $paccessheading, 'plocationheading' => $plocationheading, 'y1' => $y1, 'y2' => $y2, 'y3' => $y3, 'y4' => $y4, 'y5' => $y5, 'y6' => $y6));
									return true;
							}
							
							public function edithomeproject($name,$pimage,$id,$totalbuildings,$available,$location,$unitsold,$category,$urlt) {
							$this->db->where("id", $id);
									$this->db->update('homeprojects', array('name' => $name, 'pimage' => $pimage, 'totalbuildings' => $totalbuildings, 'available' => $available, 'location' => $location, 'unitsold' => $unitsold, 'category' => $category, 'urlt' => $urlt));
									return true;
							}
							
							public function editblog($id,$pimage,$blogtitle,$blogdate,$blogshort,$blogcontent) {
							$this->db->where("id", $id);
									$this->db->update('blog', array('blogimage' => $pimage, 'blogcontent' => $blogcontent, 'blogdate' => $blogdate, 'blogshort' => $blogshort));
									return true;
							}
							
							
								public function editprojectplans($id, $totalarea1, $totalarea2, $totalarea3, $totalarea4, $totalarea5, $totalarea6, $totalarea7, $totalarea8, $totalarea9, $totalarea10, $totalarea11, $totalarea12, $totalarea13, $totalarea14, $totalarea15,$building1, $building2, $building3, $building4, $building5, $building6, $building7, $building8, $building9, $building10, $building11, $building12, $building13, $building14, $building15,$totalunits1, $totalunits2, $totalunits3, $totalunits4, $totalunits5, $totalunits6, $totalunits7, $totalunits8, $totalunits9, $totalunits10, $totalunits11, $totalunits12, $totalunits13, $totalunits14, $totalunits15,$availableunits1, $availableunits2, $availableunits3, $availableunits4, $availableunits5, $availableunits6, $availableunits7, $availableunits8, $availableunits9, $availableunits10, $availableunits11, $availableunits12, $availableunits13, $availableunits14, $availableunits15,$parking1, $parking2, $parking3, $parking4, $parking5, $parking6, $parking7, $parking8, $parking9, $parking10, $parking11, $parking12, $parking13, $parking14, $parking15,$price1, $price2, $price3, $price4, $price5, $price6, $price7, $price8, $price9, $price10, $price11, $price12, $price13, $price14, $price15,$buildingname1, $buildingname2, $buildingname3, $buildingname4, $buildingname5, $buildingname6, $buildingname7, $buildingname8, $buildingname9, $buildingname10, $buildingname11, $buildingname12, $buildingname13, $buildingname14, $buildingname15, $pimage1, $pimage2, $pimage3, $pimage4, $pimage5, $pimage6, $pimage7, $pimage8, $pimage9, $pimage10, $pimage11, $pimage12, $pimage13, $pimage14, $pimage15,$floorplanheading,$floorplancontent){
							$this->db->where("id", $id);
									$this->db->update('projects', array( 'totalarea1' => $totalarea1,
        'totalarea2' => $totalarea2,
        'totalarea3' => $totalarea3,
        'totalarea4' => $totalarea4,
        'totalarea5' => $totalarea5,
        'totalarea6' => $totalarea6,
        'totalarea7' => $totalarea7,
        'building1' => $building1,
        'building2' => $building2,
        'building3' => $building3,
        'building4' => $building4,
        'building5' => $building5,
        'building6' => $building6,
        'building7' => $building7,
        'totalunits1' => $totalunits1,
        'totalunits2' => $totalunits2,
        'totalunits3' => $totalunits3,
        'totalunits4' => $totalunits4,
        'totalunits5' => $totalunits5,
        'totalunits6' => $totalunits6,
        'totalunits7' => $totalunits7,
        'availableunits1' => $availableunits1,
        'availableunits2' => $availableunits2,
        'availableunits3' => $availableunits3,
        'availableunits4' => $availableunits4,
        'availableunits5' => $availableunits5,
        'availableunits6' => $availableunits6,
        'availableunits7' => $availableunits7,
        'parking1' => $parking1,
        'parking2' => $parking2,
        'parking3' => $parking3,
        'parking4' => $parking4,
        'parking5' => $parking5,
        'parking6' => $parking6,
        'parking7' => $parking7,
        'price1' => $price1,
        'price2' => $price2,
        'price3' => $price3,
        'price4' => $price4,
        'price5' => $price5,
        'price6' => $price6,
        'price7' => $price7,
        'buildingname1' => $buildingname1,
        'buildingname2' => $buildingname2,
        'buildingname3' => $buildingname3,
        'buildingname4' => $buildingname4,
        'buildingname5' => $buildingname5,
        'buildingname6' => $buildingname6,
        'buildingname7' => $buildingname7,
        'floorplan1' => $pimage1,
        'floorplan2' => $pimage2,
        'floorplan3' => $pimage3,
        'floorplan4' => $pimage4,
        'floorplan5' => $pimage5,
        'floorplan6' => $pimage6,
        'floorplan7' => $pimage7,
        'totalarea8' => $totalarea8,
'totalarea9' => $totalarea9,
'totalarea10' => $totalarea10,
'totalarea11' => $totalarea11,
'totalarea12' => $totalarea12,
'totalarea13' => $totalarea13,
'totalarea14' => $totalarea14,
'totalarea15' => $totalarea15,
'building8' => $building8,
'building9' => $building9,
'building10' => $building10,
'building11' => $building11,
'building12' => $building12,
'building13' => $building13,
'building14' => $building14,
'building15' => $building15,
'totalunits8' => $totalunits8,
'totalunits9' => $totalunits9,
'totalunits10' => $totalunits10,
'totalunits11' => $totalunits11,
'totalunits12' => $totalunits12,
'totalunits13' => $totalunits13,
'totalunits14' => $totalunits14,
'totalunits15' => $totalunits15,
'availableunits8' => $availableunits8,
'availableunits9' => $availableunits9,
'availableunits10' => $availableunits10,
'availableunits11' => $availableunits11,
'availableunits12' => $availableunits12,
'availableunits13' => $availableunits13,
'availableunits14' => $availableunits14,
'availableunits15' => $availableunits15,
'parking8' => $parking8,
'parking9' => $parking9,
'parking10' => $parking10,
'parking11' => $parking11,
'parking12' => $parking12,
'parking13' => $parking13,
'parking14' => $parking14,
'parking15' => $parking15,
'price8' => $price8,
'price9' => $price9,
'price10' => $price10,
'price11' => $price11,
'price12' => $price12,
'price13' => $price13,
'price14' => $price14,
'price15' => $price15,
'buildingname8' => $buildingname8,
'buildingname9' => $buildingname9,
'buildingname10' => $buildingname10,
'buildingname11' => $buildingname11,
'buildingname12' => $buildingname12,
'buildingname13' => $buildingname13,
'buildingname14' => $buildingname14,
'buildingname15' => $buildingname15,
'floorplan8' => $pimage8,
'floorplan9' => $pimage9,
'floorplan10' => $pimage10,
'floorplan11' => $pimage11,
'floorplan12' => $pimage12,
'floorplan13' => $pimage13,
'floorplan14' => $pimage14,
'floorplan15' => $pimage15,
        'floorplanheading' => $floorplanheading,
        'floorplancontent' => $floorplancontent
        ));
									return true;
							}
							
							public function editprojectdetails($d1,$d2,$d3,$d7,$d8,$id,$website,$video1,$video2) {
							$this->db->where("id", $id);
									$this->db->update('projects', array('flyer' => $d1, 'retailelevation' => $d2, 'nearby' => $d7, 'parkingratio' => $d8, 'website' => $website, 'video1' => $video1, 'video2' => $video2 ));
									return true;
							}



	public function updateproductpriority($priority,$id) {
							$this->db->where("vid", $id);
									$this->db->update('product', array('vpriority' => $priority));
									return true;
							}



public function editabout($productname,$description,$pimage,$id) {
							$this->db->where("id", $id);
									$this->db->update('aboutus', array('title' => $productname, 'description' => $description, 'pimage' => $pimage));
									return true;
							}
							
							public function addsliderbanner($uploadedImageName1){

		$this->db->insert('sliderbanner', array('pimage1' => $uploadedImageName1));
		return true;
}

			public function editprojectclient($pimage,$id){

		$this->db->insert('projectclients', array('cname' => $pimage, 'pid' => $id));
		return true;
}

			public function editprojectsite($pimage,$id){

		$this->db->insert('projectsites', array('sname' => $pimage, 'pid' => $id));
		return true;
}
							
							public function editsliderbanner($id,$uploadedImageName1) {
							$this->db->where("id", $id);
									$this->db->update('sliderbanner', array( 'pimage1' => $uploadedImageName1));
									return true;
							}
							
							public function editocbanner($title,$description,$price,$pimage,$id) {
							$this->db->where("id", $id);
									$this->db->update('ocbanner', array('title' => $title, 'description' => $description, 'pimage' => $pimage, 'price' => $price));
									return true;
							}

					public function selectproduct($id) {
									$this->db->select('*');
									$this->db->where("id", $id);
									$this->db->from('photos');
								 $query = $this->db->get();
								 $result = $query->result();
								 return $result;

						}
						
						
						
					public function selectproject($id) {
									$this->db->select('*');
									$this->db->where("id", $id);
									$this->db->from('projects');
								 $query = $this->db->get();
								 $result = $query->result();
								 return $result;

						}
						
						
						public function selecthomeproject($id) {
									$this->db->select('*');
									$this->db->where("id", $id);
									$this->db->from('homeprojects');
								 $query = $this->db->get();
								 $result = $query->result();
								 return $result;

						}
						
						public function selectblog($id) {
									$this->db->select('*');
									$this->db->where("id", $id);
									$this->db->from('blog');
								 $query = $this->db->get();
								 $result = $query->result();
								 return $result;

						}
						
						public function selectprojectsites($id) {
									$this->db->select('*');
									$this->db->where("pid", $id);
									$this->db->from('projectsites');
								 $query = $this->db->get();
								 $result = $query->result();
								 return $result;

						}
						
						
						public function selectprojectclients($id) {
									$this->db->select('*');
									$this->db->where("pid", $id);
									$this->db->from('projectclients');
								 $query = $this->db->get();
								 $result = $query->result();
								 return $result;

						}
						
							public function findproduct($find) {
								$this->db->select('*');
$this->db->from('product');
$this->db->where('id', $find); 
$query = $this->db->get();
$row = $query->row();

if ($row) {
    $id = $row->vid;

    $this->db->select('*');
    $this->db->from('vendors');
    $this->db->where('id', $id); 
    $query2 = $this->db->get();
    $result = $query2->result();
    return $result;
}

						}
						
						public function selectabout($id) {
									$this->db->select('*');
									$this->db->where("id", $id);
									$this->db->from('aboutus');
								 $query = $this->db->get();
								 $result = $query->result();
								 return $result;

						}
						
						public function selectsliderbanner($id) {
									$this->db->select('*');
									$this->db->where("id", $id);
									$this->db->from('sliderbanner');
								 $query = $this->db->get();
								 $result = $query->result();
								 return $result;

						}
						
						public function selectocbanner($id) {
									$this->db->select('*');
									$this->db->where("id", $id);
									$this->db->from('ocbanner');
								 $query = $this->db->get();
								 $result = $query->result();
								 return $result;

						}


						public function checkcount() {
										$this->db->select('*');
										$array = array('xs <=' => 5, 's <=' => 5, 'm <=' => 5, 'l <=' => 5, 'xl <=' => 5, 'xxl <=' => 5, 'xxl <=' => 5);
$this->db->where($array);
										$this->db->from('product');
									 $query = $this->db->get();
									 $result = $query->result();
									 return $result;

							}

					  public function listproduct($vid1)
							      {
											$this->db->select('*');
								if($vid1){
											$this->db->where('vid', $vid1);
							      }
								 $this->db->from('product');
								 $query = $this->db->get();
								 $result = $query->result();
								 return $result;
							      }
							      
							       public function listthreshold()
							      {
											$this->db->select('*');
								$this->db->where('threshold < availablequantity');
								 $this->db->from('product');
								 $query = $this->db->get();
								 $result = $query->result();
								 return $result;
							      }
							      
							      public function listtag($tagging)
							      {
											$this->db->select('*');
								
											$this->db->where($tagging, 'Yes');
							      
								 $this->db->from('product');
								 $query = $this->db->get();
								 $result = $query->result();
								 return $result;
							      }

								  public function listproduct1()
							      {
											$this->db->select('*');
											$this->db->order_by("id", "desc");
											$this->db->limit(5);
								 $this->db->from('product');
								 $query = $this->db->get();
								 $result = $query->result();
								 return $result;
							      }

public function addofflineorder($name,$status,$email,$phone,$address,$state,$pin,$product,$jrp,$pid,$orderid,$total,$productcode,$dater) {

												$this->db->insert('orders', array('name' => $name, 'phone' => $phone, 'email' => $email, 'address' => $address, 'state' => $state, 'pincode' => $pin, 'orderstatus' => $status, 'productname' => $product, 'jrp' => $jrp, 'productcode' => $productcode, 'productid' => $pid, 'orderid' => $orderid, 'total' => $total, 'offline' => 'y', 'dater' => $dater, 'quantity' => 1));
												return true;
										}
										
										public function editoorder($name,$status,$email,$phone,$address,$state,$pin,$product,$jrp,$pid,$orderid,$total,$productcode,$dater,$id,$discount) {
                                                $this->db->where('id', $id);
												$this->db->update('orders', array('name' => $name, 'phone' => $phone, 'email' => $email, 'address' => $address, 'state' => $state, 'pincode' => $pin, 'productname' => $product, 'jrp' => $jrp, 'productcode' => $productcode, 'productid' => $pid, 'orderid' => $orderid, 'total' => $total, 'camount' => $discount));
												return true;
										}
										
										public function editaccounts($vamountpaid,$vamountstatus,$id) {
                                                $this->db->where('id', $id);
												$this->db->update('orders', array('vamountpaid' => $vamountpaid, 'vamountstatus' => $vamountstatus));
												return true;
										}
										
										public function editvoucher($voucher,$id) {
                                                $this->db->where('id', $id);
												$this->db->update('orders', array('voucher' => $voucher));
												return true;
										}
										
										public function editoorder1($orderid,$total,$discount) {
                                                $this->db->where('orderid', $orderid);
												$this->db->update('orders', array('total' => $total, 'camount' => $discount));
												return true;
										}


										public function addcoupon($name,$status,$amount,$noof,$category,$product) {

												$this->db->insert('coupon', array('name' => $name, 'status' => $status, 'amount' => $amount, 'noof' => $noof, 'category' => $category, 'product' => $product));
												return true;
										}
										
										public function addcoupon1($name,$amount,$carttotal){

												$this->db->insert('coupon', array('name' => $name, 'amount' => $amount, 'carttotal' => $carttotal));
												return true;
										}

										public function editcoupon($name,$status,$id,$amount,$noof,$category,$product,$carttotal) {
										$this->db->where('id', $id);
												$this->db->update('coupon', array('name' => $name, 'status' => $status, 'amount' => $amount, 'noof' => $noof, 'category' => $category, 'product' => $product, 'carttotal' => $carttotal));
												return true;
										}


										public function selectcoupon($id) {
														$this->db->select('*');
														$this->db->where("id", $id);
														$this->db->from('coupon');
													 $query = $this->db->get();
													 $result = $query->result();
													 return $result;

											}
											
											public function selectoorder($id) {
														$this->db->select('*');
														$this->db->where("id", $id);
														$this->db->from('orders');
													 $query = $this->db->get();
													 $result = $query->result();
													 return $result;

											}




										  public function listcoupon()
												      {
																$this->db->select('*');
													 $this->db->from('coupon');
													 $query = $this->db->get();
													 $result = $query->result();
													 return $result;
												      }

															public function listuser()
																		 {
																			 $this->db->select('*');
																	$this->db->from('codeigniter_register');
																	$query = $this->db->get();
																	$result = $query->result();
																	return $result;
																		 }

																		 public function listvendor()
																		 {
																			 $this->db->select('*');
																	$this->db->from('vendors');
																	$query = $this->db->get();
																	$result = $query->result();
																	return $result;
																		 }


																		 public function selectuser($id) {
																 						$this->db->select('*');
																 						$this->db->where("id", $id);
																 						$this->db->from('codeigniter_register');
																 					 $query = $this->db->get();
																 					 $result = $query->result();
																 					 return $result;

																 			}

																			 public function selectvendor($id) {
																				$this->db->select('*');
																				$this->db->where("id", $id);
																				$this->db->from('vendors');
																			 $query = $this->db->get();
																			 $result = $query->result();
																			 return $result;

																	}
																	
																	public function selectvendor1($vid) {
																				$this->db->select('*');
																				$this->db->where("id", $vid);
																				$this->db->from('vendors');
																			 $query = $this->db->get();
																			 $result = $query->result();
																			 return $result;

																	}



																			public function edituser($status,$id,$email,$phone,$address,$altnumber,$companyname,$gst,$city,$scity,$scategory,$ssubcategory,$priority,$msme) {
																			$this->db->where('id', $id);
																					$this->db->update('vendors', array('status' => $status, 'email' => $email, 'phone' => $phone, 'address' => $address, 'altnumber' => $altnumber, 'companyname' => $companyname, 'gst' => $gst, 'city' => $city, 'scity' => $scity, 'scategory' => $scategory, 'ssubcategory' => $ssubcategory, 'priority' => $priority, 'msme' => $msme ));
																					return true;
																			}
																			public function editcustomer($status,$id) {
																				$this->db->where('id', $id);
																						$this->db->update('codeigniter_register', array('status' => $status));
																						return true;
																				}

																			function fetch_state($country_id)
 {
  $this->db->where('parentcategory', $country_id);
  $this->db->order_by('name', 'ASC');
  $query = $this->db->get('subcategory');
  $output = '<option value="">Select Sub Category</option><option value="None">None</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
  }
  return $output;
 }
 
 
 function fetch_state2($country_id)
 {
  $this->db->where('category', $country_id);
  $this->db->order_by('productname', 'ASC');
  $query = $this->db->get('product');
  $output = '<option value="">Select Product</option><option value="">None</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->productname.'"  data-price1="'.$row->id.'" data-price2="'.$row->jrp.'" data-price3="'.$row->productcode.'">'.$row->productname.'</option>';
  }
  return $output;
 }

function fetch_state5($country_id)
 {
  $this->db->where('vid', $country_id);
  $this->db->order_by('productname', 'ASC');
  $query = $this->db->get('product');
  $output = '<option value="">Select Product</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->productname.'"  data-price1="'.$row->id.'" data-price2="'.$row->jrp.'" data-price3="'.$row->productcode.'">'.$row->productname.'</option>';
  }
  return $output;
 }



 public function editcolors($red,$blue,$lightblue,$navyblue,$cherryred,$frenchnavy,$prussianblue,$maroon,$halfwhite,$indigo,$bluebell,$green,$mintgreen,$lawngreen,$pistachio,$lemongreen,$bottlegreen,$oceangreen,$peacockblue,$wheat,$sanddollar,$nutmeg,$plum,$lavender,$cardinalred,$hibiscusredyellow,$darkyellow,$goldyellow,$mustardyellow,$lemonyellow,$olivegreen,$black,$white,$orange,$grey,$marine,$nude,$beige,$lightgrey,$purple,$pink,$babypink,$raspberry,$rose,$peach,$coral,$apricot,$pea
,$id) {
 $this->db->where('id', $id);
 		$this->db->update('product', array('red' => $red, 'blue' => $blue, 'lightblue' => $lightblue, 'navyblue' => $navyblue, 'cherryred' => $cherryred, 'frenchnavy' => $frenchnavy, 'prussianblue' => $prussianblue, 'maroon' => $maroon, 'halfwhite' => $halfwhite, 'indigo' => $indigo, 'bluebell' => $bluebell, 'green' => $green, 'mintgreen' => $mintgreen, 'lawngreen' => $lawngreen, 'pistachio' => $pistachio, 'lemongreen' => $lemongreen, 'bottlegreen' => $bottlegreen, 'oceangreen' => $oceangreen, 'peacockblue' => $peacockblue, 'wheat' => $wheat, 'sanddollar' => $sanddollar, 'nutmeg' => $nutmeg, 'plum' => $plum, 'lavender' => $lavender, 'cardinalred' => $cardinalred, 'hibiscusredyellow' => $hibiscusredyellow, 'darkyellow' => $darkyellow, 'goldyellow' => $goldyellow, 'mustardyellow' => $mustardyellow, 'lemonyellow' => $lemonyellow, 'olivegreen' => $olivegreen, 'black' => $black, 'white' => $white, 'orange' => $orange, 'grey' => $grey, 'marine' => $marine, 'nude' => $nude, 'beige' => $beige, 'lightgrey' => $lightgrey, 'purple' => $purple, 'pink' => $pink, 'babypink' => $babypink, 'raspberry' => $raspberry, 'rose' => $rose, 'peach' => $peach, 'coral' => $coral, 'apricot' => $apricot, 'pea' => $pea));
 		return true;
 }





 public function listorder()
				 {
					 $this->db->select('*');
			$this->db->from('orders');
			$this->db->order_by("id", "desc");
			$query = $this->db->get();
			$result = $query->result();
			return $result;
				 }


				 public function listorder1()
				 {
					 $this->db->select('*');
					 $this->db->order_by("id", "desc");
					 $this->db->limit(5);
			$this->db->from('orders');
			$query = $this->db->get();
			$result = $query->result();
			return $result;
				 }

				 public function listme($cname)
				 {
					 $this->db->select('*');
			$this->db->from($cname);
			$query = $this->db->get();
			$result = $query->result();
			return $result;
				 }


				 public function selectdp($catp) {
					$this->db->select('*');
					$this->db->where("id", $catp);
					$this->db->from('category');
				 $query = $this->db->get();
				 $result = $query->result();
				 return $result;

		}
		
		public function selectdaptp($tatp) {
					$this->db->select('*');
					$this->db->where("id", $tatp);
					$this->db->from('vendors');
				 $query = $this->db->get();
				 $result = $query->result();
				 return $result;

		}
		
			 public function listorder2() {
					$this->db->select('*');
					$this->db->where("offline", 'y');
					$this->db->from('orders');
				 $query = $this->db->get();
				 $result = $query->result();
				 return $result;

		}
		
		
			 public function selectpro($catc) {
					$this->db->select('*');
					$this->db->where("id", $catc);
					$this->db->from('product');
				 $query = $this->db->get();
				 $result = $query->result();
				 return $result;

		}

		public function selectdp1($catp1) {
			$this->db->select('*');
			$this->db->where("id", $catp1);
			$this->db->from('types');
		 $query = $this->db->get();
		 $result = $query->result();
		 return $result;

}

public function selectdp2($catp2) {
	$this->db->select('*');
	$this->db->where("id", $catp2);
	$this->db->from('istyles');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}



public function selectdp3($catp3) {
	$this->db->select('*');
	$this->db->where("id", $catp3);
	$this->db->from('mstones');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}

public function selectdp4($catp4) {
	$this->db->select('*');
	$this->db->where("id", $catp4);
	$this->db->from('sstones');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}

public function selectdp5($catp5) {
	$this->db->select('*');
	$this->db->where("id", $catp5);
	$this->db->from('mcolors');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}

public function selectdp6($catp6) {
	$this->db->select('*');
	$this->db->where("id", $catp6);
	$this->db->from('scolors');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}

public function selectdp7($catp7) {
	$this->db->select('*');
	$this->db->where("id", $catp7);
	$this->db->from('pshapes');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}

public function selectdp8($catp8) {
	$this->db->select('*');
	$this->db->where("id", $catp8);
	$this->db->from('metals');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}

public function selectdp9($catp9) {
	$this->db->select('*');
	$this->db->where("id", $catp9);
	$this->db->from('mshapes');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}

public function selectdp10($catp10) {
	$this->db->select('*');
	$this->db->where("id", $catp10);
	$this->db->from('nlengths');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}

public function selectdp11($catp11) {
	$this->db->select('*');
	$this->db->where("id", $catp11);
	$this->db->from('bsizes');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}

public function selectdp12($catp12) {
	$this->db->select('*');
	$this->db->where("id", $catp12);
	$this->db->from('rsizes');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}

public function selectdp13($catp13) {
	$this->db->select('*');
	$this->db->where("id", $catp13);
	$this->db->from('armletssizes');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}

public function selectdp14($catp14) {
	$this->db->select('*');
	$this->db->where("id", $catp14);
	$this->db->from('waistsizes');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}

public function selectdp15($catp15) {
	$this->db->select('*');
	$this->db->where("id", $catp15);
	$this->db->from('basemetals');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}

public function selectdp16($catp16) {
	$this->db->select('*');
	$this->db->where("id", $catp16);
	$this->db->from('pendanttypes');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}

public function selectdp17($catp17) {
	$this->db->select('*');
	$this->db->where("id", $catp17);
	$this->db->from('chaintypes');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}

public function selectdp18($catp18) {
	$this->db->select('*');
	$this->db->where("id", $catp18);
	$this->db->from('ocs');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}

		public function selectdps($catps) {
			$this->db->select('*');
			$this->db->where("id", $catps);
			$this->db->from('subcategory');
		 $query = $this->db->get();
		 $result = $query->result();
		 return $result;

}

public function selectdpz($catpz) {
	$this->db->select('*');
	$this->db->where("id", $catpz);
	$this->db->from('city');
 $query = $this->db->get();
 $result = $query->result();
 return $result;

}
				 public function selectorderid($orderid) {
								$this->db->select('*');
								$this->db->where("orderid", $orderid);
								$this->db->from('orders');
							 $query = $this->db->get();
							 $result = $query->result();
							 return $result;

					}

				 																		 public function selectorder($id) {
				 																 						$this->db->select('*');
				 																 						$this->db->where("id", $id);
				 																 						$this->db->from('orders');
				 																 					 $query = $this->db->get();
				 																 					 $result = $query->result();
				 																 					 return $result;

				 																 			}


																							public function editorder($status,$id) {
																							$this->db->where('id', $id);
																									$this->db->update('orders', array('status' => $status));
																									return true;
																							}
																							
																							public function updatebuyback($pid) {
																							$this->db->where('id', $pid);
																									$this->db->update('orders', array('buyback' => 'Yes'));
																									return true;
																							}
																							
																							public function activateproject($id) {
																							$this->db->where('id', $id);
																									$this->db->update('projects', array('status' => 'Active'));
																									return true;
																							}
																							public function deactivateproject($id) {
																							$this->db->where('id', $id);
																									$this->db->update('projects', array('status' => 'Inactive'));
																									return true;
																							}


																							public function deletefeatured($id) {

																							$this->db->where_in('id', $id);
																							$this->db->delete('featured');

																						}
																						public function deleteenquiry($id) {

																							$this->db->where_in('id', $id);
																							$this->db->delete('enquiries');

																						}
																						
																						
																							public function deletetoptext($id) {

																							$this->db->where_in('id', $id);
																							$this->db->delete('toptext');

																						}

																						public function deleteproduct($id) {

																						$this->db->where_in('id', $id);
																						$this->db->delete('product');

																					}
																					
																						public function deleteproject($id) {

																						$this->db->where_in('id', $id);
																						$this->db->delete('projects');

																					}
																					
																						public function deletehomeproject($id) {

																						$this->db->where_in('id', $id);
																						$this->db->delete('homeprojects');

																					}
																					
																						public function deleteblog($id) {

																						$this->db->where_in('id', $id);
																						$this->db->delete('blog');

																					}
																					
																						public function deleteprojectsite($id) {

																						$this->db->where_in('id', $id);
																						$this->db->delete('projectsites');

																					}
																					
																						public function deleteprojectclient($id) {

																						$this->db->where_in('id', $id);
																						$this->db->delete('projectclients');

																					}

																					public function deletemine($id,$cname) {

																						$this->db->where_in('id', $id);
																						$this->db->delete($cname);

																					}


																					public function deletetype($id) {

																						$this->db->where_in('id', $id);
																						$this->db->delete('types');

																					}

																					public function deletecategory($id) {

																					$this->db->where_in('id', $id);
																					$this->db->delete('category');

																				}
																					public function deletephoto($id) {

																					$this->db->where_in('id', $id);
																					$this->db->delete('photos');

																				}
																				
																					public function deletecoupon($id) {

																					$this->db->where_in('id', $id);
																					$this->db->delete('coupon');

																				}
										public function deletesliderbanner($id) {

																					$this->db->where_in('id', $id);
																					$this->db->delete('sliderbanner');

																				}

																				public function deletesubcategory($id) {

																					$this->db->where_in('id', $id);
																					$this->db->delete('subcategory');

																				}

																				public function deletecity($id) {

																					$this->db->where_in('id', $id);
																					$this->db->delete('city');

																				}
																				public function deletevendor($id) {

																					$this->db->where_in('id', $id);
																					$this->db->delete('vendors');

																				}
																				public function deletesizes($id) {

																				$this->db->where_in('id', $id);
																				$this->db->delete('sizes');

																			}
																			public function deleteoccassions($id) {

																			$this->db->where_in('id', $id);
																			$this->db->delete('occassions');

																		}

																						public function setfeatured($name,$sku,$pid) {

																								$this->db->insert('featured', array('name' => $name, 'sku' => $sku, 'pid' => $pid));
																								return true;
																						}


																						public function selectfeatured($id) {
																										$this->db->select('*');
																										$this->db->where("id", $id);
																										$this->db->from('product');
																									 $query = $this->db->get();
																									 $result = $query->result();
																									 return $result;

																							}

																							public function listfeatured()
																											{
																												$this->db->select('*');
																									 $this->db->from('featured');
																									 $this->db->order_by("id", "desc");
																									 $this->db->limit(4);
																									 $query = $this->db->get();
																									 $result = $query->result();
																									 return $result;
																											}


																											public function addadmin($name,$email,$password,$usertype) {

																													$this->db->insert('users', array('first_name' => $name, 'email' => $email, 'password' => $password, 'usertype' => $usertype));
																													return true;
																											}
																											
																											
																												public function addcustomer($email,$phone,$name,$address,$password) {

																													$this->db->insert('codeigniter_register', array('name' => $name, 'email' => $email, 'password' => $password, 'address' => $address, 'phone' => $phone, 'is_email_verified' => 'yes'));
																													return true;
																											}

																											public function editadmin($name,$email,$password,$usertype,$id,$status) {
																											$this->db->where('id', $id);
																													$this->db->update('users', array('first_name' => $name, 'email' => $email, 'password' => $password, 'usertype' => $usertype, 'status' => $status));
																													return true;
																											}




																											public function selectadmin($id) {
																															$this->db->select('*');
																															$this->db->where("id", $id);
																															$this->db->from('users');
																														 $query = $this->db->get();
																														 $result = $query->result();
																														 return $result;

																												}
																												public function listadmin()
																																{
																																	$this->db->select('*');
																																	$this->db->where("adstate", "admin");
																														 $this->db->from('users');
																														 $query = $this->db->get();
																														 $result = $query->result();
																														 return $result;
																																}


																																  public function addblog($pimage,$blogtitle,$blogdate,$blogshort,$blogcontent){
									$this->db->insert('blog', array('blogtitle' => $blogtitle, 'blogimage' => implode(",",$pimage), 'blogdate' => $blogdate, 'blogshort' => $blogshort, 'blogcontent' => $blogcontent));
									return true;
							}

																																




																														
																																	public function listblog()
																																					{
																																						$this->db->select('*');

																																			 $this->db->from('blog');
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





																																									public function editoffer($name,$url,$pimage) {
																																									$this->db->where("id", 1);
																																											$this->db->update('offers', array('name' => $name, 'url' => $url, 'image' => $pimage ));
																																											return true;
																																									}

	}
?>
