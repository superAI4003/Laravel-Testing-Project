# Laravel API with Job Queue, Database, and Event Handling

## Setup Instructions

1. Clone the repository.
2. Run `composer install`.
3. Set up your `.env` file with your database credentials.
4. Run `php artisan migrate`.
5. Start the queue worker: `php artisan queue:work`.

## Testing the API

1. Send a POST request to `/api/submit` with the following JSON payload:

```json
{
    "name": "John Doe",
    "email": "john.doe@example.com",
    "message": "This is a test message."
}
```
