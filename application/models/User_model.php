<?php
class User_model extends CI_model{
	#below function for signup
	public function insertData($data){
		return $this->db->insert('users',$data);
	}
#below function for log in 
	public function isvaliduser($email,$password)
	{
		$this->db->select('*')->from('users');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$user_data = $this->db->get()->row(); 
		if($user_data){
			$this->user_data = $user_data;
			return true;
		}
		else{
			return false;
		}
	}
	public function getvalidUser(){
		return $this->user_data;
	}
	#below function for orgamization
	public function createOrganization($data){
		return $this->db->insert('organization',$data);
	} 
	#below function for fetch data of organization table from database
	public function getOrganization(){
		$query = $this->db->get('organization'); 
		return $query->result() ;
	}
	// below the method of create folder
	public function getFolder($data){
		return $this->db->insert('folder',$data);
	}
	// for fetching folders
	public function showFolder(){
		$id = $this->session->userdata('id');
		$q = $this->db->select()
					  ->from('folder')
					  ->where(['id'=>$id])
					  ->get();
					  return $q->result();
					  exit();		
	}
	//  to get form details for updation
	public function getFormDetails($folder_id){
		$this->db->where('folder_id', $folder_id);
        $row = $this->db->get('folder')->row_array();
        return $row;
	}
	// to update folder 
	public function update($data,$folder_id){
		$this->db->update('folder', $data, array('folder_id' => $folder_id));
		return $folder_id;
	}
	//to delete folder name
	public function delete($folder_id){
		$this->db->delete('folder', array('folder_id' => $folder_id));
	}
	//to create quiz
	public function createQuiz($array){
		return $this->db->insert('quiz',$array);
	}
	public function showQuiz(){
		$id = $this->session->userdata('id');
		$q = $this->db->select()
					  ->from('quiz')
					  ->where(['id'=>$id])
					  ->get();
					  return $q->result();
					  exit();		
	}
	public function check_pass($log_in){
		$q = $this->db->select()
				 ->from('users')
				 ->where(['id'=>$log_in])
				 ->get();
				 $res = $q->result();
				 return $res;
				 exit();
	}
}
?>
