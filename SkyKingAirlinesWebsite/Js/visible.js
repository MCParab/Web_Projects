$(document).ready(function(){
  $("#hide1").click(function(){
    $("#flyac").hide();
   
  });
  $("#id1").click(function(){
    $("#flyac").show(); $("#abtus").hide(); $("#conus").hide();
  });

});

$(document).ready(function(){
  $("#hide2").click(function(){
    $("#abtus").hide();
  });
  $("#id2").click(function(){
    $("#abtus").show();$("#flyac").hide(); $("#conus").hide();
  });

});


$(document).ready(function(){
  $("#hide3").click(function(){
    $("#conus").hide();
  });
  $("#id3").click(function(){
    $("#conus").show();$("#flyac").hide();$("#abtus").hide();
  });

});