$(document).ready(function(){
var counter=2;
var answersArray = [];

 //Click addButton
 $("#addButton").click(function(){

	counter++;
	var newTextBoxDiv = $(document.createElement('div'))
	     .attr("id", 'TextBoxDiv'+counter);
 
	newTextBoxDiv.after().html('<label>Answer '+ counter + ': </label> <input class="form-control" name="answer" id="answer'+counter+'" type="text" />');
		
	
	
	
	newTextBoxDiv.appendTo(".form-answer");
	
	
	
	
	
	
  });
  
  //Remove button
  $("#removeButton").click(function () {
	if(counter==2){
          alert("No more textbox to remove");
          return false;
       }   
 
	
 
        $("#TextBoxDiv" + counter).remove();
	counter--;
	
     });
	 




$("#submitButton").click(function(){




var question = $("#question").val();

if (question=="")
{
alert('Insert a question please');
return false;
}

var image = $("#image").val();

for(i=1; i<=counter; i++){
	var answer=$('#answer' + i).val();
	if (answer=="")
	{
	alert('Insert all the answers please');
	return false;
	}
}


for(i=1; i<=counter; i++){
	var answer=$('#answer' + i).val();
	answersArray.push(answer);
	}


// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "action_create_poll.php",
data: { 'question':question , 'image':image , 'answers':answersArray},
cache: false,
success: function(result){
window.location.replace("list_polls.php");

}
});

return false;
});




$(".search").keyup(function() 
{ 


var inputSearch = $(this).val();

var dataString = 'searchword='+ inputSearch;


if(inputSearch!='')
{

		 $.ajax({
      type: "POST",
      url: "list_search.php",
      data: dataString,
      cache: false,
      success: function(data)
      {
	
      
      }
      });
  
  
  
  
}return false;    
});


  
  
  
});



