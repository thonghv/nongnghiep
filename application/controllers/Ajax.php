<?php
class Ajax extends CI_Controller {
    public function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->library("cart"); 
		$this->load->database();
    }

    
    function ajax_menu_sub_v1($id)
	{
		?>

		<select name="question_category" class="ask-category" onchange="getCategoryDetail(this.value)">
			<option value="0">Chọn khối lớp / chuyên đề ...</option>
				<?php
					if($id == 6) {
						$query = $this->db->query('SELECT *FROM ex_menu_sub where is_special = 1 AND menu_type='.$id);
					} else {
						$query = $this->db->query('SELECT *FROM ex_menu_sub where menu_type='.$id);
					}

					echo $query->num_rows();
					if($query->num_rows()!=0){
					$data=$query->result_array();
					foreach($data as $items){
					?>
						<option value='<?=$items["id"]?>' ><?=$items["name"]?></option>
					<?php }
					}
				?>
		</select>
		<?php
	}


	function ajax_menu_sub_v3($id)
	{
		?>

		<select name="question_category" class="ask-category" onchange="getCategoryDetail(this.value)">
			<option value="0">Chọn khối lớp / chuyên đề ...</option>
				<?php
					if($id == 6) {
						$query = $this->db->query('SELECT *FROM ex_menu_sub where is_special = 0 AND menu_type='.$id);
					} else {
						$query = $this->db->query('SELECT *FROM ex_menu_sub where menu_type='.$id);
					}

					echo $query->num_rows();
					if($query->num_rows()!=0){
					$data=$query->result_array();
					foreach($data as $items){
					?>
						<option value='<?=$items["id"]?>' ><?=$items["name"]?></option>
					<?php }
					}
				?>
		</select>
		<?php
	}

	function ajax_menu_sub_v2($id)
	{
		?>

		 <select class="ask-category"  name="question_level" id="id_question_level">
			 <option value="0">Chọn loại bài tập ...</option>
				<?php
					$query = $this->db->query('SELECT *FROM ex_menu_sub_detail where sub_type='.$id);

					echo $query->num_rows();
					if($query->num_rows()!=0){
					$data=$query->result_array();
					foreach($data as $items){
						if($items["is_pub"] == 1 || $items["is_theory"] == 1) {
							continue;
						}
					?>
						<option value='<?=$items["detail_type"]?>' ><?=$items["detail_type_name"]?></option>
					<?php }
					}
				?>
		</select>
		<?php
	}

}
?>