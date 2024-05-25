$(document).ready(function() {
    // Request notification permission
    if (Notification.permission !== 'granted') {
        Notification.requestPermission();
    }

    // Initialize the datepicker
    $('#calendar').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true
    }).on('changeDate', function(e) {
        $('#event-date').val(e.format());
        $('#event-modal').modal('show');
    });

    $('#filter-date').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true
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
            scheduleNotification(date, time, title);
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
    function loadEvents(filterDate = null) {
        const eventList = $('#event-list');
        eventList.empty(); // Clear the current list
        let events = JSON.parse(localStorage.getItem('events')) || {};
        let nextEvent = null;
        for (let date in events) {
            if (events.hasOwnProperty(date)) {
                events[date].forEach((event, index) => {
                    if (event && (!filterDate || filterDate === date)) { // Ensure event is not undefined and matches filter
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

                        // Find the next upcoming event
                        if (!event.done) {
                            let eventTime = new Date(date + ' ' + event.time).getTime();
                            if (!nextEvent || eventTime < new Date(nextEvent.date + ' ' + nextEvent.time).getTime()) {
                                nextEvent = { date: date, time: event.time, title: event.title };
                            }
                        }
                    }
                });
            }
        }
        if (nextEvent) {
            displayNextEvent(nextEvent);
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
                    scheduleNotification(date, updatedTime, updatedTitle);
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
                            scheduleNotification(date, time, title);
                            $('#event-modal').modal('hide');
                            $('#event-form')[0].reset();
                        }
                    });
                }
            }
        });
    }

    // Schedule a notification
    function scheduleNotification(date, time, title) {
        var eventTime = new Date(date + ' ' + time).getTime();
        var currentTime = new Date().getTime();
        var timeDifference = eventTime - currentTime;

        if (timeDifference > 0) {
            setTimeout(function() {
                showNotification(title);
            }, timeDifference);
        }
    }

    // Show a notification
    function showNotification(title) {
        if (Notification.permission === 'granted') {
            new Notification('Event Reminder', {
                body: title,
                icon: 'icon.png' // Add an icon for the notification
            });
        }
    }

    // Display a dynamic greeting
    function displayGreeting() {
        var now = new Date();
        var hours = now.getHours();
        var greetingText = '';

        if (hours < 12) {
            greetingText = 'Good Morning!';
        } else if (hours < 18) {
            greetingText = 'Good Afternoon!';
        } else {
            greetingText = 'Good Evening!';
        }

        $('#greeting').text(greetingText);
    }

    // Display a real-time clock
    function displayClock() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();

        // Add leading zeros if needed
        if (hours < 10) hours = '0' + hours;
        if (minutes < 10) minutes = '0' + minutes;
        if (seconds < 10) seconds = '0' + seconds;

        var currentTime = hours + ':' + minutes + ':' + seconds;
        $('#clock').text(currentTime);

        // Update the clock every second
        setTimeout(displayClock, 1000);
    }

    // Display the next upcoming event
    function displayNextEvent(event) {
        var now = new Date();
        var eventTime = new Date(event.date + ' ' + event.time);
        var timeDifference = eventTime - now;

        var hours = Math.floor(timeDifference / 3600000);
        var minutes = Math.floor((timeDifference % 3600000) / 60000);
        var seconds = Math.floor((timeDifference % 60000) / 1000);

        $('#next-event').text(`Next Event: ${event.title} in ${hours}h ${minutes}m ${seconds}s`);

        // Update the countdown every second
        setTimeout(function() {
            displayNextEvent(event);
        }, 1000);
    }

   
    // Initial calls
    displayGreeting();
    displayClock();
});
