<?php
class Admin_Model  extends CI_Model{

    function addvill($data){

	$this->db->insert('addviil',$data);
	return true;
    }

    function getvill()
	{
		$query=$this->db->query("SELECT * FROM addviil where post_data='active'");
		$result = $query->result();
		return $result;
	}
 	function getAllVilla(){
		$query=$this->db->query("SELECT addviil.* FROM addviil WHERE addviil.post_data='active' and addviil.id NOT IN( SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(t.villa_id, ',', n.n), ',', -1) value
  FROM mst_employee t CROSS JOIN 
  (
   SELECT a.N + b.N * 10 + 1 n
     FROM 
    (SELECT 0 AS N UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) a
   ,(SELECT 0 AS N UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) b
    ORDER BY n 
   ) n
 WHERE n.n <= 1 + (LENGTH(t.villa_id) - LENGTH(REPLACE(t.villa_id, ',', ''))) )");
 		$result = $query->result();
 		return $result;
 	}


	function Deletevill($id)
	{
		$query=$this->db->query("update addviil set post_data='inactive' where id='$id'");
		 
	}
	function Editvill($id)
	{
		$query=$this->db->query("SELECT * FROM addviil WHERE post_data='active' and id='$id' ");
		$result = $query->result();
		return $result;
	}
	function updatevill($data1,$id)
	{
	      $this->db->where('id',$id);
	      $this->db->update('addviil',$data1);
	      return true;
		 
	}
	function add_plot($data){

	$this->db->insert('exp_plot',$data);
	return true;
    }

    function getplot($plot_id){
    	if($plot_id=="All")
    	{
    		$query=$this->db->query("SELECT addviil.*,exp_plot.* FROM addviil left join exp_plot on addviil.id=exp_plot.villa_id WHERE exp_plot.post_data='active'");
		$result = $query->result();
		return $result;
    	}
    	else
    	{

    		$query=$this->db->query("SELECT addviil.*,exp_plot.* FROM addviil left join exp_plot on addviil.id=exp_plot.villa_id WHERE exp_plot.post_data='active' and exp_plot.plot_id='$plot_id'");
		$result = $query->result();
		return $result;
    	}
    	

    }
    function Deleteplot($plot_id)
	{
		$query=$this->db->query("update exp_plot set post_data='inactive' where plot_id='$plot_id'");
		 
	}
	 function editplot(){
    	$query=$this->db->query("SELECT addviil.*,exp_plot.* FROM addviil left join exp_plot on addviil.id=exp_plot.villa_id WHERE exp_plot.post_data='active'");
		$result = $query->result();
		return $result;

    }
	function updateplot($data1,$plot_id)
	{
	      $this->db->where('plot_id',$plot_id);
	      $this->db->update('exp_plot',$data1);
	      return true;
		 
	}
    function can_login($username,$password){

		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$query=$this->db->get('admin_login');

		if($query->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}
	function addemp($data){
		$this->db->insert('mst_employee',$data);
	return true;

	}
	public function getemp(){
    $query=$this->db->query("SELECT * FROM mst_employee");
    $result = $query->result();
    return $result;
    
  }
  public function getVenture($venture_id)
  {
    $query=$this->db->query("SELECT addviil.add_vill FROM addviil WHERE addviil.id = $venture_id");
    $result = $query->result();
    return $result;
  }
 	
	// function getemp(){
	// 	$query=$this->db->query("SELECT mst_employee.*,GROUP_CONCAT(res1.add_vill ,', ')as add_vill  FROM(SELECT addviil.add_vill FROM addviil WHERE addviil.id  IN( SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(t.villa_id, ',', n.n), ',', -1) value
 //  FROM mst_employee t CROSS JOIN 
 //  (
 //   SELECT a.N + b.N * 10 + 1 n
 //     FROM 
 //    (SELECT 0 AS N UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) a
 //   ,(SELECT 0 AS N UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) b
 //    ORDER BY n 
 //   ) n
 // WHERE n.n <= 1 + (LENGTH(t.villa_id) - LENGTH(REPLACE(t.villa_id, ',', ''))) ) )res1 , mst_employee WHERE mst_employee.employee_status='active'");
	// 	$result = $query->result();
	// 	return $result;

	// }


	// function getemp($sk_employee_id){
 //    	if($sk_employee_id=="All")
 //    	{
 //    		$query=$this->db->query("SELECT addviil.*,mst_employee.* FROM addviil left join mst_employee on addviil.id=mst_employee.villa_id WHERE mst_employee.employee_status='active'");
	// 	$result = $query->result();
	// 	return $result;
 //    	}
 //    	else
 //    	{

 //    		$query=$this->db->query("SELECT addviil.*,mst_employee.* FROM addviil left join mst_employee on addviil.id=mst_employee.villa_id WHERE mst_employee.employee_status='active' and mst_employee.sk_employee_id='$sk_employee_id'");
	// 	$result = $query->result();
	// 	return $result;
 //    	}
    	    

 //    }


	 function Deleteemp($sk_employee_id)
	{
		$query=$this->db->query("update mst_employee set employee_status='inactive' where sk_employee_id='$sk_employee_id'");
		 
	}

	 function activeemp($sk_employee_id)
	{
		$query=$this->db->query("update mst_employee set employee_status='active' where sk_employee_id='$sk_employee_id'");
		 
	}


	function getempid($sk_employee_id){
    	
    		

		if($sk_employee_id=="All")
    	{
    		$query=$this->db->query("SELECT addviil.*,mst_employee.* FROM addviil left join mst_employee on addviil.id=mst_employee.villa_id WHERE mst_employee.employee_status='active'");
		$result = $query->result();
		return $result;
    	}
    	else
    	{

    		$query=$this->db->query("SELECT mst_employee.* ,addviil.* FROM mst_employee LEFT JOIN addviil ON mst_employee.villa_id=addviil.id  WHERE mst_employee.employee_status='active' AND mst_employee.sk_employee_id=$sk_employee_id");
		$result = $query->result();
		return $result;
    	}
    	
    
    	

    }

	function Update($table,$cond,$email,$data)
	{
		$this->db->where($cond,$email);
		$this->db->update($table,$data);
	}

	function getVillaById($sk_employee_id){
		$query=$this->db->query("SELECT addviil.* FROM addviil WHERE addviil.post_data='active' and addviil.id NOT IN( SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(t.villa_id, ',', n.n), ',', -1) value
  FROM mst_employee t CROSS JOIN 
  (


SELECT a.N + b.N * 10 + 1 n
     FROM 
    (SELECT 0 AS N UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) a
   ,(SELECT 0 AS N UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) b
    ORDER BY n 
   ) n
 WHERE n.n <= 1 + (LENGTH(t.villa_id) - LENGTH(REPLACE(t.villa_id, ',', ''))) AND t.sk_employee_id !=$sk_employee_id  )");
		$result = $query->result();
		return $result;

	}
	function is_email_available($email)  
      {  
          $sql = 'SELECT * FROM mst_employee WHERE e_email = ?';
          $binds = array($email);
          $query = $this->db->query($sql, $binds);
           if ($query->num_rows() > 0)
           {
             return true;
           } else {
             return false;
            }
      }  

     


      function is_userid_available($user_id)  
      {  
          $sql = 'SELECT * FROM mst_employee WHERE user_id = ?';
          $binds = array($user_id);
          $query = $this->db->query($sql, $binds);
           if ($query->num_rows() > 0)
           {
             return true;
           } else {
             return false;
            }
      } 

      function is_mobile_available($mobile)  
      {  
          $sql = 'SELECT * FROM mst_employee WHERE phone_number = ?';
          $binds = array($mobile);
          $query = $this->db->query($sql, $binds);
           if ($query->num_rows() > 0)
           {
             return true;
           } else {
             return false;
            }
      }  


}


?>