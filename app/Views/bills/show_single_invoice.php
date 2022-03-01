<!doctype html>
<html dir="ltr" lang="en" class="no-js">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width" />

	<title><?php echo $this->data['page_title']; ?></title>
    <!--favicon-->
	<link rel="icon" href="<?php echo img_assets_url(); ?>favicon-32x32.png" type="image/png" />

	<link rel="stylesheet" href="<?php echo invoice_assets_url(); ?>reset.css" media="all" />
	<link rel="stylesheet" href="<?php echo invoice_assets_url(); ?>style.css" media="all" />
	<link rel="stylesheet" href="<?php echo invoice_assets_url(); ?>print.css" media="print" />

	<!-- give life to HTML5 objects in IE -->
	<!--[if lte IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<!-- js HTML class -->
	<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
</head>
<body>

    <?php 
        // IF THE INVOICE IS VENTE INVOICE THEN
        if($this->data['single_invoice'][0]['invoice_type'] == 'FV'){
    ?>
                    
            <div>
                <!-- Float Print button here -->
                <a href="#" class="float" onclick="printDiv('invoice')" title="Imprimer la facture">
                    <i class="fa fa-plus my-float"><img src="<?php echo invoice_assets_url(); ?>img/print.png" width="60"/></i>
                </a>
                </div>


            <!-- begin markup -->



            <div id="invoice" class="new"><!-- INVOICE -->

                <header id="header"><!-- HEADER -->
                    <div class="invoice-logo"></div><!-- LOGO -->
                
                    <div class="invoice-from"><!-- HEADER FROM -->
                        <div class="org"><b>IFU : 0202112473644 - RCCM RB/ABC/21 B 3931 - Siège : Bénin, Cotonou, Agla</b></div>
                        <div class="org">Téléphone: <b>+229 69 93 67 67</b> </div>
                            <a class="email" href="mailto:contact@myahitcompany.com">E-mail: <b>contact@myahitcompany.com</b></a>
                    </div><!-- HEADER FROM -->

                </header><!-- HEADER -->
                <!-- e: invoice header -->
            
                <div class="this-is-line">
                    <div class="this-is" style="font-size:25px!important;">FACTURE</div><!-- DOC TITLE -->
                </div>

                <section id="info-to"><!-- TO SECTION -->

                    <div class="invoice-to-title">Info Client</div><!-- INVOICE TO -->

                    <div class="invoice-to">
                        <div class="to-org"><?php echo $this->data['single_invoice'][0]['first_name'].' '.$this->data['single_invoice'][0]['last_name'] ?></div>
                        <div class="to-phone"><?php echo $this->data['single_invoice'][0]['phone_number'] ?></div>
                        <a class="to-email" href="mailto:<?php echo $this->data['single_invoice'][0]['email'] ?>">
                        <?php echo $this->data['single_invoice'][0]['email'] ?></a>
                    </div> <!-- INVOICE TO -->

                    <div class="invoice-meta">
                        <div class="meta-uno invoice-number">ID Facture:</div>
                        <div class="meta-duo"><?php echo $this->data['single_invoice'][0]['invoice_code'] ?></div>
                        <div class="meta-uno invoice-date">Date:</div>
                        <div class="meta-duo"><?php echo $this->data['single_invoice'][0]['date'].' '.$this->data['single_invoice'][0]['hour']  ?></div>
                        <!--<div class="meta-uno invoice-due">Total:</div>
                        <div class="meta-duo"><?php echo $this->data['single_invoice'][0]['total'] ?> FCFA</div>-->
                        <div class="meta-uno invoice-due">Vendeur:</div>
                        <div class="meta-duo"><strong><?php echo $this->session->userdata('logged_in_user_details')->first_name.' '.$this->session->userdata('logged_in_user_details')->last_name; ?></strong></div>
                    </div>

                </section><!-- TO SECTION -->

                <section class="invoice-financials" style="margin-top:-60px !important;"><!-- FINANCIALS SECTION -->

                    <div class="invoice-items" ><!-- INVOICE ITEMS -->
                        <table>
                            <thead>
                                <tr>
                                    <th class="col-1">Désignations</th>
                                    <th class="col-2">Quantités</th>
                                    <th class="col-3">Prix unitaire(TTC)</th>
                                    <th class="col-4">Montants</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($this->data['items_on_single_invoice'] as $item){
                                        if($item['item_tax'] > 0){
                                ?>
                                            <tr>
                                                <th>
                                                    <h1>
                                                        <?php 
                                                            //if($item['item_taxable_group_id'] == 'D' or $item['item_taxable_group_id'] == 'A'){
                                                                echo $item['item_name'].' - '.$item['taxable_group_code'].'<br/>T.S = '.$item['item_quantity'].' x '.(round($item['item_tax']/$item['item_quantity'])).' x '.$item['item_taxable_group_value'];
                                                            //}
                                                            //else{
                                                                //echo $item['item_name'].' - '.$item['taxable_group_code'].'<br/>T.S = '.$item['item_quantity'].' x '.(round($item['item_tax']/$item['item_quantity'])).' x '.$item['item_taxable_group_value'];
                                                            //}
                                                        ?>
                                                    </h1>
                                                </th>
                                                <td style="text-align:right;padding-right:10px !important;"><?php echo $item['item_quantity'].'<br/>-'; ?></td>
                                                <td style="text-align:right;padding-right:10px !important;"><?php echo $item['item_price'].'<br/>-'; ?></td>
                                                <?php 
                                                            //if($item['item_taxable_group_id'] == 'D' or $item['item_taxable_group_id'] == 'A'){
                                                ?>
                                                        <td style="text-align:right;padding-right:10px !important;"><?php echo $item['item_total'].'<br/>'.round($item['item_quantity'] * (round($item['item_tax']/$item['item_quantity'])) * $item['item_taxable_group_value']); ?></td>
                                                <?php
                                                            //}
                                                            //else{
                                                ?>
                                                        <!--<td style="text-align:right;padding-right:10px !important;"><?php echo $item['item_total'].'<br/>'.round($item['item_quantity'] * (round($item['item_tax']/$item['item_quantity'])) * $item['item_taxable_group_value']); ?></td>-->
                                                <?php
                                                            //}
                                                ?>
                                            </tr>
                                <?php
                                        }
                                        else{
                                ?>
                                            <tr>
                                                <th> <h1> <?php  echo $item['item_name'].' - '.$item['taxable_group_code']; ?></h1></th>
                                                <td style="text-align:right;padding-right:10px !important;"><?php echo $item['item_quantity'] ?></td>
                                                <td style="text-align:right;padding-right:10px !important;"><?php echo $item['item_price'] ?></td>
                                                <td style="text-align:right;padding-right:10px !important;"><?php echo $item['item_total'] ?></td>
                                            </tr>
                                <?php
                                        }
                                }
                                ?>
                                
                            </tbody>
                            
                        </table>
                    </div><!-- INVOICE ITEMS -->
                    
                    <div class="lower-block"><!-- TERMS&PAYMENT INFO -->

                        <div class="invoice-totals"><!-- TOTALS -->
                            <table>
                                <tbody>
                                    <tr>
                                        <th>TOTAL</th>						
                                        <td style="text-align:right;padding-right:10px !important;"><?php echo '*'.$this->data['single_invoice'][0]['total'] ?></td>
                                    </tr>

                                    <?php 
                                        // TOTAL HT AND TVA FOR TAXABLE GROUP B
                                        if($this->data['single_invoice'][0]['hab'] > 0){
                                    ?>
                                            <tr>
                                                <th style="width:50%;">T. H.T. [B] 18%</th>						
                                                <td style="text-align:right;padding-right:10px !important;"><?php echo '*'.($this->data['single_invoice'][0]['hab'] - $this->data['single_invoice'][0]['ts']); ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:50%;">T. TVA [B] 18%</th>						
                                                <td style="text-align:right;padding-right:10px !important;"><?php echo '*'.($this->data['single_invoice'][0]['tab'] - $this->data['single_invoice'][0]['hab']) ;?></td>
                                            </tr>
                                    <?php 
                                        }
                                    ?>

                                    <?php 
                                        // TOTAL HT AND TVA FOR TAXABLE GROUP C
                                        if($this->data['single_invoice'][0]['tac'] > 0){
                                    ?>
                                            <tr>
                                                <th style="width:50%;">T. H.T. [C] 0%</th>						
                                                <td style="text-align:right;padding-right:10px !important;"><?php echo '*'.$this->data['single_invoice'][0]['tac'] ; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:50%;">T. TVA [C] 0%</th>						
                                                <td style="text-align:right;padding-right:10px !important;"><?php echo '*'.($this->data['single_invoice'][0]['tac'] - $this->data['single_invoice'][0]['tac']) ;?></td>
                                            </tr>
                                    <?php 
                                        }
                                    ?>

                                    <?php 
                                        // TOTAL HT AND TVA FOR TAXABLE GROUP D
                                        if($this->data['single_invoice'][0]['had'] > 0){
                                    ?>
                                            <tr>
                                                <th style="width:50%;">T. H.T. [D] 18%</th>						
                                                <td style="text-align:right;padding-right:10px !important;"><?php echo '*'.$this->data['single_invoice'][0]['had'] ; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="width:50%;">T. TVA [D] 18%</th>						
                                                <td style="text-align:right;padding-right:10px !important;"><?php echo '*'.$this->data['single_invoice'][0]['vad'] ;?></td>
                                            </tr>
                                    <?php 
                                        }
                                    ?>

                                    <?php 
                                        // AIB SPECIFICATION
                                        if($this->data['single_invoice'][0]['aib'] > 0){
                                    ?>
                                            <tr>
                                                <th style="width:50%;">AIB - <?php echo $this->data['single_invoice'][0]['aib_percentage'].'%'; ?></th>						
                                                <td style="text-align:right;padding-right:10px !important;"><?php echo '*'.$this->data['single_invoice'][0]['aib'] ; ?></td>
                                            </tr>
                                    <?php 
                                        }
                                    ?>

                                    <?php 
                                        // TS SPECIFICATION
                                        if($this->data['single_invoice'][0]['ts'] > 0){
                                    ?>
                                            <tr>
                                                <th style="width:50%;">TOTAL TS</th>						
                                                <td style="text-align:right;padding-right:10px !important;"><?php echo '*'.$this->data['single_invoice'][0]['ts'] ; ?></td>
                                            </tr>
                                    <?php 
                                        }
                                    ?>

                                    <?php 
                                        // TOTAL HT AND TVA FOR TAXABLE GROUP A
                                        if($this->data['single_invoice'][0]['taa'] > 0){
                                    ?>
                                            <tr>
                                                <th>EXONÉRÉS</th>						
                                                <td style="text-align:right;padding-right:10px !important;"><?php echo '*'.$this->data['single_invoice'][0]['taa'] ; ?></td>
                                            </tr>
                                    <?php 
                                        }
                                    ?>
                                    
                                    <tr>
                                        <th class="col-1" style="font-size:14px;">TOTAL (Fcfa)</th>						
                                        <td style="font-size:20px;text-align:right;padding-right:10px !important;" class="col-2"><?php echo $this->data['single_invoice'][0]['total'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                
                            <!--<div class="invoice-pay">
                                <h5>Pay with...</h5>
                                <ul>
                                    <li>
                                        <a href="#" class="gcheckout">Checkout with Google</a>
                                    </li>
                                    <li>
                                        <a href="#" class="acheckout">Checkout with Amazon</a>
                                    </li>
                                </ul>
                            </div>-->
                        </div><!-- TOTALS -->

                        <div class="info">
                            <div class="info-time"><strong>Mode de paiement:</strong> <?php echo $this->data['single_invoice'][0]['payment_method'] ?> </div>
                            
                            <?php if(isset($this->data['single_invoice'][0]['qrCode'])){
                            ?>

                                <div class="info-payment"><strong>MECef/DGI</strong><br>
                                    <strong>Code MECef : </strong> <?php echo $this->data['single_invoice'][0]['codeMECeFDGI'] ?> <br/>
                                    <strong>NIM : </strong> <?php echo $this->data['single_invoice'][0]['nim'] ?> <br/>
                                    <strong>Compteurs : </strong> <?php echo $this->data['single_invoice'][0]['counters'] ?> <br/>
                                    <strong>Date & Heure : </strong> <?php echo $this->data['single_invoice'][0]['date'].' '.$this->data['single_invoice'][0]['hour'] ?> <br/><br/>
                                    <p>
                                        <img src="<?php echo img_assets_url().'qrcodes/'.$this->data['single_invoice'][0]['codeMECeFDGI'].'.png'; ?>" />
                                    </p>
                                </div>

                            <?php
                            }
                            ?>
                            
                        
                            <div class="info-terms">
                            <!--<strong>Terms & Conditions</strong><br>
                Sime omnimag natibus es nis eum re prepuditest, tem que numqui doluptas sinvel mod eos rem fuga. Ribus es ailiqui il maiori sit unti sit et lam quam volum-->
                            </div>
                        </div>

                        
                        <!--<div class="invoice-signature">  <br>
                            <strong><?php echo $this->session->userdata('logged_in_user_details')->first_name.' '.$this->session->userdata('logged_in_user_details')->last_name; ?></strong> 
                        </div>-->
                        <!--<div class="invoice-paynow"><a href="#">Pay Now</a></div>-->

                    </div><!-- TERMS&PAYMENT INFO -->
                    
                </section><!-- FINANCIALS SECTION -->

                <footer id="footer">  
                    <!--<div class="footer-mail">stevenson@yourcompany.com</div>
                    <div class="footer-phone">+75 754 234 908</div>
                    <div class="footer-web">www.yourcompany.com</div>-->
                    <p style="color:white;padding-top:5px;">
                        <b>MYAH SOFT INVOICE | www.myahitcompany.com</b>
                    </p>
                </footer> 

            </div><!-- INVOICE -->
    <?php
        }
        // ELSE IF THE INVOICE IS AVOIR INVOICE THEN
        elseif($this->data['single_invoice'][0]['invoice_type'] == 'FA'){
            $this->load->view('invoice/show_single_avoir_invoice.php');
        }
    ?>

<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

</body>
</html>