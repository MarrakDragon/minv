@extends('layouts.app')
@section('footer')
<script type="text/javascript">

  $("#tree").fancytree({
    checkbox: true,
    selectMode: 3,
     extensions: ["dnd5", "wide"],
   
    tooltip: true , 
    source: {
      url: "http://minv.test/locations.json",
      cache: false
    },
    types: {
      "Country": {icon: "fas fa-globe-americas", iconTooltip: "Country type"},
      "House": {icon: "fas fa-home", iconTooltip: "House"},
    },
    
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
      multiSource: false,  // drag all selected nodes (plus current node)
      // focusOnClick: true,
      // refreshPositions: true,
      dragStart: function(node, data) {
        // allow dragging `node`:
        data.effectAllowed = "all";
        data.dropEffect = data.dropEffectSuggested; 
        //data.dropEffect = "copy";
        data.dropEffect = "move";
        return true;
      },
      dragEnter: function(node, data) {
        return true;
      },
      dragOver: function(node, data) {
        
        return true;
        
      },
      dragEnd: function(node, data) {
        data.node.info("dragEnd", data);
      },
      dragDrop: function(node, data) {
        /* This function MUST be defined to enable dropping of items on
        * the tree.
        */         
        data.otherNode.moveTo(node, data.hitMode);
        
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
<div class="container">
<div class="panel panel-default">
  <p>
    Font size: <span id="curSize"></span>
    <input id="fontSize" type="number" min="4" max="48" value="10"> pt
  </p>
  <div class="panel panel-default">
    <div class="panel-heading">
      <b>Locations</b>
    </div>
    <div id="tree" class="panel-body fancytree-colorize-hover fancytree-fade-expander">
    </div>
    <div class="panel-footer">
      <button id="btnExpandAll" class="btn btn-xs btn-primary">Expand all</button>
      <button id="btnCollapseAll" class="btn btn-xs btn-warning">Collapse all</button>
    </div>
  </div>
</div>
</div>

@endsection

