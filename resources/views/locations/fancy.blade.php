@extends('layouts.app')
@section('footer')
<script type="text/javascript">
  
  var glyph_opts =  {
    // The preset defines defaults for all supported icon types.
    // It also defines a common class name that is prepended (in this case 'fa ')
    preset: "awesome5",
    map: {
      // Override distinct default icons here
      folder: "fas fa-folder",
      folderOpen: "fas fa-folder-open"
    }
  };
  
  $("#tree").fancytree({
    checkbox: true,
    selectMode: 3,
    extensions: ["dnd5", "glyph", "wide"],
    source: {
      url: "http://minv.test/locations.json",
      cache: false
    },
    types: {
      "Country": {icon: "fas fa-globe-americas", iconTooltip: "Country type"},
      "House": {icon: "fas fa-home", iconTooltip: "House"},
    },
    glyph:glyph_opts,
    
    icon: function(event, data) {
      // data.typeInfo contains tree.types[node.type] (or {} if not found)
      // Here we will return the specific icon for that type, or `undefined` if
      // not type info is defined (in this case a default icon is displayed).
      return data.typeInfo.icon;
    },
    iconTooltip: function(event, data) {
      return data.typeInfo.iconTooltip;
    },
    wide: {
      iconWidth: "1em",       // Adjust this if @fancy-icon-width != "16px"
      iconSpacing: "0.5em",   // Adjust this if @fancy-icon-spacing != "3px"
      labelSpacing: "0.1em",  // Adjust this if padding between icon and label != "3px"
      levelOfs: "1.5em"       // Adjust this if ul padding != "16px"
    },  
    dnd5: {
      preventVoidMoves: true, // Prevent moving nodes 'before self', etc.
      preventRecursion: true, // Prevent dropping nodes on own descendants
      preventSameParent: false, // Prevent dropping nodes under the same direct parent
      autoExpandMS: 1000,
      multiSource: true,  // drag all selected nodes (plus current node)
      // focusOnClick: true,
      // refreshPositions: true,
      dragStart: function(node, data) {
        // allow dragging `node`:
        data.effectAllowed = "all";
        data.dropEffect = data.dropEffectSuggested;  //"link";
        // data.dropEffect = "move";
        return true;
      },
      // dragDrag: function(node, data) {
        //   data.node.info("dragDrag", data);
        //   data.dropEffect = "copy";
        //   return true;
        // },
        dragEnter: function(node, data) {
          data.node.info("dragEnter", data);
          // data.dropEffect = "link";
          return true;
        },
        dragOver: function(node, data) {
          // data.node.info("dragOver", data);
          data.dropEffect = data.dropEffectSuggested;  //"link";
          return true;
        },
        dragEnd: function(node, data) {
          data.node.info("dragEnd", data);
        },
        dragDrop: function(node, data) {
          // This function MUST be defined to enable dropping of items on the tree.
          //
          // The source data is provided in several formats:
          //   `data.otherNode` (null if it's not a FancytreeNode from the same page)
          //   `data.otherNodeData` (Json object; null if it's not a FancytreeNode)
          //   `data.dataTransfer.getData()`
          //
          // We may access some meta data to decide what to do:
          //   `data.hitMode` ("before", "after", or "over").
          //   `data.dropEffect`, `.effectAllowed`
          //   `data.originalEvent.shiftKey`, ...
          //
          // Example:
          
          var sourceNodes = data.otherNodeList,
          copyMode = data.dropEffect !== "move";
          
          if( data.hitMode === "after" ){
            // If node are inserted directly after tagrget node one-by-one,
            // this would reverse them. So we compensate:
            sourceNodes.reverse();
          }
          if( copyMode ) {
            $.each(sourceNodes, function(i, o){
              o.info("copy to " + node + ": " + data.hitMode);
              o.copyTo(node, data.hitMode, function(n){
                delete n.key;
                n.selected = false;
                n.title = "Copy of " + n.title;
              });
            });
          } else {
            $.each(sourceNodes, function(i, o){
              o.info("move to " + node + ": " + data.hitMode);
              o.moveTo(node, data.hitMode);
            });
          }
          node.debug("drop", data);
          node.setExpanded();
        }
      }
    });
    
    
    $(function(){
      $("#btnExpandAll").click(function(){
        $("#tree").fancytree("getTree").visit(function(node){
          node.setExpanded(true);
        });
      });
      $("#btnCollapseAll").click(function(){
        $("#tree").fancytree("getTree").visit(function(node){
          node.setExpanded(false);
        });
      });
      
      $( "#fontSize" ).change(function(){
        $("#tree .fancytree-container").css("font-size", $(this).prop("value") + "pt");
      });//.prop("value", 12);

    });
    
  </script>
  @endsection
  @section('content')
  
  <div class="panel panel-default">
    <p>
      Font size: <span id="curSize"></span>
      <input id="fontSize" type="number" min="4" max="48" value="10"> pt
    </p>
    <div class="panel panel-default">
      <div class="panel-heading">
        <b>Taxonomy</b>
      </div>
      <div id="tree" class="panel-body fancytree-colorize-hover fancytree-fade-expander">
      </div>
      <div class="panel-footer">
        <button id="btnExpandAll" class="btn btn-xs btn-primary">Expand all</button>
        <button id="btnCollapseAll" class="btn btn-xs btn-warning">Collapse all</button>
      </div>
    </div>
  </div>
  
  @endsection
  
  