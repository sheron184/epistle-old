function process(input,txtarea){
    var text = $(`.${txtarea}`).val();
    //console.log(input);
    var steps = text.split(',');
    var object_str = JSON.stringify(steps);
    $(`#${input}`).val(object_str);
}

//update textarea
function updateTextarea(id){
    var roadmap = $(`#${id}`).val();
    var object = JSON.parse(roadmap);
    var obj_string = "";
    $(`.${id}`).empty();
    for(var i=0;i<object.length;i++){
        var order = i+1;
        var node = `<div class='p-2 border mb-2 d-flex align-items-center' style='order:${order}'><h6 class='mb-0'>${object[i]} - ${i+1}</h6> <div class='d-flex flex-grow-1 justify-content-end'><a href="#" class='down text-warning'><i class="fa-solid fa-circle-down"></i></a> <a href="#" class='up ml-2 text-success'><i class="fa-solid fa-circle-up"></i></a> <a class='del text-danger ml-2' roadmapId='${id}' index=${i}><i class="fa-solid fa-trash"></i></a></div></div>`;
        $(node).appendTo(`.${id}`);
        if(i == object.length-1){
            obj_string = obj_string + `${object[i]}`;
        }else{
            obj_string = obj_string + `${object[i]},`;
        }
        obj_string = obj_string + "\n";
    }
    $(`.${id}_textarea`).val(obj_string);    
}

$(document).on("click",".del",function(){
    const text = "abc\n123"
    const match = /\r|\n/.exec(text);
    //console.log(match);
    let index = parseInt($(this).attr('index'));
    let id = $(this).attr('roadmapId');
    var roadmap = $(`#${id}`).val();
    var object = JSON.parse(roadmap);
    object.splice(index,1);
    $(this).parent('div').parent('div').remove();
    $(`#${id}`).val(JSON.stringify(object));
    updateTextarea(id);
    //console.log($(this).attr('index'));
});
//add language options

/*delete a step using each (i)
function deleteStep(index,id,btn){
    var roadmap = $(`#${id}`).val();
    var object = JSON.parse(roadmap);
    console.log(btn);
    object.splice(index,1);
    $(btn).parent('div').parent('div').remove();
}
*/
