<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Anil Labs - Codeigniter mail templates</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<div style ="width: 600px; background-color: #f2f2f2; padding-bottom: 10px; padding-top: 20px;">
    <div style ="width: 540px; background-color: #fff; margin-left: 28px; padding-bottom: 10px;">
       <div style="font-size: 26px;font-weight: 700;letter-spacing: -0.02em;line-height: 32px;color: #41637e;font-family: sans-serif;text-align: center; border-bottom: 3px solid #00b7f1" align="center" id="emb-email-header">
            <img style="padding-bottom: 10px; width: 200px" src="http://www.aduba.vn/public/img/logo_new.png" alt="logo">
       </div>
        <div style ="margin: 10px;">
        	<div style="margin-top: 0;color: #565656;font-family: Arial;font-size: 15px;line-height: 25px;">Chào <span style ="color: #1aa02b; font-weight: bold;"><?php echo $userName;?>,</span></div> 
        	<div style="margin-top: 0;color: #565656;font-family: Arial;font-size: 15px;line-height: 25px;">
        		 <?php echo $desc;?> 
        	</div>
            </div>
        </div>
    </div>
    <div style ="font-family: Arial,Helvetica,sans-serif; font-size: 11px; line-height: 18px; color: #4b8da5; padding: 10px 0; margin: 0px; font-weight: normal; margin-left: 28px">
        Quý khách nhận được email này vì đã mua hàng tại aduba.vn.<br>
Để chắc chắn luôn nhận được email thông báo, xác nhận mua hàng từ aduba.vn, quý khách vui lòng thêm địa chỉ suppot@aduba.vn vào số địa chỉ (Address Book, Contacts) của hộp email. <br>
Văn phòng aduba.vn: 52 Út Tịch, phường 4, quận Tân Bình, thành phố Hồ Chí Minh, Việt Nam <br>
    </div>
</body>
</html>