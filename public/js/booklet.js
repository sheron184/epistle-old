//variables
position = { x: 0, y: 0 }
const dropbox = document.getElementById("dropbox");
let selected_textnode_id = "";
let saveBtn = document.getElementById("savebook");

//Update the HTML content
function updateHtml(){
  var domParser = new DOMParser();
  var htmlContent = domParser.parseFromString(dropbox.innerHTML,'text/html');
  var divs = $(htmlContent).find("div");

  $(divs).each(function(){
    $(this).css("position","static");
  })
  $("#html_content").val(htmlContent.documentElement.innerHTML);
}
//load existing booklet
var html = $("#bookletHtml").val();
$(html).appendTo("#dropbox");
updateHtml();

//save booklet
saveBtn.addEventListener('click',(event)=>{
  var html = $("#html_content").val();
  var id = $(event.target).attr("bookid");
  token = document.querySelector('meta[name="csrf-token"]').content;
  const xhttp = new XMLHttpRequest();

  xhttp.open("POST","http://localhost:8000/savebook",true);
  xhttp.setRequestHeader("X-CSRF-TOKEN", token); 
  xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhttp.onload = ()=>{
    if(xhttp.response){
      alert("Saved successfully!");
    }else{
      alert("Error occured!");
    }
  }
  
  xhttp.send(`id=${id}&html=${html}`);
})

//my events
$("#rectangle").click(function(){
  var node = `<div style='width:100px;height:100px;border:1px solid;' class='component textnode dropped'></div>`;
  $(node).appendTo(dropbox);
})
$("#important").click(function(){
  var node = `<div style='width:100px;height:100px;background-color: crimson;
  color: #fff;
  border: 2px solid gold;' class='component textnode dropped'></div>`;
  $(node).appendTo(dropbox);
})
$(".dropped").click(function(){
  position = {x:0,y:0}
})
$("#text").click(function(){
  var id = `${Math.floor(Math.random() * 9999) + 1000}`;
  var txt_node = `<div id='${id}' class='textnode component dropped'><div><span class='placeholder'>Start typing..</span><span class='textval' style='line-break:anywhere;'></span></div></div>`;
  $(txt_node).appendTo(dropbox);
})
$(document).on("click",".textnode",function(){
  $(this).find("div").find(".placeholder").empty();
  selected_textnode_id = $(this).attr("id");
})
$(document).keydown(function(e){
  if(selected_textnode_id != ""){
    var span = $(`#${selected_textnode_id}`).find("div").find(".textval");
    var spanText = $(span).text();
    //if the backspace key was pressed
    if(e.keyCode == 8 || e.charCode == 8){
      $(span).text(spanText.substring(0,spanText.length-1));
    }else{
      $(span).text(spanText+e.key);
    }
  }
  updateHtml();
})


