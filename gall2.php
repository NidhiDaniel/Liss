<?php
include_once('head.php');
?>
<div id="colorlib-blog">

<article>
<div class="container">
<marquee scrollamount="10px" direction="right" behavior="alternate" >

<table>
<tr>
 <td><img style="height: 250px;width:300px;" src="images/blog2.jpg"></td>
 <td><img style="height: 250px;width:300px;" src="images/blog3.jpg"></td>
 <td><img style="height: 250px;width:300px;" src="images/blog4.jpg"></td>
 <td><img style="height: 250px;width:300px;" src="images/blog5.jpg"></td><br>
 <td><img style="height: 250px;width:300px;" src="images/blog6.jpg"></td>
</tr>
<tr>
 <td><img style="height: 250px;width:300px;" src="images/intgcd.jpg"></td>
 <td><img style="height: 250px;width:300px;" src="images/nairsblog.jpg"></td>
 <td><img style="height: 250px;width:300px;" src="images/sk6.jpg"></td>
 <td><img style="height: 250px;width:300px;" src="images/sk7.jpg"></td><br>
 <td><img style="height: 250px;width:300px;" src="images/sk8.jpg"></td>
</tr>

 </table>

 </marquee>
 
</div>
</article>
<div class="row">
				<div class="col-md-12 text-center">
					<ul class="pagination">
						<li><a href="#" onclick="goForward()">&laquo;</a></li>
						<li><a href="gallery.php">1</a></li>
						<li class="active"><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#" onclick="goBack()">&raquo;</a></li>
					</ul>
				</div>
			</div>
</div>
<?php
include_once('footer.php');
?>