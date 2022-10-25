//const { update } = require("lodash");

//variables
position = { x: 0, y: 0 }
const dropbox = document.getElementById("dropbox");
let selected_component_id = "";
let saveBtn = document.getElementById("savebook");
var components;

//Update the HTML content
function updateHtml(){
  components = document.querySelectorAll(".component");
  var domParser = new DOMParser();
  var htmlContent = domParser.parseFromString(dropbox.innerHTML,'text/html');
  var divs = $(htmlContent).find("div");
  $(divs).each(function(){
    $(this).css("position","static");
  })
  $("#html_content").val(htmlContent.body.innerHTML);
}
//load existing booklet
var html = $("#bookletHtml").val();
$(html).appendTo("#dropbox");
updateHtml();

//Save booklet
saveBtn.addEventListener('click',(event)=>{
  var sendhtml = $("#html_content").val();
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
  xhttp.send(`id=${id}&html=${sendhtml}`);
})

// ++++++++++++++++++++++++++++++++++++++++++++++++ ADD COMPONENTS ++++++++++++++++++++++++++++++++++++++++++++++++++++ //

// CONTAINER
$("#rectangle").click(function(){
  var id = `${Math.floor(Math.random() * 9999) + Date.now()}`;
  var node = `<div id='${id}' style='width:100px;height:100px;border:1px solid;' class='component textnode dropped'></div>`;
  $(node).appendTo(dropbox);
  updateHtml();
})
//IMPORTANT NOTE
$("#important").click(function(){
  var id = `${Math.floor(Math.random() * 9999) + Date.now()}`;
  var node = `<div id='${id}' style='width:200px;height:50px;background-color: #ccf9e2;border-left: 3px solid rgb(6, 196, 6);
  color: green;border-radius:5px;padding:10px;box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
  ' class='component dropped' contenteditable="true"></div>`;
  $(node).appendTo(dropbox);
  updateHtml();
})
//TEXT NODE
$("#text").click(function(){
  var id = `${Math.floor(Math.random() * 9999) + Date.now()}`;
  var txt_node = `<div id='${id}' class='textnode component dropped'><p class="h-100 p-2" contenteditable="true"></p></div>`;
  $(txt_node).appendTo(dropbox);
  updateHtml();
})
//TEXT EDITOR
$("#editor").click(function(){
  var id = `${Math.floor(Math.random() * 9999) + Date.now()}`;
  var editor_node = `<div id='editor${id}' class='txteditor component'></div>`;
  $(editor_node).appendTo(dropbox);
  setUpEditor(id);
  updateHtml();
})
//************************************************** COMPONENTS ENDS ************************************************* */

/* ========= GLOBAL FUNCTIONS ========== */

function setUpEditor(id){
  var editor = new RichTextEditor(`#editor${id}`);
  editor.attachEvent("change", function () {  
    getEditorData(editor);
    updateHtml();    
    var textCount = editor.getPlainText().trim().length;      
    document.title = "textCount:" + textCount;      
});     
}
function getEditorData(editor){
  console.log(editor.getHTMLCode());    
}
function removeAllSelections(){
  $(components).each(function(){
    $(this).removeClass("selected-border");
  })
  updateHtml();
}
function delComp(){
  $(`#${selected_component_id}`).remove();
  updateHtml();
}
/* ------------------------------------------ */

//Event triggers
$(document).on("click",".component",function(){
  $(components).each(function(){
    if($(this).hasClass("selected-border")){
      $(this).removeClass("selected-border");
    }
  })
  $("#delcomp").prop("disabled",false).removeClass("disabled");
  $(this).addClass("selected-border");
  selected_component_id = $(this).attr("id");
})
$(".dropped").click(function(){
  position = {x:0,y:0}
})
$(document).on("keyup",function(){
  updateHtml();
})
$(document).on("mouseover",".textnode",function(){
  $(this).css("cursor","auto");
  updateHtml();
})
$("#dropbox").click(function(){
  removeAllSelections();
})
$(document).on("keyup",".textnode",function(){
  console.log("sadasdas")
  updateHtml();
})
$(".textnode").keyup(function(){
  updateHtml();
})

