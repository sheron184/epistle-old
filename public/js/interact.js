
//.===================== interact events =======================.
function dragMoveListener (event) {
    var target = event.target
    // keep the dragged position in the data-x/data-y attributes
    var x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx
    var y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy
  
    // translate the element
    target.style.transform = 'translate(' + x + 'px, ' + y + 'px)'
  
    //update the position of the element
    updateHtml();
    
    // update the posiion attributes
    target.setAttribute('data-x', x)
    target.setAttribute('data-y', y)
  }
  
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
          
        }
      }
  })
  
interact('.component')
    .resizable({
      edges: { top: true, left: true, bottom: true, right: true },
      listeners: {
        move: function (event) {
          var target = event.target
          target.style.position = "absolute";
          var x = (parseFloat(target.getAttribute('data-x')) || 0)
          var y = (parseFloat(target.getAttribute('data-y')) || 0)
          // update the element's style
          target.style.width = event.rect.width + 'px'
          target.style.height = event.rect.height + 'px'
          updateHtml();
  
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
    interact('.sizeonly')
    .resizable({
      edges: { right: true },
      listeners: {
        move: function (event) {
          var target = event.target
          target.style.position = "absolute";
          var x = (parseFloat(target.getAttribute('data-x')) || 0)
          var y = (parseFloat(target.getAttribute('data-y')) || 0)
          // update the element's style
          target.style.width = event.rect.width + 'px'
          target.style.height = event.rect.height + 'px'
          updateHtml();
  
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
    interact('.moveonly').draggable({
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
          
        }
      }
  })
interact('.rectangle').dropzone({
    accept:'.component',
    ondragenter:function(event){
    },
    ondrop:function(event){
      console.log('dropped');
    }
  })
  