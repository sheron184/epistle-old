position = { x: 0, y: 0 }
const dropbox = document.getElementById("dropbox");
function dragMoveListener (event) {
  var target = event.target
  // keep the dragged position in the data-x/data-y attributes
  var x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx
  var y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy

  // translate the element
  target.style.transform = 'translate(' + x + 'px, ' + y + 'px)'

  //update the position of the element
  //event.target.style.top = y+"px" 
  //event.target.style.left = y+"px"
  $("#html_content").val(dropbox.outerHTML);
  
  // update the posiion attributes
  target.setAttribute('data-x', x)
  target.setAttribute('data-y', y)
}
$(".element").click(function(){
  var node = `<div style='width: 100px;
  height: 100px;
  border: 2px solid;top:0px;left:0px;' class='component rectangle dropped'></div>`;
  $(node).appendTo(dropbox);
})
$(".dropped").click(function(){
  position = {x:0,y:0}
})
interact('.component').draggable({
    // enable inertial throwing
    inertia: true,
    // keep the element within the area of it's parent
    modifiers: [
      interact.modifiers.restrictRect({
        restriction: 'parent',
        endOnly: true
      })
    ],
    // enable autoScroll
    autoScroll: true,

    listeners: {
      // call this function on every dragmove event
      move: dragMoveListener,

      // call this function on every dragend event
      end (event) {
        var textEl = event.target.querySelector('p')

        textEl && (textEl.textContent =
          'moved a distance of ' +
          (Math.sqrt(Math.pow(event.pageX - event.x0, 2) +
                     Math.pow(event.pageY - event.y0, 2) | 0))
            .toFixed(2) + 'px')
      }
    }
  })
interact('.component')
  .resizable({
    edges: { top: true, left: true, bottom: true, right: true },
    listeners: {
      move: function (event) {
        var target = event.target
        var x = (parseFloat(target.getAttribute('data-x')) || 0)
        var y = (parseFloat(target.getAttribute('data-y')) || 0)

        // update the element's style
        target.style.width = event.rect.width + 'px'
        target.style.height = event.rect.height + 'px'
        $("#html_content").val(dropbox.outerHTML);
        // translate when resizing from top or left edges
        x += event.deltaRect.left
        y += event.deltaRect.top

        //target.style.transform = 'translate(' + x + 'px,' + y + 'px)'

        target.setAttribute('data-x', x)
        target.setAttribute('data-y', y)
        //target.textContent = Math.round(event.rect.width) + '\u00D7' + Math.round(event.rect.height)
      }
    }

  })

interact('.rectangle').dropzone({
  accept:'.component',
  ondragenter:function(event){
    //////position.x =0;
    //position.y=0;
  },
  ondrop:function(event){
    //event.relatedTarget.classList.add('dropped');
    //$(event.relatedTarget).appendTo(event.target);
    //event.relatedTarget.classList.remove('draggable');
    //console.log(event.target.dx);
    console.log('dropped');
  }

})
