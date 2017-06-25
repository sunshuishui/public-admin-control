<?php
class Article extends MY_Controller{
	public function alist(){
		$this->load->model('Articlemodel');
		$this->load->library('pagination');
		$pagesize=15;
		$config['base_url']=site_url('article/alist');
		$row=$this->Articlemodel->alist('','');
		$zongj=count($row);
		$config['total_rows']=$zongj;
		$config['per_page']=$pagesize;
		$config['uri_segment'] = 3;
		$tiaoguo=intval($this->uri->segment(3));
		$config['first_link'] = '首页';
		$config['last_link'] = '尾页';
		$config['next_link'] = '下一页';
		$config['prev_link'] = '上一页';
		$this->pagination->initialize($config); 
		$link=$this->pagination->create_links();
		$data['datalist']=$this->Articlemodel->alist($tiaoguo,$pagesize);
		$data['link']=$link;
		$data['act']='list';
		$this->load->view('article',$data);
	}
	public function add(){
		$data['act']='add';
		$this->load->view('article',$data);
	}
	public function addsave(){
		$num=$this->input->post('num');
		$pic='';
		for($i=1;$i<=$num;$i++){
			$tmpimg=$this->uploadimg('pic'.$i);
			if($tmpimg){
				if($pic){
					$pic=$pic.'$'.$tmpimg;
				}else{
					$pic=$tmpimg;
				}
			}
		}
		$this->load->model('Articlemodel');
		$bool=$this->Articlemodel->addsave($pic);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('article/alist').'";</script>';
		}
	}
	public function edit($id=''){
		if(!$id){
			redirect('article/alist');
		}
		$data['act']='edit';
		$this->load->model('Articlemodel');
		$data['datainfo']=$this->Articlemodel->singleinfo($id);
		$this->load->view('article',$data);
	}
	public function editsave(){
		$id=$this->input->post('id');
		if(!$id){
			redirect('article/alist');
		}
		$oldpic=$this->input->post('oldimg');
		if(!is_array($oldpic)){
			$oldpic=array();	
		}
		$oldpiclen=intval(count($oldpic));
		
		$tolpic=$this->input->post('tolpic');
		
		$num=$this->input->post('num');
		if(($tolpic-$oldpiclen+$num)>8){
			$num_=8-($tolpic-$oldpiclen);
		}else{
			$num_=$num;
		}
		$this->load->model('Articlemodel');	
		$res=$this->Articlemodel->singleinfo($id);
		$ximg=explode('$',$res['pic']);
		if(!is_array($ximg)){
			$ximg=array();	
		}
		
		$img_now=array_diff($ximg,$oldpic);
		$img_now=implode('$',$img_now);
		$pic='';
		for($i=1;$i<=$num_;$i++){
			$tmpimg=$this->uploadimg('pic'.$i);
			if($tmpimg){
				if($pic){
					$pic=$pic.'$'.$tmpimg;
				}else{
					$pic=$tmpimg;
				}
			}
		}
		if($pic){
			if($img_now){
				$img_now=$img_now.'$'.$pic;	
			}else{
				$img_now=$pic;	
			}
		}
		$bool=$this->Articlemodel->editsave($img_now,$oldpic);
		if($bool){
			echo '<script>alert("保存成功！");location.href="'.site_url('article/alist').'";</script>';
		}	
	}
	public function del($id=''){
		if(!$id){
			redirect('article/alist');
		}	
		$this->load->model('Articlemodel');	
		$bool=$this->Articlemodel->delete($id);
		if($bool){
			echo '<script>location.href="'.site_url('article/alist').'";</script>';
		}
	}
	public function uploadimg($name){
		$pimg='';
		if(!empty($_FILES[$name]['tmp_name'])){
			$config['upload_path']='../uploads/';
			$config['allowed_types']='jpg|jpeg|gif|png';
			$config['max_size']='300';
			$config['file_name']=uniqid().rand(123,999);
			$this->load->library('upload');
			$this->upload->initialize($config);
			if($this->upload->do_upload($name)){
				$rdata=$this->upload->data();
				$pimg=$rdata['file_name'];
			}else{
				$pimg='';
			}
		}
		return $pimg;
	}
}