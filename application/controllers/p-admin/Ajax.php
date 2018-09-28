<?php
class Ajax extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}

	public function index()
	{	
	}

	function getSubMenu($id)
	{
		$query=$this->db->query('SELECT *FROM p_sub_menu WHERE group_id='.$id);

		?>
		 <select class="form-control" id ="sub_menu" name = "sub_menu">
			<option value = "" selected >Chọn loại sản phẩm ?</option>
			<?php

			if($query->num_rows()!=0)
			{
				$data=$query->result_array();
				foreach($data as $items)
				{
					?>
					<option value='<?=$items["id"]?>'><?=$items["name"]?></option>
					<?php
				}
			}
			?>
		</select>
		<?php
	}
}
?>