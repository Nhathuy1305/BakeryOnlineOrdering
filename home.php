 <style type="text/css">

 #home{
  width: 100%;
 }
 #home > tr {
  width: 50px;
 }
  .logo {
    height: 150px;
    width: 250px;
    margin-bottom: 5px;
  }


  .logo >  img{
    height: 100%;  
    width: 100%;

} 
.morecontent span {
    display: none;
}
.morelink {
    display: block;
}
 </style> 
  
    <!-- Projects Row -->
  <div class="row">
  <div class="col-md-12">
 
  
<?php   check_message(); ?>

<?php 

 $query = "SELECT * FROM `tblproduct` p  ,`tblcategory` c  WHERE   p.`CATEGID`=c.`CATEGID` AND PROQTY>0 ";
  $mydb->setQuery($query);
  $cur = $mydb->loadResultList(); 
  foreach ($cur as $result) { ?>
  <div class="col-lg-6" style="margin-bottom: 5px;">

     <a href="index.php?q=single-item&id=<?php echo $result->PROID; ?>"> 
    <div class="logo">
       <img class="img-hover " src="<?php echo web_root.'admin/products/'. $result->IMAGES; ?>" alt="<?php echo $result->CATEGORIES; ?>"> 
     <input type="hidden" name="" value="<?php echo $result->PROID; ?>" id="PROID">
    </div>
    </a> 
       <span class="more" >
           <?php echo $result->PRODESC  ; ?>  
      </span>
  </div>
 
 
<?php  }?>

 
    </div>
</div>  

 