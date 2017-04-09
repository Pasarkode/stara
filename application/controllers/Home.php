<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		define('__LIB__', base_url('lib').'/');
		define('__IMAGES__', base_url('uploads/images').'/');
		define('_OJEX_', 'ojex/');
		
	}

	public function index($w = null)
	{
		$data['lib'] = __LIB__;
		$data['img'] = __IMAGES__;
		if(!$this->session->userdata('myfirst'))
		{
			$this->session->set_userdata('myfirst', 'gluten');
			$this->load->view('welcome', $data);
		}
		else{
			$data['timelines'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' ORDER BY id DESC;")->result();
			$this->load->view('home', $data);
		}
/*		if(!$this->ion_auth->logged_in())
			$this->load->view('welcome', $data);
		else{
			if($w)
			{
				$data['timelines'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' ORDER BY id DESC;")->result();
				$this->load->view(_OJEX_.'home', $data);
			}
			else
			{
				$data['timelines'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' ORDER BY id DESC;")->result();
				$this->load->view('home', $data);
			}
		}*/
			
	}

	function background()
	{
		$data['lib'] = __LIB__;
		$data['img'] = __IMAGES__;
		$wdyw = $this->input->input_stream('wdyw');

		if($wdyw == '0')
		{
			if( ! $this->ion_auth->user()->row())
			{
				echo 'mbl';
				die();
			}

			$title   = $this->input->input_stream('title');
			$isanony = $this->input->input_stream('isanony');
			$cat 	 = $this->input->input_stream('category');
			$url 	 = $this->input->post('url');
			$me  	 = $this->session->userdata('username');
			$mk 	 = $this->session->userdata('ukey'); 
			$data 	 = array('wdyw' => '0'
							,'post_title' => $title
							,'post_category' => $cat
							,'post_url' 	=> $url
							,'poster_username' => $me
							,'poster_key' => $mk);
			$this->db->insert('stara_posts', $data);
			
		}
		elseif($wdyw == '1'){ //timeline

			$w = $this->input->input_stream('w', TRUE);
			$c = $this->input->input_stream('c', TRUE);
			$u = $this->input->input_stream('u', TRUE);
			$i = $this->input->input_stream('i', TRUE);
			$t = $this->input->input_stream('t', TRUE);
			$me = $this->ion_auth->user()->row()->username;
			$ky = $this->ion_auth->user()->row()->ukey;

			$data['c_id']   = $c;
			$data['w_id'] 	= $w;

			if($w == '0')
				$data['timelines'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_category='$c' ORDER BY id DESC LIMIT 10;")->result();
			elseif($w == '1')
				$data['timelines'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_category='$c' AND post_answer < '1' ORDER BY id DESC LIMIT 10;")->result();
			elseif($w == '2')
			{
				$data['w'] 		   = 'us';
				$data['timelines'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='6' AND post_followtype='0' AND poster_username='$me' AND poster_key='$ky' ORDER BY id DESC LIMIT 10;")->result();
			}
			elseif($w == '3')
			{ // his answer
				$data['u'] = $u;
				$data['w'] = 'ua';
				$data['timelines'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND poster_username='$u' AND poster_key='$i' ORDER BY id DESC LIMIT 10;")->result();
			}
			elseif($w == '4')
			{ // his question
				$data['u'] = $u;
				$data['w'] = 'uq';
				$data['timelines'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND poster_username='$u' AND poster_key='$i' ORDER BY id DESC LIMIT 10;")->result();
			}
			elseif($w == '5')
			{ //Seruan
				$data['u'] = $u;
				$data['timelines'] = $this->db->query("SELECT * FROM stara_posts WHERE (wdyw='2' OR wdyw='3' OR wdyw='4' OR wdyw='5') AND poster_username='$u' AND poster_key='$i' ORDER BY id DESC LIMIT 10;")->result();
			}
			elseif($w == '6')
			{ //search
				$data['timelines'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_title LIKE '%$t%' ORDER BY id DESC LIMIT 10;")->result();
			}
		
			$this->load->view(_OJEX_.'testtimeline', $data);
		}
		elseif($wdyw == '2'){ //detail
			$pk = $this->input->input_stream('pk');
			$data['img']  = __IMAGES__;
			$data['post'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_key='$pk';")->row();
			$this->load->view(_OJEX_.'testquestion', $data);
		}
		elseif($wdyw == '3'){ //for 0 answer question
			$w = $this->input->input_stream('w', TRUE);
			$c = $this->input->input_stream('c', TRUE);
			$data['menu_id']   = $c;
			$data['timelines'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_category='$c' AND post_answer='0' ORDER BY id DESC;")->result();
			$this->load->view(_OJEX_.'timeline', $data);
		}
		elseif($wdyw == '4'){ //Tambah Mosi Mosi >.<
			if( ! $this->ion_auth->user()->row())
			{
				echo 'mbl';
				die();
			}

			$i = $this->input->input_stream('i', TRUE);
			$me = $this->ion_auth->user()->row()->username;
			$ky = $this->ion_auth->user()->row()->ukey;
			$cek = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='2' AND post_childfrom='$i' AND poster_username='$me' AND poster_key='$ky' LIMIT 1;")->row();
			if(empty($cek))
			{
				$data 	 = array('wdyw' => '2'
								,'post_childfrom' => $i
								,'poster_username' => $me
								,'poster_key' => $ky);
				$this->db->insert('stara_posts', $data);
				echo json_encode(array("s" => '1'));

				$qo = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_key='$i' LIMIT 1;")->row();
				$ou = $qo->poster_username;
				$ok = $qo->poster_key;
				$pc = $qo->post_category;
				$datenow = date('YmdHis');

				$data 	 = array('wdyw' => '6'
								,'post_category' => $pc
								,'post_childfrom' => $i
								,'post_followtype' => '4'
								,'post_rdate'		=> $datenow
								,'post_forusername' => $ou
								,'post_forkey' 	  	=> $ok
								,'poster_username' => $me
								,'poster_key' => $ky);
				$this->db->insert('stara_posts', $data);

			}
			else
			{
				$this->db->query("DELETE FROM stara_posts WHERE wdyw='2' AND post_childfrom='$i' AND poster_username='$me' AND poster_key='$ky';");
				echo json_encode(array("s" => '0'));
				$this->db->query("DELETE FROM stara_posts WHERE wdyw='6' AND post_followtype='4' AND post_childfrom='$i' AND poster_username='$me' AND poster_key='$ky';");
			}
		}
		elseif($wdyw == '5'){ //ADD / REMOVE MOSI / FOR ANSWER  | U / D / N
			if( ! $this->ion_auth->user()->row())
			{
				echo 'mbl';
				die();
			}
			$i = $this->input->input_stream('i', TRUE);
			$w = $this->input->input_stream('w', TRUE);
			$me = $this->ion_auth->user()->row()->username;
			$ky = $this->ion_auth->user()->row()->ukey; 
			$u = json_encode(array("s" => 'u'));
			$d = json_encode(array("s" => 'd'));
			$n = json_encode(array("s" => 'n'));
			// 0 = DOWNVOTE , 1 = UPVOTE , EMPTY = NETRAL

			$mc = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='3' AND post_childfrom='$i' AND poster_username='$me' AND poster_key='$ky' LIMIT 1;")->row();

			if(!empty($mc))
			{
				if($mc->post_updv == '0'){ //if mc SEKARANG == 0 && tapi DO == 0 berarti HAPUS (TO NETRAL) || KALO MC SEKARANG 0 TAPI DO 1 == UPDATE 
					if($w == '0'){
						$this->db->query("DELETE FROM stara_posts WHERE wdyw='3' AND post_childfrom='$i' AND poster_username='$me' AND poster_key='$ky' AND post_updv='0';");
						echo $n; // i'm away / netral
						$this->db->query("DELETE FROM stara_posts WHERE wdyw='6' AND post_followtype='6' AND post_childfrom='$i' AND poster_username='$me' AND poster_key='$ky';");

					}
					elseif($w == '1'){
						$this->db->query("UPDATE stara_posts SET post_updv='1' WHERE wdyw='3' AND post_childfrom='$i' AND poster_username='$me' AND poster_key='$ky'");
						echo $u; // i just do upvote
			
			$qo = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_key='$i' LIMIT 1;")->row();
			$ou = $qo->poster_username;
			$ok = $qo->poster_key;
			$datenow = date('YmdHis');

			$data 	 = array('wdyw' => '6'
							,'post_childfrom' => $i
							,'post_followtype' => '5'
							,'post_rdate' 		=> $datenow
							,'post_forusername' => $ou
							,'post_forkey' 	  	=> $ok
							,'poster_username' => $me
							,'poster_key' => $ky);
			$this->db->insert('stara_posts', $data);
				$this->db->query("DELETE FROM stara_posts WHERE wdyw='6' AND post_followtype='6' AND post_childfrom='$i' AND poster_username='$me' AND poster_key='$ky';");

					}
				}
				elseif($mc->post_updv == '1') //if mc SEKARANG == 1 && w == 1 berarti HAPUS (TO NETRAL) || KALO MC SEKARANG 1 TAPI DO 0 == UPDATE TO 0
				{
					if($w == '1'){
						$this->db->query("DELETE FROM stara_posts WHERE wdyw='3' AND post_childfrom='$i' AND poster_username='$me' AND poster_key='$ky' AND post_updv='1';");
						echo $n; // i'm away / netral
						$this->db->query("DELETE FROM stara_posts WHERE wdyw='6' AND post_followtype='5' AND post_childfrom='$i' AND poster_username='$me' AND poster_key='$ky';");

					}
					elseif($w == '0'){
						$this->db->query("UPDATE stara_posts SET post_updv='0' WHERE wdyw='3' AND post_childfrom='$i' AND poster_username='$me' AND poster_key='$ky'");
						echo $d; // i just do downvote
			$qo = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_key='$i' LIMIT 1;")->row();
			$ou = $qo->poster_username;
			$ok = $qo->poster_key;
			$datenow = date('YmdHis');

			$data 	 = array('wdyw' => '6'
							,'post_childfrom' => $i
							,'post_followtype' => '6'
							,'post_rdate' 		=> $datenow
							,'post_forusername' => $ou
							,'post_forkey' 	  	=> $ok
							,'poster_username' => $me
							,'poster_key' => $ky);
			$this->db->insert('stara_posts', $data);
				$this->db->query("DELETE FROM stara_posts WHERE wdyw='6' AND post_followtype='5' AND post_childfrom='$i' AND poster_username='$me' AND poster_key='$ky';");

					}
				}
			}
			else{ //i'm empty. CREATE NEW WITH USER W, UPVOTE || DOWNVOTE
				$this->db->query("INSERT INTO stara_posts (wdyw,post_updv,post_childfrom,poster_username,poster_key) VALUES ('3','$w','$i','$me','$ky');");
				if($w == '0') 
				{
					echo $d; //i just do downvote
			$qo = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_key='$i' LIMIT 1;")->row();
			$ou = $qo->poster_username;
			$ok = $qo->poster_key;
			$datenow = date('YmdHis');

			$data 	 = array('wdyw' => '6'
							,'post_childfrom' => $i
							,'post_followtype' => '6'
							,'post_rdate' 		=> $datenow
							,'post_forusername' => $ou
							,'post_forkey' 	  	=> $ok
							,'poster_username' => $me
							,'poster_key' => $ky);
			$this->db->insert('stara_posts', $data);
				}
				elseif($w == '1')
				{
					echo $u; //i just do upvote
			$qo = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_key='$i' LIMIT 1;")->row();
			$ou = $qo->poster_username;
			$ok = $qo->poster_key;
			$datenow = date('YmdHis');

			$data 	 = array('wdyw' => '6'
							,'post_childfrom' => $i
							,'post_followtype' => '5'
							,'post_rdate' 		=> $datenow
							,'post_forusername' => $ou
							,'post_forkey' 	  	=> $ok
							,'poster_username' => $me
							,'poster_key' => $ky);
			$this->db->insert('stara_posts', $data);
				}
				else{
					echo $n; // i'm away

				}
			}

		}
		elseif($wdyw == '6'){ //WRITE COMMENT
			if( ! $this->ion_auth->user()->row())
			{
				echo 'mbl';
				die();
			}
			$i = $this->input->input_stream('i', TRUE);
			$c = $this->input->input_stream('c', TRUE);
			$me = $this->ion_auth->user()->row()->username;
			$ky = $this->ion_auth->user()->row()->ukey; 

			$q = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_key='$i' LIMIT 1;")->row();
			if(!empty($q)){
				$data 	 = array('wdyw' => '4'
								,'post_childfrom' => $i
								,'post_content' => $c
								,'poster_username' => $me
								,'poster_key' => $ky);
				$this->db->insert('stara_posts', $data);
				$now = $q->post_comment+1;
				$this->db->query("UPDATE stara_posts SET post_comment='$now' WHERE wdyw='0' AND post_key='$i';");

				$qo = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_key='$i' LIMIT 1;")->row();
				$ou = $qo->poster_username;
				$ok = $qo->poster_key;
				$datenow = date('YmdHis');

				$data 	 = array('wdyw' => '6'
								,'post_childfrom' => $i
								,'post_followtype' => '2'
								,'post_rdate' 		=> $datenow
								,'post_forusername' => $ou
								,'post_forkey' 	  	=> $ok
								,'poster_username' => $me
								,'poster_key' => $ky);
				$this->db->insert('stara_posts', $data);
			}

			$a = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_key='$i' LIMIT 1;")->row();
			if(!empty($a))
			{
				$data 	 = array('wdyw' => '5'
								,'post_childfrom' => $i
								,'post_content' => $c
								,'poster_username' => $me
								,'poster_key' => $ky);
				$this->db->insert('stara_posts', $data);
				$now = $a->post_comment+1;
				$this->db->query("UPDATE stara_posts SET post_comment='$now' WHERE wdyw='1' AND post_key='$i';");

				$qo = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_key='$i' LIMIT 1;")->row();
				$ou = $qo->poster_username;
				$ok = $qo->poster_key;
				$datenow = date('YmdHis');

				$data 	 = array('wdyw' => '6'
								,'post_childfrom' => $i
								,'post_followtype' => '3'
								,'post_rdate' 		=> $datenow
								,'post_forusername' => $ou
								,'post_forkey' 	  	=> $ok
								,'poster_username' => $me
								,'poster_key' => $ky);
				$this->db->insert('stara_posts', $data);
			}
		}
		elseif($wdyw == '7'){ // I NEED COMMENTS WITH THIS UNIQUE ID
			$i = $this->input->input_stream('i', TRUE);
			$w = $this->input->input_stream('w', TRUE);
			$data['i'] = $i;
			$data['w'] = $w;
			$data['lib'] = __LIB__;
			$data['img'] = __IMAGES__;

			$q = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_key='$i' LIMIT 1;")->row();
			if(!empty($q)){
				if(empty($w))
				{
					$data['comments'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='4' AND post_childfrom='$i';")->result();
					$this->load->view(_OJEX_.'testcomments', $data);
					$now = $q->post_views+1;
					$this->db->query("UPDATE stara_posts SET post_views='$now' WHERE wdyw='0' AND post_key='$i';");
				}
				else{
					$data['comments'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='4' AND post_childfrom='$i' AND id > '$w' LIMIT 1;")->result();
					$this->load->view(_OJEX_.'testcomments', $data);
				}
			}

			$a = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_key='$i' LIMIT 1;")->row();
			if(!empty($a))
			{
				if(empty($w))
				{
					$data['comments'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='5' AND post_childfrom='$i';")->result();
					$this->load->view(_OJEX_.'testcomments', $data);
					$now = $a->post_views+1;
					$this->db->query("UPDATE stara_posts SET post_views='$now' WHERE wdyw='1' AND post_key='$i';");
				}
				else{
					$data['comments'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='5' AND post_childfrom='$i' AND id > '$w' LIMIT 1;")->result();
					$this->load->view(_OJEX_.'testcomments', $data);
				}

			}

		}
		elseif($wdyw == '8'){ //writer answer 
			if( ! $this->ion_auth->user()->row())
			{
				echo 'mbl';
				die();
			}

			$i = $this->input->input_stream('i', TRUE);
			$c = str_replace('"', "'", $this->input->post('c'));
			$r = $this->input->input_stream('r', TRUE);
			$a = $this->input->input_stream('a', TRUE);

			$me = $this->ion_auth->user()->row()->username;
			$ky = $this->ion_auth->user()->row()->ukey;
			$cek = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_key='$i' LIMIT 1;")->row();
			
			if(!empty($cek)){
				$data 	 = array('wdyw' => '1'
								,'post_childfrom' => $i
								,'post_content' => $c
								,'poster_username' => $me
								,'poster_key' => $ky);
				$this->db->insert('stara_posts', $data);
				$now = $cek->post_answer+1;
				$this->db->query("UPDATE stara_posts SET post_answer='$now' WHERE post_key='$i' AND wdyw='0';");
				$ou = $cek->poster_username;
				$ok = $cek->poster_key;
				$datenow = date('YmdHis');
				$lastcont = substr(strip_tags($c), 0, 15).'..';
				$cn = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='6' AND post_followtype='1' AND post_forusername='$me' AND post_forkey='$ky' AND post_childfrom='$i' LIMIT 1;")->row();
				
				if(empty($cn))
				{
					$data 	 = array('wdyw' => '6'
									,'post_childfrom' => $i
									,'post_followtype' => '1'
									,'post_rdate' 		=> $datenow
									,'post_lastcontent' => $lastcont
									,'post_lastuser' => $me
									,'post_forusername' => $me
									,'post_forkey' 	  	=> $ky
									,'poster_username' => $me
									,'poster_key' => $ky);
					$this->db->insert('stara_posts', $data);
				
					$this->db->query("UPDATE stara_posts SET post_rdate='$datenow',post_lastcontent='$lastcont',post_lastuser='$me',poster_username='$me',poster_key='$ky' WHERE wdyw='6' AND post_childfrom='$i' AND post_followtype='1';");
				}
				else
					$this->db->query("UPDATE stara_posts SET post_rdate='$datenow',post_lastcontent='$lastcont',post_lastuser='$me',poster_username='$me',poster_key='$ky' WHERE wdyw='6' AND post_childfrom='$i' AND post_followtype='1';");

			}

		}
		elseif($wdyw == '9'){ // DO FOLLOW / UNFOLLOW
			if( ! $this->ion_auth->user()->row())
			{
				echo 'mbl';
				die();
			}
			$i = $this->input->input_stream('i', TRUE); //IDENTITAS / unique id hash / username
			$w = $this->input->input_stream('w', TRUE); //do what?
			$me = $this->ion_auth->user()->row()->username;
			$ky = $this->ion_auth->user()->row()->ukey;
			$f = json_encode(array("s" => 'f'));
			$u = json_encode(array("s" => 'u'));

			if($w == '0' || $w == '1')
			{
				$cek = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='6' AND (post_followtype='0' OR post_followtype='1') AND post_childfrom='$i' AND poster_username='$me' AND poster_key='$ky';")->row(); 
				if(empty($cek))
				{
						$qo = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_key='$i' LIMIT 1;")->row();
						$ou = $qo->poster_username;
						$ok = $qo->poster_key;
						$pc = $qo->post_category;
						$datenow = date('YmdHis');

						$data 	 = array('wdyw' => '6'
										,'post_category' => $pc
										,'post_childfrom' => $i
										,'post_followtype' => '0'
										,'post_rdate' 		=> $datenow
										,'post_forusername' => $ou
										,'post_forkey' 	  	=> $ok
										,'poster_username' => $me
										,'poster_key' => $ky);
						$this->db->insert('stara_posts', $data);

/*						$data 	 = array('wdyw' => '6'
										,'post_childfrom' => $i
										,'post_followtype' => '1'
										,'post_forusername' => $ou
										,'post_forkey' 	  	=> $ok
										,'poster_username' => $me
										,'poster_key' => $ky);
						$this->db->insert('stara_posts', $data);*/
						echo $f;

				}
				else{
						$this->db->query("DELETE FROM stara_posts WHERE wdyw='6' AND post_followtype='0' AND post_childfrom='$i' AND poster_username='$me' AND poster_key='$ky';");
						$this->db->query("DELETE FROM stara_posts WHERE wdyw='6' AND post_followtype='1' AND post_childfrom='$i' AND poster_username='$me' AND poster_key='$ky';");
						echo $u;
				}

			}

		}
		elseif($wdyw == '10'){	//get realtime notification	
			if( ! $this->ion_auth->user()->row())
			{
				echo 'mbl';
				die();
			}

			// date('YmdHis');
			$me = $this->ion_auth->user()->row()->username;
			$notedate 	= date('YmdHis', mktime( date('H'),date('i'),date('s') - 2,date('m'),date('d'),date('Y')));
			$notif = $this->db->query("SELECT * FROM stara_posts WHERE post_forusername='$me' AND poster_username!='$me' AND post_rdate > '$notedate' ORDER BY id DESC;")->result();
			$data['notifications'] = $notif;
			$this->load->view('part/gritter', $data);
		}
		elseif($wdyw == '11'){ // Load content / better than Pagination

			$w = $this->input->input_stream('w', TRUE);
			$c = $this->input->input_stream('c', TRUE);
			$i = $this->input->input_stream('i', TRUE);
			$me = $this->ion_auth->user()->row()->username;
			$ky = $this->ion_auth->user()->row()->ukey;

			$data['c_id']   = $c;
			$data['w_id'] 	= $w;

			if($w == '0')
				$data['timelines'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_category='$c' AND id < '$i' ORDER BY id DESC LIMIT 8;")->result();
			elseif($w == '1')
				$data['timelines'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_category='$c' AND post_answer < '1' AND id < '$i' ORDER BY id DESC LIMIT 8;")->result();
			elseif($w == '2')
			{
				$data['w'] 		   = $w;
				$data['timelines'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='6' AND post_followtype='0' AND poster_username='$me' AND poster_key='$ky' AND id < '$i' ORDER BY id DESC LIMIT 8;")->result();
			}
		
			$this->load->view(_OJEX_.'testtimeline', $data);
		}
		elseif($wdyw == '12'){ //profile detail
			$u = $this->input->input_stream('u', TRUE);
			$i = $this->input->input_stream('i', TRUE);
			$me = $this->ion_auth->user()->row()->username;
			$ky = $this->ion_auth->user()->row()->ukey;
			$cu = $this->db->query("SELECT * FROM users WHERE username='$u' LIMIT 1;")->row();
			if(!empty($cu))
			{
				$data['task'] 	 = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND poster_username='$u' AND poster_key='$i';")->num_rows();
				$data['tanswer'] = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND poster_username='$u' AND poster_key='$i';")->num_rows();
				$data['tfg'] 	 = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='7' AND poster_username='$u' AND poster_key='$i';")->num_rows();
				$data['tfr'] 	 = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='7' AND post_forusername='$u' AND post_forkey='$i';")->num_rows();
				$data['profile'] = $cu;
				$this->load->view(_OJEX_.'testprofile', $data);
			}
		}
		elseif($wdyw == '13'){ //post for username == follow who for
			$u = $this->input->input_stream('u', TRUE);
			$i = $this->input->input_stream('i', TRUE);
			$me = $this->ion_auth->user()->row()->username;
			$ky = $this->ion_auth->user()->row()->ukey;
			$cu = $this->db->query("SELECT * FROM users WHERE username='$u' AND ukey='$i' LIMIT 1;")->row();
			if(!empty($cu))
			{
				$cek = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='7' AND post_forusername='$u' AND post_forkey='$i' AND poster_username='$me' AND poster_key='$ky' LIMIT 1;")->row();
				if(empty($cek))
					$this->db->query("INSERT INTO stara_posts (wdyw,post_forusername,post_forkey,poster_username,poster_key) VALUES ('7','$u','$i','$me','$ky');");
				else
					$this->db->query("DELETE FROM stara_posts WHERE wdyw='7' AND post_forusername='$u' AND post_forkey='$i' AND poster_username='$me' AND poster_key='$ky'");
			}
		}

	}

	function user_upload_image(){ // upload image for answer box
                $config['upload_path']          = './uploads/images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5100;
                $config['max_width']            = 2024;
                $config['max_height']           = 2024;
				$config['encrypt_name']			= TRUE;
				$config['remove_spaces']		= TRUE;
				$config['detect_mime']			= TRUE;
				$config['mod_mime_fix']			= TRUE;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                    echo 'f';
                }
                else
                {
                    $data = $this->upload->data();
					$me = $this->ion_auth->user()->row()->username;
					$ky = $this->ion_auth->user()->row()->ukey;
					$insert = array('wdyw' => 8,
									'post_content' => $data['file_name'],
									'post_category' => 'image',
									'poster_username' => $me,
									'poster_key' => $ky
									);
					$this->db->insert('stara_posts', $insert);
                    echo '{"link":"'.base_url('uploads/images').'/'.$data['file_name'].'"}';
                }
	}

	function show_user_image(){
		$me = $this->ion_auth->user()->row()->username;
		$ky = $this->ion_auth->user()->row()->ukey;
		$data = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='8' AND post_category='image' AND poster_username='$me' AND poster_key='$ky';");
		$newdata = $data->result();
		foreach($newdata as $image){
			echo '[{"url":"'.base_url('uploads/images').'/'.$image->post_content.'"}]';
		}
	}

	function user_upload_file()
	{
                $config['upload_path']          = './uploads/files/';
                $config['allowed_types']        = 'pdf|doc|zip|txt';
                $config['max_size']             = 5100;
                $config['max_width']            = 2024;
                $config['max_height']           = 2024;
				$config['encrypt_name']			= TRUE;
				$config['remove_spaces']		= TRUE;
				$config['detect_mime']			= TRUE;
				$config['mod_mime_fix']			= TRUE;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                    echo 'f';
                }
                else
                {
                    $data = $this->upload->data();
					$me = $this->ion_auth->user()->row()->username;
					$ky = $this->ion_auth->user()->row()->ukey;
					$insert = array('wdyw' => 8,
									'post_content' => $data['file_name'],
									'post_category' => 'file',
									'poster_username' => $me,
									'poster_key' => $ky
									);
					$this->db->insert('stara_posts', $insert);
                    echo '{"link":"'.base_url('uploads/files').'/'.$data['file_name'].'"}';
                }
	}

	function questionf()
	{
		$wdyw = $this->uri->segment(2); //id
		$wdyh = $this->uri->segment(3); //url
		
		$ea['img']  = __IMAGES__;
		$ea['lib'] = __LIB__;
		$data = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND id='$wdyw' AND post_url='$wdyh';")->row();
		if(!empty($data)){
			$ea['dod'] = 'getdetailcont("'.$data->post_key.'","'.$data->post_title.'","'.$wdyh.'","'.$wdyw.'");';
			$ea['title'] = $data->post_title;

			$this->session->set_userdata('last-q', $data->post_title);
			$this->session->set_userdata('want_goto', base_url('question').'/'.$wdyw.'/'.$wdyh);

			$this->load->view('home', $ea);
		}
		else
			show_404();
	}

	function userProfile()
	{
		$wdyw = $this->uri->segment(2); //username
		$ea['img']  = __IMAGES__;
		$ea['lib'] = __LIB__;
		$data = $this->db->query("SELECT * FROM users WHERE username='$wdyw';")->row();
		if(!empty($data)){
			$ea['dod'] = "userProfile('".$data->username."','".$data->ukey."');";
			$ea['title'] = $data->first_name.' '.$data->last_name.' - Stara.id';

			$this->session->set_userdata('want_goto', base_url('profile').'/'.$wdyw);

			$this->load->view('home', $ea);
		}
		else
			show_404();
	}

/*	function do_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('identity', 'Identity', 'trim|required|min_length[3]|max_length[15]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[15]');
		if ($this->form_validation->run() == FALSE)
			echo 0;
		else 
		{
						$this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
						$this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

						if ($this->form_validation->run() == TRUE)
						{

							$remember = 0;

							if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
							{

								$valid_user = $this->ion_auth->user()->row();
								
								$this->session->set_userdata('id', $valid_user->id);
								$this->session->set_userdata('username', $valid_user->username);
								$this->session->set_userdata('email', $valid_user->email);
								$this->session->set_userdata('first_name', $valid_user->first_name);
								$this->session->set_userdata('last_name', $valid_user->last_name);
								$this->session->set_userdata('borndate', $valid_user->borndate);
								$this->session->set_userdata('gender', $valid_user->gender);
								$this->session->set_userdata('address', $valid_user->address);
								$this->session->set_userdata('image', $valid_user->image);
								$this->session->set_userdata('ukey', $valid_user->ukey);

								$now 		= date('y-m-d H:i:s');
								$me 		= $valid_user->username;
								$this->db->query("UPDATE users SET last_activity='$now' WHERE username='$me'");

								$this->index(1);
						}
							else
						{
							echo 01;
					}
				}
				else
					echo 0;
		}
	}*/

	function traditional_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('identity', 'Identity', 'trim|required|min_length[3]|max_length[15]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[15]');
		if ($this->form_validation->run() == FALSE)
			redirect(base_url());
		else 
		{
						$this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
						$this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

						if ($this->form_validation->run() == TRUE)
						{

							$remember = 0;

							if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
							{

								$valid_user = $this->ion_auth->user()->row();
								
								$this->session->set_userdata('id', $valid_user->id);
								$this->session->set_userdata('username', $valid_user->username);
								$this->session->set_userdata('email', $valid_user->email);
								$this->session->set_userdata('first_name', $valid_user->first_name);
								$this->session->set_userdata('last_name', $valid_user->last_name);
								$this->session->set_userdata('borndate', $valid_user->borndate);
								$this->session->set_userdata('gender', $valid_user->gender);
								$this->session->set_userdata('address', $valid_user->address);
								$this->session->set_userdata('image', $valid_user->image);
								$this->session->set_userdata('ukey', $valid_user->ukey);

								$now 		= date('y-m-d H:i:s');
								$me 		= $valid_user->username;
								$this->db->query("UPDATE users SET last_activity='$now' WHERE username='$me'");

								redirect($this->session->userdata('want_goto'));
						}
							else
						{
							redirect(base_url());
					}
				}
				else
					redirect(base_url());
		}
	}

	function do_logout()
	{
		$logout = $this->ion_auth->logout();

		// redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect(base_url());
	}

	public function do_signup()
    {
		$this->load->library('form_validation');
		        $tables = $this->config->item('tables','ion_auth');

		        $this->form_validation->set_rules('first_name','','required|alpha_numeric_spaces');
		        $this->form_validation->set_rules('username','','required|is_unique[users.username]');
		        $this->form_validation->set_rules('email', '', 'required|valid_email|is_unique[users.email]');
		        $this->form_validation->set_rules('password', '', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
		        $this->form_validation->set_rules('password_confirm', '', 'required');
				$this->form_validation->set_rules('borndate','','required');
				$this->form_validation->set_rules('gender','','required');

		        if ($this->form_validation->run() == TRUE)
		        {
		            $email    	= strtolower($this->input->input_stream('email', TRUE));
		            $identity 	= strtolower($this->input->input_stream('username', TRUE));
		            $password 	= $this->input->input_stream('password', TRUE);
		            $now 		= date('y-m-d H:i:s');
					$bd 		= $this->input->input_stream('borndate', TRUE);
					$gd 		= $this->input->input_stream('gender', TRUE);

		            $additional_data = array(
		                'first_name' 	=> $this->input->input_stream('first_name', TRUE),
		                'last_name' 	=> $this->input->input_stream('last_name', TRUE),
		                'last_activity' => $now,
		                'borndate'  	=> $bd,
		                'gender' 		=> $gd,
		                'identity' 		=> $email
		            );

		        }

		        if ($this->form_validation->run() == TRUE && $this->ion_auth->register($identity, $password, $email, $additional_data))
		        {
		        	$remember 			= 0;
					$sitesrc 			= base_url('lib') . '/';
		        	
		            if($this->ion_auth->login($identity, $password, $remember))
		            {
						
						$valid_user = $this->ion_auth->user()->row();
						//Set userdata

						$this->session->set_userdata('id', $valid_user->id);
						$this->session->set_userdata('username', $valid_user->username);
						$this->session->set_userdata('email', $valid_user->email);
						$this->session->set_userdata('first_name', $valid_user->first_name);
						$this->session->set_userdata('last_name', $valid_user->last_name);
						$this->session->set_userdata('borndate', $valid_user->borndate);
						$this->session->set_userdata('gender', $valid_user->gender);
						$this->session->set_userdata('address', $valid_user->address);
						$this->session->set_userdata('image', $valid_user->image);
						$this->session->set_userdata('ukey', $valid_user->ukey);

						redirect(base_url());
		        		
		            }
		        }
		        	else
		        {
		        	echo $this->input->input_stream('username', TRUE);
		        }
    }

}
