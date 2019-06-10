@extends('layouts.app')
@section('footer')
<script type="text/javascript">
    $("#tree").fancytree({
  checkbox: true,
  selectMode: 3,

  source: [
  {
    "id": 1,
    "title": "Books",
	"expanded": true,
	"folder": true,
    "description": "These are books",
    "type": 1,
    "_lft": 1,
    "_rgt": 34,
    "parent_id": null,
    "created_at": "10\/6\/2019 11:48 AM",
    "updated_at": "10\/6\/2019 11:48 AM",
    "children": [
      {
        "id": 2,
        "title": "Comic Book",
        "description": "These are Comics",
        "type": 2,
        "_lft": 2,
        "_rgt": 9,
        "parent_id": 1,
        "created_at": "10\/6\/2019 11:48 AM",
        "updated_at": "10\/6\/2019 11:48 AM",
        "children": [
          {
            "id": 3,
            "title": "Marvel Comic Book",
            "description": "These are Marvel comics",
            "type": 1,
            "_lft": 3,
            "_rgt": 4,
            "parent_id": 2,
            "created_at": "10\/6\/2019 11:48 AM",
            "updated_at": "10\/6\/2019 11:48 AM",
            "children": [
              
            ]
          },
          {
            "id": 4,
            "title": "DC Comic Book",
            "description": "These are DC comics",
            "type": 1,
            "_lft": 5,
            "_rgt": 6,
            "parent_id": 2,
            "created_at": "10\/6\/2019 11:48 AM",
            "updated_at": "10\/6\/2019 11:48 AM",
            "children": [
              
            ]
          },
          {
            "id": 5,
            "title": "Action comics",
            "description": "These are Action comics",
            "type": 1,
            "_lft": 7,
            "_rgt": 8,
            "parent_id": 2,
            "created_at": "10\/6\/2019 11:48 AM",
            "updated_at": "10\/6\/2019 11:48 AM",
            "children": [
              
            ]
          }
        ]
      },
      {
        "id": 6,
        "title": "Textbooks",
        "description": "School Books",
        "type": 1,
        "_lft": 10,
        "_rgt": 17,
        "parent_id": 1,
        "created_at": "10\/6\/2019 11:48 AM",
        "updated_at": "10\/6\/2019 11:48 AM",
        "children": [
          {
            "id": 7,
            "title": "Business",
            "description": "These are Biz texts",
            "type": 1,
            "_lft": 11,
            "_rgt": 12,
            "parent_id": 6,
            "created_at": "10\/6\/2019 11:48 AM",
            "updated_at": "10\/6\/2019 11:48 AM",
            "children": [
              
            ]
          },
          {
            "id": 8,
            "title": "Finance",
            "description": "These are Finance",
            "type": 1,
            "_lft": 13,
            "_rgt": 14,
            "parent_id": 6,
            "created_at": "10\/6\/2019 11:48 AM",
            "updated_at": "10\/6\/2019 11:48 AM",
            "children": [
              
            ]
          },
          {
            "id": 9,
            "title": "Computer Science",
            "description": "These are Comp Sci",
            "type": 1,
            "_lft": 15,
            "_rgt": 16,
            "parent_id": 6,
            "created_at": "10\/6\/2019 11:48 AM",
            "updated_at": "10\/6\/2019 11:48 AM",
            "children": [
              
            ]
          }
        ]
      },
      {
        "id": 10,
        "title": "Textbooks",
        "description": "School Books",
        "type": 1,
        "_lft": 18,
        "_rgt": 33,
        "parent_id": 1,
        "created_at": "10\/6\/2019 11:48 AM",
        "updated_at": "10\/6\/2019 11:48 AM",
        "children": [
          {
            "id": 11,
            "title": "Business",
            "description": "These are Biz texts",
            "type": 1,
            "_lft": 19,
            "_rgt": 20,
            "parent_id": 10,
            "created_at": "10\/6\/2019 11:48 AM",
            "updated_at": "10\/6\/2019 11:48 AM",
            "children": [
              
            ]
          },
          {
            "id": 12,
            "title": "Finance",
            "description": "These are Finance",
            "type": 1,
            "_lft": 21,
            "_rgt": 22,
            "parent_id": 10,
            "created_at": "10\/6\/2019 11:48 AM",
            "updated_at": "10\/6\/2019 11:48 AM",
            "children": [
              
            ]
          },
          {
            "id": 13,
            "title": "Computer Science",
            "description": "These are Comp Sci",
            "type": 1,
            "_lft": 23,
            "_rgt": 24,
            "parent_id": 10,
            "created_at": "10\/6\/2019 11:48 AM",
            "updated_at": "10\/6\/2019 11:48 AM",
            "children": [
              
            ]
          },
          {
            "id": 14,
            "title": "Textbooks",
            "description": "School Books",
            "type": 1,
            "_lft": 25,
            "_rgt": 32,
            "parent_id": 10,
            "created_at": "10\/6\/2019 11:48 AM",
            "updated_at": "10\/6\/2019 11:48 AM",
            "children": [
              {
                "id": 15,
                "title": "Business",
                "description": "These are Biz texts",
                "type": 1,
                "_lft": 26,
                "_rgt": 27,
                "parent_id": 14,
                "created_at": "10\/6\/2019 11:48 AM",
                "updated_at": "10\/6\/2019 11:48 AM",
                "children": [
                  
                ]
              },
              {
                "id": 16,
                "title": "Finance",
                "description": "These are Finance",
                "type": 1,
                "_lft": 28,
                "_rgt": 29,
                "parent_id": 14,
                "created_at": "10\/6\/2019 11:48 AM",
                "updated_at": "10\/6\/2019 11:48 AM",
                "children": [
                  
                ]
              },
              {
                "id": 17,
                "title": "Computer Science",
                "description": "These are Comp Sci",
                "type": 1,
                "_lft": 30,
                "_rgt": 31,
                "parent_id": 14,
                "created_at": "10\/6\/2019 11:48 AM",
                "updated_at": "10\/6\/2019 11:48 AM",
                "children": [
                  
                ]
              }
            ]
          }
        ]
      }
    ]
  },
  {
    "id": 18,
    "title": "Electronics",
    "description": "Misc Electronics",
    "type": 6,
    "_lft": 35,
    "_rgt": 50,
    "parent_id": null,
    "created_at": "10\/6\/2019 11:48 AM",
    "updated_at": "10\/6\/2019 11:48 AM",
    "children": [
      {
        "id": 19,
        "title": "TV\/Monitor",
        "description": "Monitor or Television",
        "type": 6,
        "_lft": 36,
        "_rgt": 41,
        "parent_id": 18,
        "created_at": "10\/6\/2019 11:48 AM",
        "updated_at": "10\/6\/2019 11:48 AM",
        "children": [
          {
            "id": 20,
            "title": "LED",
            "description": "LED TV",
            "type": 6,
            "_lft": 37,
            "_rgt": 38,
            "parent_id": 19,
            "created_at": "10\/6\/2019 11:48 AM",
            "updated_at": "10\/6\/2019 11:48 AM",
            "children": [
              
            ]
          },
          {
            "id": 21,
            "title": "Monitor",
            "description": "Monitor",
            "type": 6,
            "_lft": 39,
            "_rgt": 40,
            "parent_id": 19,
            "created_at": "10\/6\/2019 11:48 AM",
            "updated_at": "10\/6\/2019 11:48 AM",
            "children": [
              
            ]
          }
        ]
      },
      {
        "id": 22,
        "title": "Phones",
        "description": "Telephones",
        "type": 6,
        "_lft": 42,
        "_rgt": 49,
        "parent_id": 18,
        "created_at": "10\/6\/2019 11:48 AM",
        "updated_at": "10\/6\/2019 11:48 AM",
        "children": [
          {
            "id": 23,
            "title": "Samsung",
            "description": "Android",
            "type": 6,
            "_lft": 43,
            "_rgt": 44,
            "parent_id": 22,
            "created_at": "10\/6\/2019 11:48 AM",
            "updated_at": "10\/6\/2019 11:48 AM",
            "children": [
              
            ]
          },
          {
            "id": 24,
            "title": "iPhone",
            "description": "iPhone",
            "type": 6,
            "_lft": 45,
            "_rgt": 46,
            "parent_id": 22,
            "created_at": "10\/6\/2019 11:48 AM",
            "updated_at": "10\/6\/2019 11:48 AM",
            "children": [
              
            ]
          },
          {
            "id": 25,
            "title": "Xiomi",
            "description": "Other",
            "type": 6,
            "_lft": 47,
            "_rgt": 48,
            "parent_id": 22,
            "created_at": "10\/6\/2019 11:48 AM",
            "updated_at": "10\/6\/2019 11:48 AM",
            "children": [
              
            ]
          }
        ]
      }
    ]
  }
],
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