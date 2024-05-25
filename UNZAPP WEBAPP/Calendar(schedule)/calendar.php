<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calendar Scheduling</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link rel="stylesheet" href="style/styles.css">
</head>
<body>
<header>
<div class="logo">
<h5>UNZAPP</h5>
</div>
<div class="user">
<a href="Student_Dashboard.html">
<button class="return">Return</button>
</a>
</div>
</header>

<div class="guidance">
<h2>Set Remainders and keep track of your Schedule!</h2>
</div>
<div id="greeting" class="greeting"></div>
<div id="clock" class="clock"></div>
<div class="main-container">
<h5>Select a date, add necessary information, and submit.</h5>
<div id="calendar-container">
<input type="text" class="form-control" id="calendar" placeholder="Select a Date">
</div>

<!-- Modal for scheduling event -->
<div class="modal fade" id="event-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Schedule Event</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form id="event-form">
<div class="form-group">
<label for="event-title">Event Title</label>
<input type="text" class="form-control" id="event-title" required>
</div>
<div class="form-group">
<label for="event-date">Event Date</label>
<input type="text" class="form-control" id="event-date" readonly>
</div>
<div class="form-group">
<label for="event-time">Event Time</label>
<input type="time" class="form-control" id="event-time" required>
</div>
<button type="submit" class="btn btn-primary">Save Event</button>
</form>
</div>
</div>
</div>
</div>

<ul id="event-list" class="list-group mt-3"></ul>
<div id="next-event" class="next-event mt-3"></div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="script/script.js"></script>
</body>
</html>
