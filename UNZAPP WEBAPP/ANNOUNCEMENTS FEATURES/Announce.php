<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Make an Announcement</title>
<style>
    body {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        background-image: url(University_of_Zambia_School_of_Engineering.jpg);
        background-size: cover;
        background-position: center;
    }
    .container {
        flex: 1;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin: 50px;
    }
    .announcements, .announcement-form {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 8px;
        width: 45%;
    }
    .announcements h2, .announcement-form h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }
    .announcement-form form {
        display: flex;
        flex-direction: column;
    }
    .announcement-form form label {
        margin-bottom: 10px;
        font-weight: bold;
    }
    .announcement-form form input, .announcement-form form textarea {
        margin-bottom: 20px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .announcement-form form button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #3b5760;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .announcements .announcement {
        background-color: #f1f1f1;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 4px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .announcements .announcement h3 {
        font-size: 20px;
        margin: 0 0 10px 0;
    }
    .announcements .announcement p {
        margin: 0 0 10px 0;
    }
    .announcements .announcement .buttons button {
        padding: 5px 10px;
        font-size: 14px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .announcements .announcement .buttons .edit-button {
        background-color: #4CAF50;
        color: white;
    }
    .announcements .announcement .buttons .delete-button {
        background-color: #f44336;
        color: white;
    }
    header {
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        padding: 10px 20px;
    }
    footer {
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        padding: 20px;
        text-align: center;
    }
</style>
</head>
<body>
<header>
    <div class="logo">
        <h1>UNZAPP</h1>
    </div>
    <div class="user">
        <span>Welcome, Lecturer!</span>
        <a href="Index.html">
            <button class="logout-button">Logout</button>
        </a>
    </div>
</header>
<div class="container">
    <div class="announcements">
        <h2>Existing Announcements</h2>
        <div class="announcement">
            <p><strong>Announcement 1:</strong> Upcoming Test</p>
            <div class="buttons">
                <button class="edit-button">Edit</button>
                <button class="delete-button">Delete</button>
            </div>
        </div>
        <div class="announcement">
            <p><strong>Announcement 2:</strong> Quiz Reminder</p>
            <div class="buttons">
                <button class="edit-button">Edit</button>
                <button class="delete-button">Delete</button>
            </div>
        </div>
        <div class="announcement">
            <p><strong>Announcement 3:</strong> Assignment Due</p>
            <div class="buttons">
                <button class="edit-button">Edit</button>
                <button class="delete-button">Delete</button>
            </div>
        </div>
    </div>
    <div class="announcement-form">
        <h2>Make an Announcement</h2>
        <form id="announcementForm" action="submit_announcement.php" method="POST">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            
            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="5" required></textarea>
            
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
            
            <button type="submit" id="submitButton">Submit Announcement</button>
        </form>
    </div>
</div>
<footer>
    © 2024 JS Team. All rights reserved.
</footer>
<script>
    document.querySelectorAll('.edit-button').forEach(button => {
        button.addEventListener('click', event => {
            const announcement = event.target.closest('.announcement');
            const title = announcement.getAttribute('data-title');
            const content = announcement.getAttribute('data-content');
            const date = announcement.getAttribute('data-date');

            document.getElementById('title').value = title;
            document.getElementById('content').value = content;
            document.getElementById('date').value = date;

            document.getElementById('submitButton').textContent = 'Save Changes';
            document.getElementById('announcementForm').action = 'save_changes.php';
        });
    });

    document.getElementById('announcementForm').addEventListener('submit', event => {
        const formAction = document.getElementById('announcementForm').action;
        
        if (formAction.includes('save_changes.php')) {
            
            alert('Changes saved successfully!');
        } else {
            
            alert('Announcement submitted successfully!');
        }
    });
</script>
</body>
</html>
