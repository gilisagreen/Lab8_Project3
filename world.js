window.onload = function(){
      var button = $("lookup");	
	  

      $("lookup").observe("click", function(){
	  if ($("showall").checked){
		var query = "world.php?all=true&format=xml&lookup=";
       new Ajax.Updater('result', query, {
     method: 'get', 
   });
	  }
	  else{
         var query = "world.php?lookup="+ $("term").value+"&format=xml";
       new Ajax.Updater('result', query, {
     method: 'get', 
   });
}
});
  

  }

