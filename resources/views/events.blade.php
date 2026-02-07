<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events List</title>
</head>
<body>
    <h1>Event Details</h1>

    @if($events->isEmpty())
        <p>No events found.</p>
    @else
        @foreach($events as $event)
            <div style="border: 1px solid #ccc; margin-bottom: 10px; padding: 10px;">
                <h2>{{ $event->name }}</h2>
                <p>{{ $event->description }}</p>
                <p><strong>Date:</strong> {{ $event->date }}</p>
                
                <p><strong>Organizer:</strong> {{ $event->organizer->name ?? 'N/A' }}</p>
            </div>
        @endforeach
    @endif
</body>
</html>