<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box" >
        <div id="logo">
          <h1>
            <a href="<?php echo base_url();?>Home" style="font-family: serif;"> FYMIE</a>
          </h1>
        </div>
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="<?php echo base_url();?>assets/images/logo.png" style="width:200px; max-width:300px;">
                            </td>
                            
                            <td>
                                Invoice #: <?php echo(rand(100,1000)); ?><br>
                                Created: <?php echo date("d-m-Y");?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                FYMIE<br>
                                Medicaps University<br>
                                A.B. Road, Pigdamber, Rau<br> 
                                Indore, Madhya Pradesh 453331
                            </td>
                            <?php 
	                        $user_id= $_SESSION['user_id'];
                            $user_name= $this->Main_model->get_user_name($user_id);
                             ?>
                            <td>
                            <?php  echo $user_name['userNameData']['name'] ;?><br>
                            <?php  echo $user_name['userNameData']['email_id'] ;?><br>
                            <?php  echo $user_name['userNameData']['mobile_no'] ;?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                    Price 
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Cash
                </td>
                
                <td>
                    <?php //print_r($reciptData); 
                    echo $reciptData['price'];
                    ?>
                </td>
            </tr>
            <br>
            <br>
            <tr class="total">
                <td></td>
                
                <td>
                   Total:<?php  echo $reciptData['price']; ?>
                </td>
            </tr>
        </table>
        
				<div class="row" style="text-align: center;">
				<div class="col-lg-12">
                <input type="button" onclick="window.print()" value="Save to PDF" />
				</div>
				</div>
    </div>

</body>
</html>