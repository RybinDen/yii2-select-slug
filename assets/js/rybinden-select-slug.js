$("#slug-block").hide();
$("#title-input").change(function() {
$("#results").empty();
$("#slug-input").val("");
var txt1 = $("#title-input").val();
if(txt1 != ""){
//отправляем запрос для показа подсказок
$.ajax({
url: "slug",
type: "POST",
data: "text="+txt1,
success: function(text){
$("#slug-block").show();
var items = $.parseJSON(text);
$.each(items, function(index, value){
if(index ==1){
$("#results").append("<button id=\"slug-en\" data-slug=\""+ value +"\">"+ value+"</button>");
}else{
$("#results").append("<button id=\"slug-ru\" data-slug=\""+ value +"\">"+value+"</button>");
}
});
// если в data-* массив, использовать split(',')
$("#slug-en").click(function(){
$("#slug-input").val($(this).data("slug"));
});
$("#slug-ru").click(function(){
$("#slug-input").val($(this).data("slug"));
});
}});
}//заголовок пустой, ничего не делаем
});
