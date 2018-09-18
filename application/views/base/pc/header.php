    <link rel="manifest" href="/manifest.json">
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(["init", {
          appId: "4c3a67d6-c4a3-4df1-b7dd-3b749d9501cf",
          autoRegister: false,
          notifyButton: {
            enable: true /* Set to false to hide */
          }
        }]);
    </script>
<div id="header">
    <br class="cbt">
    <div id="hlogo">
        <a href="<?php echo base_url()?>"><h1>Hóa Luện Thi</h1></a>
    </div>
    <div id="hmenus">
        <div class="nav mainnavs" role="navigation" aria-label="site navigation">
                    <nav id="primary_nav_wrap">
            <ul>
                <?php 
                    foreach($menu as $val)
                    {
                        $id=$val->id;
                    ?>
                <li><a href="<?php echo base_url()?><?php echo $val -> slug ?>.html">
                        <?php if($this->data->getTabActive() == $id) {?>
                            <span style = "text-transform: uppercase; color: red;">
                        <?php } else { ?>
                            <span style = "text-transform: uppercase;">
                        <?php } ?>
                            <?php echo $val->name; ?>
                        </span>
                    </a>
                    <ul>
                        <?php 
                        foreach($menu_sub as $val_sub)
                        {
                            $id_sub=$val_sub->id;
                            $type =$val_sub->menu_type;
                            if($type == $id){
                        ?>

                        <li><a href="<?php echo base_url();?><?php echo $val -> slug;?>/<?php echo $val_sub -> slug; ?>.html"><?php echo $val_sub->name; ?></a>
                            <ul>
                            <?php 
                            $menuSubDetail = $this->data->getSubDetail($id_sub);
                            if(count($menuSubDetail) > 1) {
                            foreach($menuSubDetail as $val_sub_detail)
                            {
                            ?>
                                <li><a href="<?php echo base_url();?><?php echo $val -> slug; ?>/<?php echo $val_sub -> slug;?>/<?php echo $val_sub_detail -> detail_type_slug; ?>.html"><?php echo $val_sub_detail->detail_type_name; ?></a></li>
                            <?php } } ?>
                            </ul>
                        </li>
                        <?php } } ?>
                    </ul>
                </li>
                
                <?php  } ?>
                <li>
                    <a href="<?php echo base_url();?>users">
                        <?php if($this->data->getTabActive() == 101) {?>
                            <span style = "color: red;">
                        <?php } else { ?>
                            <span>
                        <?php } ?>
                        NGƯỜI DÙNG
                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>question/ask">
                        <?php if($this->data->getTabActive() == 102) {?>
                            <span style = "color: red;">
                        <?php } else { ?>
                            <span>
                        <?php } ?>
                        ĐẶT CÂU HỎI
                    </a>
                </li>
            </ul>
        </nav>
            
        </div>
       
    </div>
</div>