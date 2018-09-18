<?php 
   $this->session->set_userdata('page_url',  $this->data->get_the_current_url());
?>
<footer id="footer" class="s-footer categories" role="contentinfo">
        <div class="-container g-column">
            <ul class="-menu g-row">

                <li class="-item g-col"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 1, link: 1 })" href="<?php echo base_url()?>about">Giới Thiệu</a>
                </li>
                <li class="-item g-col"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 1, link: 2 })" href="<?php echo base_url()?>contact">Liên Hệ</a>
                </li>
                <li class="-item g-col"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 1, link: 3 })" href="<?php echo base_url()?>policy">Chính Sách</a>
                </li>
                 <li class="-item g-col"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 1, link: 3 })" href="https://www.facebook.com/hoaluyenthidaihoc/">Facebook</a>
                </li>

                
            </ul>
            <div class="-toc g-row" id="footer-sites">
                
            </div>
            <div class="g-col -copyright" id="copyright">
                Copyright ©2017 develop by Pine Teams hoaluyenthi.vn
            </div>
            <div class="g-col -copyright _muted" id="svnrev">
                ver 2017.10.1.0001
            </div>

        </div>
</footer>
