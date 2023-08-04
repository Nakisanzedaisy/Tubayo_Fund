<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
    <h1>Feedback Form</h1>

    <form action="{{ route('submit_feedback') }}" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="message">Feedback Message:</label>
        <textarea name="message" id="message" cols="30" rows="10" required></textarea>

        <button type="submit">Submit Feedback</button>
    </form>
</body>
</html>
