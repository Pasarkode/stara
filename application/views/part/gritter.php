<?php foreach($notifications as $n){ 
$poster = $this->db->query("SELECT * FROM users WHERE username='$n->poster_username' LIMIT 1;")->row();
$q      = $this->db->query("SELECT * FROM stara_posts WHERE post_key='$n->post_childfrom' AND wdyw='0' LIMIT 1;")->row();
?>
            <script type="text/javascript">
                play_sound('notif'); 
                var k = "'";
                $(document).ready(function () {
        var unique_id = $.gritter.add({
        <?php if($n->post_followtype == '0'){ ?>
            title: 'Notifikasi Baru!'
        ,   text: '<b><?php echo $poster->first_name; ?></b> Mengikuti pertanyaan anda <a onclick="detailbtn('+k+'<?php echo $q->post_key; ?>'+k+','+k+'<?php echo $q->post_title; ?>'+k+','+k+'<?php echo $q->post_url; ?>'+k+','+k+'<?php echo $q->id; ?>'+k+');" style="color:#B72B6A">Lihat Pertanyaan</a>.'
        <?php } elseif($n->post_followtype == '1'){ 
          $ctc = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='6' AND post_followtype='1' AND post_childfrom='$n->post_childfrom';")->num_rows();
          ?>
            title: '<?php echo $poster->first_name; ?>'
        ,   text: '<b>dan <?php echo $ctc-1; ?> orang lainnya</b> Menjawab pertanyaan anda <a onclick="detailbtn('+k+'<?php echo $q->post_key; ?>'+k+','+k+'<?php echo $q->post_title; ?>'+k+','+k+'<?php echo $q->post_url; ?>'+k+','+k+'<?php echo $q->id; ?>'+k+');" style="color:#B72B6A">Lihat</a>.'
        <?php } elseif($n->post_followtype == '2'){ ?>
            title: '2 Notifikasi Baru!'
        ,   text: '<b><?php echo $poster->first_name; ?></b> Menjawab pertanyaan anda <a href="<?php echo base_url('question').'/'.$q->id.'/'.$q->post_url; ?>" style="color:#B72B6A">BlackTie.co</a>.'
        <?php } elseif($n->post_followtype == '3'){ 
      $aw = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_key='$n->post_childfrom' LIMIT 1;")->row();
      $rq = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_key='$aw->post_childfrom' LIMIT 1;")->row();?>
            title: 'Notifikasi Baru!'
        ,   text: '<b><?php echo $poster->first_name; ?></b> Mengomentari Jawaban anda <a href="<?php echo base_url('question').'/'.$rq->id.'/'.$rq->post_url; ?>" style="color:#B72B6A">Lihat</a>.'
        <?php } elseif($n->post_followtype == '4'){ ?>
            title: 'Notifikasi Baru!'
        ,   text: '<b><?php echo $poster->first_name; ?></b> Mendukung pertanyaan anda <a onclick="detailbtn('+k+'<?php echo $q->post_key; ?>'+k+','+k+'<?php echo $q->post_title; ?>'+k+','+k+'<?php echo $q->post_url; ?>'+k+','+k+'<?php echo $q->id; ?>'+k+');" style="color:#B72B6A">Lihat</a>.'
        <?php } elseif($n->post_followtype == '5'){ 
      $aw = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_key='$n->post_childfrom' LIMIT 1;")->row();
      $rq = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_key='$aw->post_childfrom' LIMIT 1;")->row(); ?>
            title: 'Notifikasi Baru!'
        ,   text: '<b><?php echo $poster->first_name; ?></b> Mendukung Jawaban anda <a href="<?php echo base_url('question').'/'.$rq->id.'/'.$rq->post_url; ?>" style="color:#B72B6A">Lihat</a>.'
        <?php } elseif($n->post_followtype == '6'){ 
      $aw = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='1' AND post_key='$n->post_childfrom' LIMIT 1;")->row();
      $rq = $this->db->query("SELECT * FROM stara_posts WHERE wdyw='0' AND post_key='$aw->post_childfrom' LIMIT 1;")->row();
      ?>
            title: 'Peringatan!'
        ,   text: '<b><?php echo $poster->first_name; ?></b> Menentang Jawaban anda <a href="<?php echo base_url('question').'/'.$rq->id.'/'.$rq->post_url; ?>" style="color:#B72B6A">Lihat</a>.'
        <?php } ?>

        ,   image: '<?php echo base_url('uploads/images'); ?>/<?php echo $poster->image; ?>'
        ,   sticky: true
        ,   time: ''
        ,   class_name: 'gritter-light'});
                
                 setTimeout(function(){

                 $.gritter.remove(unique_id, {
                 fade: true,
                 speed: 'slow'
                 });

                 }, 5200)
                return false;
                });
            </script>
<?php } ?>