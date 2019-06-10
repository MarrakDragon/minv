@extends('layouts.app')
@section('footer')
<script type="text/javascript">
    $("#tree").fancytree({
  checkbox: true,
  selectMode: 3,

 source: {
    url: "http://minv.test/categories.json",
    cache: false
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