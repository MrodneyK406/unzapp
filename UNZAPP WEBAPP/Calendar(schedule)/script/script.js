$(document).ready(function() {
    // Initialize the datepicker
    $('#calendar').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true
    }).on('changeDate', function(e) {
        $('#event-date').val(e.format());
        $('#event-modal').modal('show');
    });

    // Load events from localStorage
    loadEvents();

    // Handle event form submission
    $('#event-form').on('submit', function(e) {
        e.preventDefault();
        var title = $('#event-title').val();
        var date = $('#event-date').val();
        var time = $('#event-time').val();

        if (title && date && time) {
            saveEvent(date, time, title);
            loadEvents();
            $('#event-modal').modal('hide');
            $('#event-form')[0].reset();
        }
    });

    // Save event to localStorage
    function saveEvent(date, time, title) {
        let events = JSON.parse(localStorage.getItem('events')) || {};
        if (!events[date]) {
            events[date] = [];
        }
        events[date].push({ time: time, title: title, done: false });
        localStorage.setItem('events', JSON.stringify(events));
    }

    // Load events from localStorage and display them
    function loadEvents() {
        const eventList = $('#event-list');
        eventList.empty(); // Clear the current list
        let events = JSON.parse(localStorage.getItem('events')) || {};
        for (let date in events) {
            if (events.hasOwnProperty(date)) {
                events[date].forEach((event, index) => {
                    if (event) { // Ensure event is not undefined
                        var eventItem = $('<li class="list-group-item"></li>');
                        if (event.done) {
                            eventItem.addClass('text-muted');
                            eventItem.css('text-decoration', 'line-through');
                        }
                        eventItem.text(`${date} ${event.time} - ${event.title}`);
                        
                        // Add action buttons
                        var eventActions = $('<div class="event-actions"></div>');
                        var doneButton = $('<button class="event-done">Done</button>');
                        var deleteButton = $('<button class="event-delete">Delete</button>');
                        var editButton = $('<button class="event-edit">Edit</button>');

                        // Add click handlers
                        doneButton.on('click', function() {
                            toggleEventDone(date, index);
                        });
                        deleteButton.on('click', function() {
                            deleteEvent(date, index);
                        });
                        editButton.on('click', function() {
                            editEvent(date, index, event);
                        });

                        eventActions.append(doneButton, deleteButton, editButton);
                        eventItem.append(eventActions);
                        eventList.append(eventItem);
                    }
                });
            }
        }
    }

    // Toggle event done status
    function toggleEventDone(date, index) {
        let events = JSON.parse(localStorage.getItem('events')) || {};
        if (events[date] && events[date][index]) {
            events[date][index].done = !events[date][index].done;
            localStorage.setItem('events', JSON.stringify(events));
            loadEvents();
        }
    }

    // Delete event
    function deleteEvent(date, index) {
        let events = JSON.parse(localStorage.getItem('events')) || {};
        if (events[date]) {
            events[date].splice(index, 1);
            if (events[date].length === 0) {
                delete events[date];
            }
            localStorage.setItem('events', JSON.stringify(events));
            loadEvents();
        }
    }

    // Edit event
    function editEvent(date, index, event) {
        $('#event-title').val(event.title);
        $('#event-date').val(date);
        $('#event-time').val(event.time);
        $('#event-modal').modal('show');
        $('#event-form').off('submit').on('submit', function(e) {
            e.preventDefault();
            let updatedTitle = $('#event-title').val();
            let updatedTime = $('#event-time').val();
            if (updatedTitle && date && updatedTime) {
                let events = JSON.parse(localStorage.getItem('events')) || {};
                if (events[date] && events[date][index]) {
                    events[date][index].title = updatedTitle;
                    events[date][index].time = updatedTime;
                    localStorage.setItem('events', JSON.stringify(events));
                    loadEvents();
                    $('#event-modal').modal('hide');
                    $('#event-form')[0].reset();
                    // Reattach the original submit handler
                    $('#event-form').off('submit').on('submit', function(e) {
                        e.preventDefault();
                        var title = $('#event-title').val();
                        var date = $('#event-date').val();
                        var time = $('#event-time').val();
                        if (title && date && time) {
                            saveEvent(date, time, title);
                            loadEvents();
                            $('#event-modal').modal('hide');
                            $('#event-form')[0].reset();
                        }
                    });
                }
            }
        });
    }
});
