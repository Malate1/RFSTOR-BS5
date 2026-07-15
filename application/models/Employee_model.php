	 <?php
	 class Employee_Model extends CI_Model {

	 	private $db2 = '';

	 	function __construct() {
	 		parent::__construct();
	 		$this->db2 = $this->load->database('pis', TRUE);
	 	}

	 	var $column_order = array('name', 'user_id', 'username' ,'company', 'business_unit');
	    var $search_column = array('name',  'username','company', 'business_unit'); //set column field database for datatable searchable 
	    var $order = array('name' => 'desc'); // default order 

	    private function make_query($where){   

	    	$this->db->select('*, users2.status as ustatus, business_unit.business_unit, company.company')
	        	->from('users2')
	        	//->join('burole', 'burole.user_id = users2.user_id')
	        	->join('business_unit', 'business_unit.id = users2.business_unit_id')
	 			->join('company', 'company.company_code = users2.company_code')	
	 			->join('grouprole', 'grouprole.user_id = users2.user_id')
	 			->group_by('users2.user_id')
	 			->where("$where");
	 				

	        $i = 0;
	        foreach ($this->search_column as $item) // loop column 
	        {
	            if($_POST['search']['value']) // if datatable send POST for search
	            {
	                 
	                if($i===0) // first loop
	                {
	                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
	                    $this->db->like($item, $_POST['search']['value']);
	                }
	                else
	                {
	                    $this->db->or_like($item, $_POST['search']['value']);
	                }
	    
	                if(count($this->search_column) - 1 == $i) //last loop
	                    $this->db->group_end(); //close bracket
	            }
	            $i++;
	        } 

	        if(isset($_POST['order'])) // here order processing
	        {
	            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
	        } 
	        else if(isset($this->order))
	        {
	            $order = $this->order;
	            $this->db->order_by(key($order), $order[key($order)]);
	        }  
	    }  

	    public function get_users($data){
	    	$utype = '0';  
	    	$group_id = $data['usergroup'];
	    	if($data['usergroup'] == ''){
	    		$where = "cebu= '$utype'";
	    		//echo "yes";
	    	}
	    	else{
	    		$where = "cebu= '$utype' AND grouprole.group_id='$group_id' AND grouprole.status='Active'";
	    	}
	    	
	        $this->make_query($where);  
	        if(@$_POST["length"] != -1)  
	        {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	        }  
	        $query = $this->db->get();  
	        return $query->result();  
	    } 

	    public function get_users2($data){  
	        $utype = '1'; 
	        $group_id = $data['usergroup'];
	        
	    	if($data['usergroup'] == ''){
	    		$where = "cebu= '$utype'";
	    	}
	    	else{
	    		$where = "cebu= '$utype' AND grouprole.group_id='$group_id' AND grouprole.status='Active'";
	    	}
	    
	    	$this->make_query($where);   
	        if(@$_POST["length"] != -1)  
	        {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	        }  
	        $query = $this->db->get();  
	        return $query->result();  
	    }

	    public function get_filtered_data($data){  
	        $utype = '0';  
	        $group_id = $data['usergroup'];
	        
	    	if($data['usergroup'] == ''){
	    		$where = "cebu= '$utype'";
	    	}
	    	else{
	    		$where = "cebu= '$utype' AND grouprole.group_id='$group_id' AND grouprole.status='Active'";
	    	}
	    	
	        $this->make_query($where);   
	        $query = $this->db->get();  
	        return $query->num_rows();  
	    } 

	    public function get_filtered_data2($data){  
	        $utype = '1'; 
	        $group_id = $data['usergroup'];
	        
	    	if($data['usergroup'] == ''){
	    		$where = "cebu= '$utype'";
	    	}
	    	else{
	    		$where = "cebu= '$utype' AND grouprole.group_id='$group_id' AND grouprole.status='Active'";
	    	}

	    	$this->make_query($where); 
	        $query = $this->db->get();  
	        return $query->num_rows();  
	    }        
	      
	    public function get_all_data(){  
	    
	        //$this->db->get('users2');  
	        // return $this->db->count_all_results();  
	        $query = $this->db->get('users2');  
	        return $query->num_rows();
	    }

	    // public function autoDeactivateResigned() {
		//     $users2 = $this->db->get('users2')->result();

		//     foreach ($users2 as $user) {
		//         $this->db2->where('emp_id', $user->emp_id);
		//         $this->db2->where_not_in('current_status', ['Active']);
		//         $users = $this->db2->get('employee3')->result();

		//         foreach ($users as $user) {
		//             $status = '0';

		//             $this->db->where('emp_id', $user->emp_id);
		//             $this->db->update('users2', array('status' => $status));
		//         }
		//     }
		// }


		public function autoDeactivateResigned()
		{
			$deactivatedUsers = array();

			$users2 = $this->db->get('users2')->result();

			foreach ($users2 as $user2) {

				$this->db2->where('emp_id', $user2->emp_id);
				$this->db2->where_not_in('current_status', array('Active'));
				$employees = $this->db2->get('employee3')->result();

				foreach ($employees as $employee) {

					// Only deactivate if currently active
					if ($user2->status != '0') {

						$this->db->where('emp_id', $employee->emp_id);
						$this->db->update('users2', array(
							'status' => '0'
						));

						$deactivatedUsers[] = array(
							'emp_id'         => $employee->emp_id,
							'name'           => $user2->name,
							'current_status' => $employee->current_status
						);
					}
				}
			}

			return $deactivatedUsers;
		}

		public function autoUpdateName()
		{
			$updatedUsers = array();

			$users2 = $this->db->get('users2')->result();

			foreach ($users2 as $user) {

				$this->db2->where('emp_id', $user->emp_id);
				$this->db2->where('current_status', 'Active');
				$users = $this->db2->get('employee3')->result();

				foreach ($users as $emp) {

					if ($user->name != $emp->name) {

						$this->db->where('emp_id', $user->emp_id);
						$this->db->update('users2', array(
							'name' => $emp->name
						));

						// Save information about the update
						$updatedUsers[] = array(
							'emp_id'   => $user->emp_id,
							'old_name' => $user->name,
							'new_name' => $emp->name
						);
					}
				}
			}

			return $updatedUsers;
		}

		public function autoUpdateBus()
		{
			$updatedBus = array();

			$business_unit = $this->db->get('business_unit')->result();

			foreach ($business_unit as $bu) {

				$this->db2->where('bcode', $bu->bcode);
				$this->db2->where('status', 'Active');
				$bus = $this->db2->get('locate_business_unit')->result();

				foreach ($bus as $loc_bu) {

					if ($bu->bcode != $loc_bu->bcode) {

						$this->db->where('bcode', $bu->bcode);
						$this->db->update('business_unit', array(
							'name' => $loc_bu->name
						));

						// Save information about the update
						$updatedBus[] = array(
							'bcode'   => $bu->bcode,
							'old_name' => $bu->business_unit,
							'new_name' => $loc_bu->business_unit
						);
					}
				}
			}

			return $updatedBus;
		}

		public function autoUpdateBu1()
		{
			$updatedBus = array();

			$business_unit = $this->db->get('business_unit')->result();

			foreach ($business_unit as $bu) {

				$this->db2->where('bcode', $bu->bcode);
				$this->db2->where('status', 'Active');
				$bus = $this->db2->get('locate_business_unit')->result();

				foreach ($bus as $loc_bu) {

					// Compare the names instead of the bcode
					if (trim($bu->business_unit) != trim($loc_bu->business_unit)) {

						// Just collect the changes (no update)
						$updatedBus[] = array(
							'bcode'    => $bu->bcode,
							'old_name' => $bu->business_unit,
							'new_name' => $loc_bu->business_unit
						);
					}
				}
			}

			return $updatedBus;
		}

		public function autoUpdateBu()
		{
			$changes = array(
				'updated' => array(),
				'new'     => array()
			);

			// Get existing bcodes from local database
			$existing = $this->db
				->select('bcode, business_unit')
				->get('business_unit')
				->result_array();

			$existingBcodes = array_column($existing, 'bcode');
			$existingNames = array_column($existing, 'business_unit', 'bcode');

			// Get active business units from db2
			$this->db2->where('status', 'Active');
			$locate_bus = $this->db2->get('locate_business_unit')->result();

			foreach ($locate_bus as $loc_bu) {
				if (!in_array($loc_bu->bcode, $existingBcodes)) {
					// New business unit
					$changes['new'][] = array(
						'bcode'         => $loc_bu->bcode,
						'business_unit' => $loc_bu->business_unit,
						'bunit_code'    => $loc_bu->bunit_code,
						'status'        => $loc_bu->status,
						'company_code'  => $loc_bu->company_code,
						'acroname'      => $loc_bu->acroname
					);

					
				} else {
					// Check for updates
					if (trim($existingNames[$loc_bu->bcode]) != trim($loc_bu->business_unit)) {
						$changes['updated'][] = array(
							'bcode'    => $loc_bu->bcode,
							'old_name' => $existingNames[$loc_bu->bcode],
							'new_name' => $loc_bu->business_unit
						);
					}
				}
			}

			
			// Perform the actual insert for new business units
			$maxId = $this->db->select_max('id')
                  ->get('business_unit')
                  ->row()
                  ->id;

			$nextId = ($maxId) ? $maxId + 1 : 1;
			foreach ($changes['new'] as $new_bu) {

				$data = array(
					'id'            => $nextId++,
					'bcode'         => $new_bu['bcode'],
					'business_unit' => $new_bu['business_unit'],
					'bunit_code'    => $new_bu['bunit_code'],
					'status'        => $new_bu['status'],
					'company_code'  => $new_bu['company_code'],
					'acroname'      => $new_bu['acroname'],
				);

				$this->db->insert('business_unit', $data);
			}

			foreach ($changes['updated'] as $update_bu) {
				$this->db->where('bcode', $update_bu['bcode']);
				$this->db->update('business_unit', array('business_unit' => $update_bu['new_name']));
			}

			return $changes;
		}


	 	public function find_employee($search)
	 	{
	 		$query = $this->db2->select('emp_id, name, emp_no')
	 				// ->where('current_status', 'Active')
	 				// ->where_in('current_status', array('Active', 'End of Contract'))
	 				->group_start()
	 					->like('emp_id', $search)
	 					->or_like('emp_no', $search)
	 					->or_like('name', $search)
	 					
	 				->group_end()
	 				->limit(20)
	 				->get('employee3');
	 		return $query->result();
	 	}

	 	public function get_employee()
		{
		    $query = $this->db2->select('emp_id, name, emp_no')
		        ->where('current_status', 'Active')
		        ->group_start()
		            ->where('company_code', '11')
		            //->where('bunit_code', '06')
		        ->group_end()
		        ->where('emp_type', 'Probationary')
		        ->get('employee3');

		    return $query->result();
		}

	 	public function employee_details($emp_id)
	 	{
	 		$query = $this->db2->get_where('employee3', array('emp_id' => $emp_id));
	 		return $query->row();
	 	}

	 	public function find_all_employee()
	 	{
	 		$query = $this->db->from('users2')
	 				->join('pis.employee3', 'employee3.emp_id = users2.emp_id')
	 				->get();
	 		return $query->result();
	 	}

	 	public function find_an_employee3($emp_id)
	 	{
	 		$query = $this->db2->from('pis.employee3')
	 				
	 				->join('pis.locate_company', 'locate_company.company_code = pis.employee3.company_code')
	 				->where('employee3.emp_id', $emp_id)
	 				->get();
	 		return $query->row();
	 	}

	 	public function find_an_employee4($bu_id)
	 	{
	 		$query = $this->db->select('company.acroname as acro')
	 				->from('business_unit')
	 				->join('company', 'company.company_code = business_unit.company_code')
	 				->where('business_unit.id', $bu_id)
	 				->get();
	 		return $query->row();
	 	}

	 	public function find_an_employee5($userid)
	 	{
	 		$query = $this->db->select('*')
	 				->from('users2')
	 				//->join('pis.employee3', 'employee3.emp_id = users2.emp_id')
	 				->where('users2.user_id', $userid)
	 				->get();
	 		return $query->row();
	 	}

	 	public function find_an_employee6($emp_id)
	 	{
	 		$query = $this->db->select('*')
	 				->from('users2')
	 				//->join('pis.employee3', 'employee3.emp_id = users2.emp_id')
	 				->where('users2.emp_id', $emp_id)
	 				->get();
	 		return $query->row();
	 	}

	 	public function find_an_employee($emp_id)
	 	{
	 		$query = $this->db2->from('pis.employee3')
	 				
	 				->where('employee3.emp_id', $emp_id)
	 				->get();
	 		return $query->row();
	 	}

	 	public function find_an_employee2($emp_id)
	 	{
	 		$query = $this->db2->from('pis.employee3')
	 				->where('employee3.emp_id', $emp_id)
	 				->get();
	 		return $query->result();
	 	}

	 	public function find_employee_name($emp_id)
	 	{
	 		$query = $this->db2->from('pis.applicant')
	 				->where('applicant.app_id', $emp_id)
	 				->get();
	 		return $query->row();
	 	}

	 	public function find_employee_exp($emp_id)
	 	{
	 		$query = $this->db2->from('pis.application_details')
	 				->where('application_details.app_id', $emp_id)
	 				->get();
	 		return $query->row();
	 	}

	 	public function find_employee_photo()
	 	{
	 		$ids = array('43864-2013','21114-2013','02723-2022','03845-2015','03075-2022', '01472-2018');
	 		$query = $this->db2->from('pis.applicant')
	 				->join('pis.employee3', 'employee3.emp_id = pis.applicant.app_id')
	 				->where_in('applicant.app_id', $ids)
	 				->get();
	 		$result = $query->result();
    
            // $image_server = $_SERVER['http://172.16.161.34:8080'] . "/hrms/";
            $emp = array();
    
            foreach ($result as $row) {
                $row->photo =  str_replace('../', '', $row->photo);
                $emp[$row->app_id] = $row;
            }
 
            return $emp;
	 	}

	 	public function find_an_employee7($emp_id)
	 	{
	 		$query = $this->db2->from('pis.application_details')
	 				->where('application_details.app_id', $emp_id)
	 				->get();
	 		return $query->row();
	 	}

	 	public function company_name($company_code)
	 	{
	 		$query = $this->db2->select('company,acroname')
	 					->get_where('locate_company', array('company_code' => $company_code));
	 		return $query->row();
	 	}

	 	public function bu_name($bunit_code, $company_code)
	 	{
	 		$query = $this->db2->select('business_unit')
	 				->where('bunit_code', $bunit_code)
	 				->where('company_code', $company_code)
	 				->get('locate_business_unit');
	 		return $query->row();
	 	}

	 	public function dept_name($bunit_code, $company_code, $dept_code)
	 	{
	 		$query = $this->db2->select('dept_name')
	 				->where('company_code', $company_code)
	 				->where('bunit_code', $bunit_code)
	 				->where('dept_code', $dept_code)
	 				->get('locate_department');
	 		return $query->row();
	 	}

	 	public function sect_name($bunit_code, $company_code, $dept_code, $sect_code)
	 	{
	 		$query = $this->db2->select('section_name')
	 				->where('company_code', $company_code)
	 				->where('bunit_code', $bunit_code)
	 				->where('dept_code', $dept_code)
	 				->where('section_code', $sect_code)
	 				->get('locate_section');
	 		return $query->row();
	 	}

	 	// public function bu_name($bunit_code, $company_code)
	 	// {	
	 		
	 	// 	$this->db2->select('*');
		// 	$this->db->from('locate_bus');
		// 	$this->db->join('tortypes', 'tortypes.id = usertortypes.tor_id');
		// 	$this->db->where('usertortypes.user_id', $userid);
		// 	$this->db->where('status', 'Active');
		// 	$query = $this->db->get();
		// 	return $query->result();
	 	// }

	 	public function group_name($group_id)
	 	{
	 		$query = $this->db->select('groupname')
	 					->get_where('usergroups', array('group_id' => $group_id));
	 		return $query->row();
	 	}

	 	public function rfs_name($rfs_id)
	 	{
	 		$query = $this->db->select('requesttype')
	 					->get_where('rfstypes', array('id' => $rfs_id));
	 		return $query->row();
	 	}

	 	public function tor_name($tor_id)
	 	{
	 		$query = $this->db->select('tortype')
	 					->get_where('tortypes', array('id' => $tor_id));
	 		return $query->row();
	 	}

	 	public function task_name($usertype_id)
	 	{
	 		$query = $this->db->select('usertype')
	 					->get_where('usertype', array('usertype_id' => $usertype_id));
	 		return $query->row();
	 	}

	 	public function task_name2($theorder)
	 	{
	 		$query = $this->db->select('usertype, tasktor, taskrfs')
	 					->get_where('usertype', array('theorder' => $theorder));
	 		return $query->row();
	 	}

	 	

	 
	 }