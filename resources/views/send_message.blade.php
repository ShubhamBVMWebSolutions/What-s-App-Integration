<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="{{asset('CSS/styles.css')}}">
</head>
<body>

<div class="container">
    <h2>Contact Form</h2>
    <form action="{{route('send')}}" method="POST">
    	@csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <!-- <label for="name">Name:</label> -->
            <input type="hidden" id="subject" name="subject" value="New Inquiry Recived">
        </div>
        <div class="form-group">
            <label for="number">Number:</label>
            <input type="tel" id="number" name="number" placeholder="Enter your phone number" required>
        </div>

        <div class="form-group">
            <label for="number">Email:</label>
            <input type="email" id="email" name="email" placeholder="email@example.com" required>
        </div> 
        <div class="form-group">
            <label for="number">Inquiry Message:</label>
            <textarea type="text" id="inquiry" name="inquiry" placeholder="Enter your Message Here..."></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
