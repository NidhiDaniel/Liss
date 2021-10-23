<?php
include_once('head.php');
?>
<div class="gallery">
  <?php
  include_once('gallery_controller.php');

  $dis="select * from gallery order by imgorder asc";
   $stmt=mysqli_stmt_init($con) ;
if (!mysqli_stmt_prepare($stmt,$dis)) {
   	echo "SQL Statement failed";
   }  
   else {
   	mysqli_stmt_execute($stmt);
   	$result=mysqli_stmt_get_result($stmt);
   	while ($row=mysqli_fetch_assoc($result)) {
   	echo
		
'<a href='.$row["image"].' data-lightbox="mygallery" data-title='.$row["description"].'> <img  src='.$row["image"].'></a>';	
   	}
   }

?>
</div>
 <div>
 
 <div>
 	<iframe width="460" height="315" src="https://www.youtube-nocookie.com/embed/aKjdVSPeOxA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 	<iframe width="460" height="315" src="https://www.youtube-nocookie.com/embed/ddRxwDLDAK8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 </div>
</div>
<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript">
	jQuery(function($){
		var pages=$("#wrapper tr");

		var pagesize=2;
		var pagecount=Math.ceil(pages.length/pagesize);
		var startIndex=0;
		for(var i=1;i<=pagecount;i++){
			var selectedItems=pages.slice(startIndex,i*pagesize);
			selectedItems.wrapAll('<div class="page"></div>');
			startIndex=i* pagesize;
			$('#wrapper div.page:nth-child(1)'.addClass('showpage'));
			var lnk=$("<a href='#'/>").text(i);
			$('.navlinks').append(lnk);
			lnk.on('click',function(e){
				var pageno=$(this).text();
				$("#wrapper div.page").removeClass('showpage');
				$('#wrapper div.page:nth-child('+pageno+')').addClass('showpage')
			});


			
		}
	})
</script>

<?php
include_once('footer.php');
?>