
              <div class="ui grid">
                <div class="three wide column">
                  <img src="<?php echo $lib; ?>stara_logo.png" alt="" style="display:inline-block;">
                </div>
                <div class="nine wide column">
                  <div class="ui fluid icon input welcomesd">
                    <input id="main-search" placeholder="Cari pertanyaan iman mu disini" type="text" style="color:white;background-color:#6A1849;border-radius:20px;">
                    <i style="color:white;font-size:22px;" class="search icon"></i>
                  </div>
                </div>
                <div class="four wide column">

                  <?php if($this->session->userdata('username')) { ?>
                  <div style="float:right;">
                    <b style="color:white;line-height:3.7;vertical-align:top;font-size:17px;margin-right:10px;">Hi <?php echo $this->session->userdata('first_name'); ?> !</b>
<div tabindex="0" style="font-weight:bold;display:inline-block;">
  <img id="fcs" class="ayam" src="<?php echo base_url('uploads/images'); ?>/<?php echo $this->session->userdata('image'); ?>" style="width:65px;height:65px;display:inline-block;cursor:pointer;" alt="Your Profile Picture">&nbsp;
  <div tabindex="-1">
    <div class="usersettings">
      <div class="header">
        My Personalize
      </div>

      <div class="content">
        <a href="">
          <i class="user icon"></i>
          Profile
        </a>
        <a href="">
          <i class="mail outline icon"></i>
          Messages
        </a>
        <a href="">
          <i class="bar chart icon"></i>
          Stats
        </a>
        <a href="">
          <i class="setting icon"></i>
          Settings
        </a>
        <a href="<?php echo base_url('logout'); ?>">
          <i class="sign out icon"></i>
          Logout
        </a>
      </div>

    </div>
  </div>
</div>
<?php
$me    = $this->session->userdata('username'); 
$notif = $this->db->query("SELECT * FROM stara_posts WHERE post_forusername='$me' AND poster_username!='$me' ORDER BY id DESC LIMIT 4;")->result();
$tn = $this->db->query("SELECT * FROM stara_posts WHERE post_forusername='$me' AND poster_username!='$me';")->num_rows();
 ?>
      <div tabindex="0" class="notifblockdd">
        <div id="fcs" class="notifblock"><?php echo $tn; ?></div>
        <div class="notifcontent">
          <div class="header">
            Lihat Semua Notifikasi (<?php echo $tn; ?>) <i class="chevron right icon"></i>
            <div class="ui basic mini markreaded button">
              <i class="checkmark icon" style="font-size:9px;margin-top:-5px;"></i>
              <i class="align left icon"></i>
              Tandai Semua Sudah Dibaca
            </div>
          </div>
          <div class="content">
          <?php foreach($notif as $n){ 
$poster = $this->db->query("SELECT * FROM users WHERE username='$n->poster_username' LIMIT 1;")->row();
$q      = $this->db->query("SELECT * FROM stara_posts WHERE post_key='$n->post_childfrom' AND wdyw='0' LIMIT 1;")->row();
            ?>
          <?php if($n->post_followtype == '0'){ ?>
            <a onclick="detailbtn('<?php echo $q->post_key; ?>','<?php echo $q->post_title; ?>','<?php echo $q->post_url; ?>','<?php echo $q->id; ?>');">
              <img src="<?php echo base_url('uploads/images'); ?>/<?php echo $poster->image; ?>" alt="">
              <b class="notifinfo"><b><?php echo $poster->first_name; ?></b> Mengikuti pertanyaan anda <br>
                <div class="ui mini follow button">
                  Ikuti | 20
                </div>
              </b>
            </a>
          <?php } elseif($n->post_followtype == '1'){ ?>
            <a onclick="detailbtn('<?php echo $q->post_key; ?>','<?php echo $q->post_title; ?>','<?php echo $q->post_url; ?>','<?php echo $q->id; ?>');">
              <img src="<?php echo base_url('uploads/images'); ?>/<?php echo $poster->image; ?>" alt="">
              <b class="notifinfo"><b><?php echo $poster->first_name; ?></b> Menjawab pertanyaan anda <br>
                <div class="ui mini follow button">
                  Ikuti | 20
                </div>
              </b>
            </a>
          <?php } elseif($n->post_followtype == '2'){ 

            ?>
            <a onclick="detailbtn('<?php echo $q->post_key; ?>','<?php echo $q->post_title; ?>','<?php echo $q->post_url; ?>','<?php echo $q->id; ?>');">
              <img src="<?php echo base_url('uploads/images'); ?>/<?php echo $poster->image; ?>" alt="">
              <b class="notifinfo"><b><?php echo $poster->first_name; ?></b> Menjawab pertanyaan anda <br>
                <div class="ui mini follow button">
                  Ikuti | 20
                </div>
              </b>
            </a>
          <?php } elseif($n->post_followtype == '3'){ 
      $aw = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_key='$n->post_childfrom' LIMIT 1;")->row();
      $rq = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_key='$aw->post_childfrom' LIMIT 1;")->row();
      ?>
            <a onclick="detailbtn('<?php echo $rq->post_key; ?>','<?php echo $rq->post_title; ?>','<?php echo $rq->post_url; ?>','<?php echo $rq->id; ?>');">
              <img src="<?php echo base_url('uploads/images'); ?>/<?php echo $poster->image; ?>" alt="">
              <b class="notifinfo"><b><?php echo $poster->first_name; ?></b> Menjawab pertanyaan anda <br>
                <div class="ui mini follow button">
                  Ikuti | 20
                </div>
              </b>
            </a>
          <?php } elseif($n->post_followtype == '4'){ ?>
            <a onclick="detailbtn('<?php echo $q->post_key; ?>','<?php echo $q->post_title; ?>','<?php echo $q->post_url; ?>','<?php echo $q->id; ?>');">
              <img src="<?php echo base_url('uploads/images'); ?>/<?php echo $poster->image; ?>" alt="">
              <b class="notifinfo"><b><?php echo $poster->first_name; ?></b> Mendukung pertanyaan anda <br>
                <div class="ui mini follow button">
                  Ikuti | 20
                </div>
              </b>
            </a>
          <?php } elseif($n->post_followtype == '5'){
      $aw = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_key='$n->post_childfrom' LIMIT 1;")->row();
      $rq = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_key='$aw->post_childfrom' LIMIT 1;")->row();
           ?>
            <a onclick="detailbtn('<?php echo $rq->post_key; ?>','<?php echo $rq->post_title; ?>','<?php echo $rq->post_url; ?>','<?php echo $rq->id; ?>');">
              <img src="<?php echo base_url('uploads/images'); ?>/<?php echo $poster->image; ?>" alt="">
              <b class="notifinfo"><b><?php echo $poster->first_name; ?></b> Mendukung Jawaban anda <br>
                <div class="ui mini follow button">
                  Ikuti | 20
                </div>
              </b>
            </a>
          <?php } elseif($n->post_followtype == '6'){ 
      $aw = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_key='$n->post_childfrom' LIMIT 1;")->row();
      $rq = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_key='$aw->post_childfrom' LIMIT 1;")->row();
           ?>
            <a onclick="detailbtn('<?php echo $rq->post_key; ?>','<?php echo $rq->post_title; ?>','<?php echo $rq->post_url; ?>','<?php echo $rq->id; ?>');">
              <img src="<?php echo base_url('uploads/images'); ?>/<?php echo $poster->image; ?>" alt="">
              <b class="notifinfo"><b><?php echo $poster->first_name; ?></b> Menentang Jawaban anda <br>
                <div class="ui mini follow button">
                  Ikuti | 20
                </div>
              </b>
            </a>
          <?php } elseif($n->post_followtype == '7'){ ?>

          <?php } ?>
          <?php } ?>
          </div>

        </div>

      </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
