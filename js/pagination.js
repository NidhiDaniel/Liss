'use strict';

var numberOfItems=$("#loop .list-group").length;
var limitPerPage=2;
$("#loop .list-group:gt("+(limitPerPage-1)+")").hide();
var totalPages=Math.round(numberOfItems/limitPerPage);
$(".pagination").append("<li><a href='javascript:void(0)'>"+1+"</a></li>");
for (var i=2; i <= totalPages; i++) {
	$(".pagination").append("<li><a href='javascript:void(0)' class='current-page'>"+i+"</a></li>");
}
$(".pagination").append("<li><a href='javascript:void(0)'>&raquo;</a></li>");
$(".pagination li.current-page").on("click",function(){
	alert('user clicked on pagenumber');
});