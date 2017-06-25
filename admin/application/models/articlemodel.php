<?php
class Articlemodel extends CI_Model{
	public function alist($tiaoguo,$pagesize){
		if($pagesize){
			$rs=$this->db->order_by('id desc')->limit($pagesize,$tiaoguo)->get('article');
		}else{
			$rs=$this->db->select('id')->get('article');
		}
		return $rs->result_array();
	}
	public function addsave($pic){
		if($pic){
			$data['pic']=$pic;
		}
		$data['title']=$this->input->post('title');
		$data['time']=$this->input->post('time');
		$data['type']=$this->input->post('type');
		$data['content']=$this->input->post('content');
		$bool=$this->db->insert('article',$data);
		return $bool;
	}
	public function singleinfo($id){
		$rs=$this->db->where(array('id'=>$id))->get('article');
		return $rs->row_array();
	}
	public function delete($id){
		$imgarr=$this->singleinfo($id);
		$imgurl=$imgarr['pic'];
		$imgurl=explode('$',$imgurl);
		if(is_array($imgurl)){
			foreach($imgurl as $item){
				if(is_file('../uploads/'.$item)){
					unlink('../uploads/'.$item);
				}
			}	
		}
		return $this->db->delete('article',array('id'=>$id));
	}
	public function editsave($img_now,$oldpic){
		$id=$this->input->post('id');
		$data['pic']=$img_now;
		$data['title']=$this->input->post('title');
		$data['time']=$this->input->post('time');
		$data['type']=$this->input->post('type');
		$data['content']=$this->input->post('content');
		$bool=$this->db->where(array('id'=>$id))->update('article',$data);
		if($bool){
			if(is_array($oldpic)){
				foreach($oldpic as $item){
					if(is_file('../uploads/'.$item)){
						unlink('../uploads/'.$item);
					}
				}
			}
		}
		return $bool;
	}
}