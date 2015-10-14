<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kyle Burkett: Exercise 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- add jQuery -->
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <!-- add bootstrap -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- user typed js for form -->
  <script src="e2script.js"></script>
</head>
<body>
	
<div class="wrap"> 
<h1 align="center">Change Log</h1>
<p align="center">Enter the change name and the description to record a change you've made.</p> <br><br>
<div class="col-md-4"><!--quick spacer :)--></div>
	<div class="col-md-5">
		<form name="post_content" action="" method="post">
			<label for="change_record">Enter A Name:</label>
			<input type="text" class="form-control" name="change_record" placeholder="Change Title"></input><br><br>
			<label for="comment">Description:</label>
  			<textarea class="form-control" rows="5" name="change_description" placeholder="Describe the change you've made."></textarea><br><br>
			</select>
			<input type="button" id="record_button" value="Submit" class="btn btn-default"></input>
		</form>
	</div>
</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change Recorded!</h4>
      </div>
      <div class="modal-body" id="modal_content">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>
</html>