<?php
class WebsiteModel  extends CI_Model{
	
	function Save($data,$table)
	{
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	function Update($table,$cond,$email,$data)
	{
		$this->db->where($cond,$email);
		$this->db->update($table,$data);
	}
	
	
	function getPlot($limit,$offset) {
		$sql = "SELECT * FROM(SELECT * FROM `exp_plot`  limit 36 offset 0 )res1 ORDER BY res1.plot_no desc";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
	}
	function customer_exits($plotId){
		$sql = "SELECT customer.*  FROM `customer` WHERE customer.plot_id=$plotId";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
	}
	function getPlotData($plotId){
		$sql = "SELECT '' as ci_customer_id,'' as customer_name,'' as current_status ,'' as no_of_days,'' as c_content_no,'' as marketer_name,'' as m_content_no,'' as pb_no,'' as document_no,'' as details,'' as details, exp_plot.*  FROM `exp_plot` WHERE exp_plot.plot_id=$plotId";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
	}
	function getCustomerByPlotNo($plotNo)
	{	 
		$sql = 'SELECT customer.ci_customer_id,customer.customer_name,customer.current_status ,customer.no_of_days,customer.c_content_no,customer.marketer_name,customer.m_content_no,customer.pb_no,customer.document_no,customer.details,customer.details ,exp_plot.* FROM customer LEFT JOIN exp_plot ON customer.plot_id=exp_plot.plot_id WHERE customer.plot_id =?';
		$binds = array($plotNo);
		$query = $this->db->query($sql, $binds);
		if ($query->num_rows() > 0) {
			return $query->result();
		} 
		else {
			return false;
		}
	}
	
	/* ******** */
	function can_login($user_id,$password){
	
		// $this->db->where('employee_name',$username);
		// $this->db->where('password',$password);
	
		// $query=$this->db->get('mst_employee');
		// echo json_encode($query);
	
		// if($query->num_rows()>0){
		// 	return true;
		// }else{
		// 	return false;
		// }
	
		/*$query=$this->db->query("SELECT * FROM mst_employee WHERE employee_name='$employee_name' and password='$password'");
			$result = $query->result();
		return $result;*/
	
		$sql = "SELECT * FROM mst_employee WHERE user_id=? and password=? and employee_status='active' ";
		$binds = array($user_id,$password);
		$query = $this->db->query($sql, $binds);
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function exp_vill($sk_employee_id){
		$query=$this->db->query("SELECT mst_employee.*,res1.add_vill as add_vill,res1.id  FROM(SELECT addviil.add_vill,addviil.id FROM addviil WHERE addviil.id  IN( SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(t.villa_id, ',', n.n), ',', -1) value
				FROM mst_employee t CROSS JOIN
				(
				SELECT a.N + b.N * 10 + 1 n
				FROM
				(SELECT 0 AS N UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) a
				,(SELECT 0 AS N UNION ALL SELECT 1 UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5 UNION ALL SELECT 6 UNION ALL SELECT 7 UNION ALL SELECT 8 UNION ALL SELECT 9) b
				ORDER BY n
		) n
				WHERE t.sk_employee_id=$sk_employee_id AND n.n <= 1 + (LENGTH(t.villa_id) - LENGTH(REPLACE(t.villa_id, ',', ''))) ) )res1 , mst_employee WHERE mst_employee.employee_status='active' AND mst_employee.sk_employee_id=$sk_employee_id");
		$result = $query->result();
		return $result;
	}
	
}

    


?>