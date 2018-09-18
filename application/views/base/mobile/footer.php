<?php 
    $this->session->set_userdata('page_url',  $this->data->get_the_current_url());
?>
<footer class="footer">
        <nav class="links">
            <a href="<?php echo base_url()?>about">Giới Thiệu</</a>
            <a href="<?php echo base_url()?>contact">Liên Hệ</a>
            <a href="<?php echo base_url()?>policy">Chính Sách</a>
            <a href="https://www.facebook.com/hoaluyenthidaihoc/">Facebook</a>
        </nav>

        <div class="app-cta">
           
        </div>

        <p class="copyrights">2017 Hóa Luyện Thi - Pine Teams, Inc</p>

</footer>

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107053607-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-107053607-1');
</script>
