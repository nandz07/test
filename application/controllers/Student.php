<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct()//to look
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation'));
		$this->load->model('crud_model');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function test0()
	// {
	// $res=$this->db->get("student");
	// $rows =$res->result_array();//for array result method
	// // echo $rows[1]->cource;
	// echo $rows[1]['name'];




      
	// 	// die;
	// 	// $students = [

	// 	// 	1 =>  "anu",
	// 	// 	2 => "ammu",
	// 	// 	3 => "geethu"];
			
           
	// 	// $data =[]; //sample array stored as data 
	// 	// $data ["sample_value"] = $students[$id];//here we pass id into data 
	// 	//  $this->load->view('view',$data);
		
	// }
	// public function test1()
	// {
	// $res=$this->db->get("student");
	// $rows =$res->result();//for object method
	
	// echo $rows[0]->name;




      
	// 	// die;
	// 	// $students = [

	// 	// 	1 =>  "anu",
	// 	// 	2 => "ammu",
	// 	// 	3 => "geethu"];
			
           
	// 	// $data =[]; //sample array stored as data 
	// 	// $data ["sample_value"] = $students[$id];//here we pass id into data 
	// 	//  $this->load->view('view',$data);
		
	// }
	// public function test2()
	// {
	// $res=$this->db->get("student");
	// $rows =$res->result_array();//for object method
	
	// echo $rows[0] ['mark'];

	// }

	// public function test3()
	// {
	// $this->db->select("*");
	// $this->db->from("student");
	// $res=$this->db->get("");
	// $data["hai"]=$res->result();//for object method
	// $this->load->view("view",$data);


	// }
	// public function test4($id)
	// {
	// $this->db->select("*");
	// $this->db->from("student");
	// $where="(id='$id')";
	// $this->db->where($where);
	// $res=$this->db->get("");
	// $rows =$res->result();//for object method
	// var_dump($rows);

	// }
	// public function test5()
	// {
	// 	$mark=250;
	// $this->db->select(['id','name']);
	// $this->db->from("student");
	// $this->db->like('name','kam','after');
	// $this->db->order_by('name','desc');
	// $res=$this->db->get("");
	// $rows =$res->result();//for object method
	// var_dump($rows);

	// }
	// public function test6()
	// {
		
	// $this->db->select('mark');
	// $this->db->from("student");
	// $this->db->like('name','kam','after');
	// $this->db->order_by('name','desc');
	// $res=$this->db->get("");
	// $rows =$res->result();//for object method
	// $result=[$rows];
	// var_dump($result);

	// }
	// public function test7()
	// {
	// 	$newdata=[
	// 			"name" => "sreerag",
	// 			"cource" => "deploma",
	// 			"mark" => 300];
	// 	$this->db->insert("student",$newdata);

	// }
	// public function test8()
	// {
	// 	$sql="insert into student values('','vichith','bsc',280)";
	// 	$this->db->query($sql);

	// }
	// public function test9()
	// {
	// 	$this->db->set("name","kamarudheen");
	// 	$this->db->where("id",2);
	// 	$this->db->update("student");	

	// }
	// public function test10()
	// {
	// 	$this->db->from("student");
	// 	$this->db->where("id",8);
	// 	$this->db->delete();	

	// }
	// public function test12()
	// {
	// $sql="delete  from student where id=9";
	// 	$this->db->query($sql);	

	// }
	// public function test13()
	// {
	// $sql="select * from student where id=7";
	// $result=$this->db->query($sql);
	// $data["result"]=$result->result();	
	// $this->load->view("view",$data);	
	
	// }
	// public function test14()
	// {
	// 	$this->db->select("*");
	// 	$this->db->from("student");
	// 	$this->db->where("id",1);
	// 	$query=$this->db->get();
	// 	$data["answer"]=$query->result();
	// 	$this->load->view("view",$data);


		
	// }
	// public function test15()
	// 	{
	// 		$insert =[
	// 				"name" =>"chemmu",
	// 				"cource" => "bca",
	// 				"mark"=> 300

	// 		];
	// 		$data["result"]=$this->db->insert("student",$insert);
			
	// 		$this->load->view("view",$data);
			
	// 	}
	// public function test16()
	// {
	// 	$this->db->from("student");
	// 	$this->db->where("name","chemmu");
	// 	$data["result"]=$this->db->delete();
	// 	$this->load->view("view",$data);

	// }
	// public function test46()
	// {
	// $sql="select * from student where id=1";
	// $res=$this->db->query($sql);
	// $data["result"]=$res->result();	
	// $this->load->view("view1",$data);	
	
	// }
	// public function test()
	// {
	// 	$this->db->select("name");
	// 	$this->db->from("student");
	// 	$this->db->where("id",2);
	// 	$res=$this->db->get("");
	// 	$data["result"]=$res->result();	
	// 	$this->load->view("view1",$data);	


	// }
	// public function up()
	// {
		
	// 	$this->db->set("name","nandu");
	// 	$this->db->where("id",8);
	// 	$var=$this->db->update("student");
		

	// }
	// public function up1()
	// {
	// 	$sql="update student set name='nandu' where name='nandakumar'";
	// 	$query=$this->db->query($sql);
	// 	$data["arr"]=$query;
	// 	$this->load->view("view1",$data);
	
		

	// }
	// public function up2()
	// {
	// 	//delete * from student where id="8";
	// 	$this->db->from("student");
	// 	$this->db->where("id",8);
	// 	$var1=$this->db->delete();
	// 	$data["arr1"]=$var1;
	// 	$this->load->view("view1",$data);

		

	// }
	// public function up3() 
	// {
	// $sql="delete from student where id=15";
	// $data["arr1"]=$this->db->query($sql);
	// $this->load->view("view1",$data);

	// }
   
	// public function up4() 
	// {
	// $sql="insert into student values('','nandu','btch',390)";
	// $data["arr1"]=$this->db->query($sql);
	// $this->load->view("view1",$data);


	// }
	// public function up5() 
	// {
	// $students =
	// 			[
	// 				"name" =>"nandu",
	// 				"cource" =>"btech",
	// 				"mark"=> 300

	// 			];
	// 	$data["arr1"]=	$this->db->insert("student",$students);
	// 	$this->load->view("view1",$data);
	


	// }
	// public function view()
	// 	{
	// 		$this->db->select("*");
	// 		$this->db->from("student");
	// 		$sql=$this->db->get("");
	// 		$res=$sql->result();
	// 		$data["crud"]=$res;
	// 		$this->load->view("view",$data);

	// 	}
   
	// 	public function register()
	// 	{
			
	// 		$this->load->view("register");

	// 	}
	// 	public function add()
	// 	{	
	// 	$name=$this->input->post("name");
	// 	$cource=$this->input->post("cource");
	// 	$mark=$this->input->post("mark");
		

	// 	$add=[
	// 				"name"=>$name,
	// 				"cource"=>$cource,
	// 				"mark"=>$mark
	// 			];	
	// 			$this->db->insert("student",$add);

	// 	}
	// 	public function delete($where)
	// 	{
	// 		$this->db->from("student");
	// 		$where=$this->db->where("id",2);
	// 		$this->db->delete();

	// 	}
	public function view2($id)
	{
		
		$this->db->select("*");
		$this->db->from("student");
		$this->db->where("id",$id);
		$query=$this->db->get("");
		$res["hai"]=$query->result();
		$this->load->view("view2",$res);
		

	//	$res=$this->db->get("");
	// $data["hai"]=$res->result();//for object method
	// $this->load->view("view",$data);
	}
	public function view($id)
	{
		$this->db->select("*");
		$this->db->from("student");
		$this->db->where("id",3)	;
		$query=$this->db->get("");
		$res=$query->result();

		var_dump($res);
	}
	//select student_name from student where id = 1
	public function view3($id){
		$this->db->select("student_name");
		$this->db->from("student");
		$this->db->where("id",$id);
		$query=$this->db->get("");	
		$res=$query->result();
		$data["hai"]=$res;
		$this->load->view("viewstudentname",$data);
		var_dump($res);
	}
	//delete from student where id=5
	public function deletebyid($id)
	{
		
		$this->db->from("student");
		$this->db->where("id",$id);
		$this->db->delete("");

	}
	public function insertnew(){
		$sql="insert into student values('1','nanadana','1654','2')";
		$this->db->query($sql);

		// 	$sql="insert into student values('','vichith','bsc',280)";
	// 	$this->db->query($sql);
	}
	public function insertnew1(){

		$a="insert into student values('2','mashook','65154','1')";
		$this->db->query($a);		

		
		
	}public function insertnew2(){

		//$add=[
			// 				"name"=>$name,
			// 				"cource"=>$cource,
			// 				"mark"=>$mark
			// 			];	
			// 			$this->db->insert("student",$add);
		$new=[
				
				"student_name"=>"mahesh",
				"phone_number"=>"4565",
				"genter"=>"1"
				
		];
		$this->db->insert("student",$new);

		
	}
	public function update1(){

		// 	$sql="update student set name='nandu' where name='nandakumar'";
	// 	$query=$this->db->query($sql);
	// 	$data["arr"]=$query;
	// 	$this->load->view("view1",$data);

		 $up="update student set student_name='nandu', genter='1'where id='1'";
		 $query=$this->db->query($up);
		// $this->db->set("student_name","nand");
		// $this->db->set("genter","6");
		// $this->db->where("id",1);
		// $res=$this->db->update("student");
		if($query)
			{
				echo'<script>alert("update is successful")</script>';
			}
			
		

	}
	public function update2($new_name,$id){
		echo $new_name;
		$name=$new_name;
		$this->db->select("student_name");
		$this->db->from("student");
		$this->db->where("id",$id);
		$query=$this->db->get("");	
		$res=$query->result();
		$data["hai"]=$res;

		
		$this->db->set("student_name",$name);
		$this->db->where("id",$id);
		$this->db->update("student");
		//$data1=[];
		$data1["new_name"]=$name;
		$this->load->view("updateview",$data,$data1);





		//if($query)
		// if($res)
		// 	{
		// 		echo'<script>alert("update is successful")</script>';
		// 	}

		
	}
	public function insert11(){
		$new=[
			"student_name"=>"appu",
			"phone_number"=>"98416",
			"genter"=>"1"
		];
		$this->db->insert("student",$new);
	}
	public function insert12(){
		$new=[
			"student_name"=>"althaf",
			"phone_number"=>"146874",
			"genter"=>"1"
		];
		$this->db->insert("student",$new);
	}
	public function view4($id){
		// select student_name from student where id=1
		$this->db->select("student_name");
		$this->db->from("student");
		$this->db->where("id",$id);
	}
	
	public function view5($name){
		$data["hai"]=$name;
		$this->load->view("view5",$data);

	}
	public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('student'); 
		 
         return $query;  
      } 
	  public function insertDisplay($id,$name){
		$this->db->select("student_name");
		$this->db->from("student");
		$this->db->where("id",$id);
		$res1=$this->db->get("");
		$data["hai"]=$res1->result();

		$this->db->set("student_name",$name);
		$this->db->where("id",$id);
		$this->db->update("student");
		$data1["hello"]=$name;
		
		$this->load->view("insertDisplayView",$data1);
		$this->load->view("insertDisplayView",$data);




	  }public function dis($id){
		// 	$sql="update student set name='nandu' where name='nandakumar'";
	// 	$query=$this->db->query($sql);
	// 	$data["arr"]=$query;
	// 	$this->load->view("view1",$data);
		$sql="select *from student where id='$id'";
		$query=$this->db->query($sql);
		$data["info"]=$query->result();
		$this->load->view("view6",$data);
	  }
	  public function dis1($id){
		$sql="select *from student where id ='$id'";
		$query=$this->db->query($sql);
		$data["hello"]=$query->result();
		$this->load->view("view7",$data);

	  }public function slid(){
		$this->load->view("slid");
	  }
	  public function ajaxSample(){
		$this->load->view("ajax_sample");
	  }
	  public function savedata(){
		
		$name= $_POST['name'];
		$phonenumber= $_POST['phonenumber'];
		$genter= $_POST['genter'];
		
		
		$newdata=[
			"student_name" => $name,
			"phone_number" => $phonenumber,
			"genter" => $genter];
		$this->db->insert("student",$newdata);
		
		// $data=['status'=>'student done'];
		// return $this->response->setJSON($data);

		// $resData = array(

		// 	"status" => true,
		// 	"message" => "success"
		// );
		// echo json_encode($resData);
	  }

	  public function ajaxCrud(){

		
		$this->load->view("ajaxcrud");
	  }
	  public function getData(){
		$this->db->select("*");
		$this->db->from("student");
		$res=$this->db->get("");
		$data["students"]=$res->result();
		echo json_encode($data);
		//return $this->response->setJSON($data);
	  }

	  public function formValidation(){

		
		$this->load->view("formValidation");
	  }
	  public function validation(){
		?>
		<script>
			console.log("hai");
		</script>
		<?php
		$this->load->library('form_validation');//load form validation lib
		$this->form_validation->set_rules('name','Name','required');//check some value is there or not
		$this->form_validation->set_rules('phonenumber','Phonenumber','required');
		$this->form_validation->set_rules('gender','Gender','required');
		if($this->formValidation->run()){
			$array=array(
				'success'=>'<div class="alert alert-success">Thank you for contact'
			);
		}else{
			$array = array(
				'error' =>true,
				'name_error' =>form_error('name'),
				'phonenumber_error' =>form_error('phonenumber'),
				'gender_error' =>form_error('gender'),

			);
		}
	  }public function samp(){
		$this->load->view("samp");
	  }
	  //************************* */

	  public function ajcr(){

		
		$this->load->view("ajcr");
	  }
	  public function ajcrInsert(){
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('phonenumber', 'Phonenumber', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			if ($this->form_validation->run() == FALSE)
                {
					$data = array('response' => "error", 'message' => validation_errors());
                }
                else
                {
					 $name= $this->input->post('name');
					 $phonenumber= $this->input->post('phonenumber');
					 $gender= $this->input->post('gender');
			
			
					 $ajax_data=[
					 	"student_name" => $name,
						"phone_number" => $phonenumber,
					 	"gender" => $gender];
					 
					//  	$hai=$this->db->insert("student",$newdata);
					//$hai=true;
					//$ajax_data = $this->input->post();
					//$hai=$this->db->insert("student",$newdata);
					if($this->crud_model->insert_entry($ajax_data)){

						$data = array('response' => "success", 'message' => 'data added successfully');
					}else{
						$data = array('response' => "error", 'message' => 'failed');
					}
                }
		}else{
			echo "No direct script access allowed";
		}
		
		echo json_encode($data);
	  }
	  public function fetch(){
		
		if($this->input->is_ajax_request()){
			$this->db->select("*");
			$this->db->from("student");
			$res=$this->db->get("");
			$data=$res->result();
			
			echo json_encode($data);

		}
	  }
	  public function ajdelete(){
		if($this->input->is_ajax_request()){
			$del_id= $this->input->post('del_id');
		}
		//$del_id= $this->input->post('del_id');
		if ($this->crud_model->delete_entry($del_id)){
			$data = array('response' => "success", 'message' => 'data added successfully');
		}else{
			$data=array('response'=>"error");
		}
		echo json_encode($data);

	  }
	  public function ajcredit(){
		if($this->input->is_ajax_request()){
			$edit_id=$this->input->post('edit_id');
		}
		if($post =$this->crud_model->single_entry($edit_id)){
			$data=array('response'=>"success",'post'=>$post);
		}else{
			$data=array('response'=>"success",'message'=>'failed');
		}
		echo json_encode($data);
	  }
	  public function ajcrupdate(){
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('edit_name', 'Name', 'required');
			$this->form_validation->set_rules('edit_phonenumber', 'Phonenumber', 'required');
			$this->form_validation->set_rules('edit_gender', 'Gender', 'required');
			if ($this->form_validation->run() == FALSE)
                {
					$data = array('response' => "error", 'message' => validation_errors());
                }
                else
                {	
					$id= $this->input->post('edit_id');
					 $name= $this->input->post('edit_name');
					 $phonenumber= $this->input->post('edit_phonenumber');
					 $gender= $this->input->post('edit_gender');
			
			
					 $ajax_data=[
						"id" => $id,
					 	"student_name" => $name,
						"phone_number" => $phonenumber,
					 	"gender" => $gender];
					 
					//  	$hai=$this->db->insert("student",$newdata);
					//$hai=true;
					//$ajax_data = $this->input->post();
					//$hai=$this->db->insert("student",$newdata);
					if($this->crud_model->update_entry($ajax_data)){

						$data = array('response' => "success", 'message' => 'data updated');
					}else{
						$data = array('response' => "error", 'message' => 'failed');
					}
                }
		}else{
			echo "No direct script access allowed";
		}
		
		echo json_encode($data);
	  }


// ********************************
	 public function modalImage(){
		$this->load->view("modalImage");
	 }
	 public function modalImageInsert(){
		$file_name=$_FILES['file']['name'];
		$name= $this->input->post('name');
		$gender= $this->input->post('gender');
		$phone_number= $this->input->post('phone_number');
		if ($file_name != NULL) {
			$temp = $_FILES['file']['tmp_name'];
			$new_file_name = time() . $file_name;
			move_uploaded_file($temp, 'images/' . $new_file_name);
			// echo $name;
			$image = 'images/' . $new_file_name;
			// echo $image;
			// echo $gender;
			
		} else {
			
		}
		
		$new = [
			"student_name"=>$name,
			"phone_number"=>$phone_number,
			"gender"=>$gender,
			"image" => 'images/' . $new_file_name
			];
		$res = $this->db->insert("student", $new);
		
		echo json_encode($res);
	 }
	 function sampleValidation(){
		$this->load->view("sampleValidation");
	 }
	 public function modalValidation(){
		$this->load->view("modalValidation");
	 }
	 public function fetchTable(){
		if($this->input->is_ajax_request()){
			if($post=$this->crud_model->selectTable()){
				$data=array("response"=>'success','post'=>$post);
			}else{
				$data=array('response'=>'error','message'=>'fail');
			}
			echo json_encode($post); 
		}
	 }
	 public function modalValidationInsert(){
		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('phonenumber', 'Phonenumber', 'required');
			$this->form_validation->set_rules('gender', 'Gender', 'required');
			if ($this->form_validation->run() == FALSE)
                {
					$data = array('response' => "error", 'message' => validation_errors());
                }
                else
                {
					 $name= $this->input->post('name');
					 $phonenumber= $this->input->post('phonenumber');
					 $gender= $this->input->post('gender');
			
			
					 $ajax_data=[
					 	"student_name" => $name,
						"phone_number" => $phonenumber,
					 	"gender" => $gender];
					 
					//  	$hai=$this->db->insert("student",$newdata);
					//$hai=true;
					//$ajax_data = $this->input->post();
					//$hai=$this->db->insert("student",$newdata);
					if($this->crud_model->insert_entry($ajax_data)){

						$data = array('response' => "success", 'message' => 'data added successfully');
					}else{
						$data = array('response' => "error", 'message' => 'failed');
					}
                }
		}else{
			echo "No direct script access allowed";
		}
		
		echo json_encode($data);
	  }
	  public function modal2(){
		$this->load->view("modal2");
	 }

	  



}
?>