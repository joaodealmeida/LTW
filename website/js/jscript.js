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
 
	counter--;
 
        $("#TextBoxDiv" + counter).remove();
 
     });
	 




$("#submitButton").click(function(){




var question = $("#question").val();
for(i=1; i<=counter; i++){
   	  answersArray.push($('#answer' + i).val());
	}


// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "action_create_poll.php",
data: { 'question':question ,'answers':answersArray},
cache: false,
success: function(result){
alert(result);
}
});

return false;
});

























	 
	//Submit
	
/*	$("#form-question").submit(function(event) {
	
	
	

	
	
	
Stop the usual form submission event

event.preventDefault();

 get the elements required for the post method

var $form = $( this ),

url = $form.attr( 'action' );

 post method 

var posting = $.post( url, { question: $('#question').val()}, function( data ) {
	
	alert(data);
});

});*/
  
  
  
  
});

