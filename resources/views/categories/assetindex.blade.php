@extends('layouts.app')
@section('footer')
<script type="text/javascript">
  $("#tree").fancytree({
    $("#selector").fancytree({
    activeVisible: true, // Make sure, active nodes are visible (expanded)
    aria: true, // Enable WAI-ARIA support
    autoActivate: true, // Automatically activate a node when it is focused using keyboard
    autoCollapse: false, // Automatically collapse all siblings, when a node is expanded
    autoScroll: true, // Automatically scroll nodes into visible area
    clickFolderMode: 4, // 1:activate, 2:expand, 3:activate and expand, 4:activate (dblclick expands)
    checkbox: true, // Show check boxes
    checkboxAutoHide: undefined, // Display check boxes on hover only
    debugLevel: 4, // 0:quiet, 1:errors, 2:warnings, 3:infos, 4:debug
    disabled: false, // Disable control
    focusOnSelect: true, // Set focus when node is checked by a mouse click
    escapeTitles: false, // Escape `node.title` content for display
    generateIds: false, // Generate id attributes like <span id='fancytree-id-KEY'>
    idPrefix: "ft_", // Used to generate node idÂ´s like <span id='fancytree-id-<key>'>
    icon: true, // Display node icons
    keyboard: true, // Support keyboard navigation
    keyPathSeparator: "/", // Used by node.getKeyPath() and tree.loadKeyPath()
    minExpandLevel: 1, // 1: root node is not collapsible
    quicksearch: true, // Navigate to next node by typing the first letters
    rtl: false, // Enable RTL (right-to-left) mode
    selectMode: 3, // 1:single, 2:multi, 3:multi-hier
    tabindex: "0", // Whole tree behaves as one single control
    titlesTabbable: false, // Node titles can receive keyboard focus
    tooltip: true, // Use title as tooltip (also a callback could be specified)
    extensions: ["dnd5"],
    source: {
      url: "http://minv.test/assets.json",
      cache: false
    },
    dnd5: {
      autoExpandMS: 1500,
      dragStart: function(node, data) {
        return true;
      },
      dragEnter: function(node, data) {
        return true;
      },
    },
    activate: function(event, data) {
      $("#statusLine").text(event.type + ": " + data.node);
    },
    select: function(event, data) {
      $("#statusLine").text(
      event.type + ": " + data.node.isSelected() + " " + data.node
      );
    }
  });
  
  // Select a node on click
  $("#button1").click(function() {
    var tree = $("#tree").fancytree("getTree"),
    node = tree.getNodeByKey("id3.1");
    
    node.toggleSelected();
  });
  
</script>
@endsection
@section('content')

<div class="panel panel-default">
  
  <div id="tree">
    
  </div>
  
</div>

@endsection