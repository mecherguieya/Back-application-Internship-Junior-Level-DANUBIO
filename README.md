# Back-End Application for Internship/Jr-Level Position - DANUBIO

## Overview

This is a **back-end application** developed for an internship/junior-level position at **Danubio**, a company specializing in real estate management. The project implements a **RESTful API** for managing real estate properties. The API allows users to create, search, and filter properties based on various attributes, including geographical location.

The application is built using **PHP** and **Laravel** with a **MySQL** database to store property data.

### Key Features
- **Create Property**: Add properties with attributes like type, address, size, number of bedrooms, price, and geolocation.
- **Search Properties**: Search properties by type, address, size, number of bedrooms, or price.
- **Geographical Search**: Search properties within a defined radius from a specified geographical point (latitude, longitude) – bonus feature.

## Technology Stack
- **Backend**: PHP 8.x (Laravel Framework)
- **Database**: MySQL
- **API**: RESTful API
- **Development Tools**: Composer (PHP dependency manager)

## Project Structure

### Application Flow
1. **Property Creation**: Add new properties with details like type, address, number of bedrooms, and price. Geolocation data (latitude, longitude) is included for spatial searches.
2. **Property Search**: Search for properties based on filters like property type, address, size, number of bedrooms, and price.
3. **Geographical Search**: Bonus feature to search for properties within a certain radius from a given point (latitude, longitude).

## Installation Guide

### Prerequisites
- **PHP**: Version 8.x or higher.
- **Composer**: PHP dependency manager.
- **MySQL**: Or another relational database supported by Laravel.

### Step-by-Step Setup

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yourusername/back-application-Internship-Junior-Level-DANUBIO.git
   cd back-application-Internship-Junior-Level-DANUBIO

2. **Install Project Dependencies**:
 Run the following command to install the required PHP packages via Composer: 
 composer install

3. **Set up the Environment:**:
Copy the example environment configuration:
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:A5pQpX9bMhJu4uZA7cC3T3l2XWf94DxAXjhCRNDmF+w=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=real_estate
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

4. **Run Database Migrations:**:

php artisan migrate

5. **Start the Application:**:
php artisan serve

## Testing the API with Postman
you can test the endpoints using Postman or any API client:

Add Property:
Method: POST
URL : http://127.0.0.1:8000/AddProperty
Body: JSON data as shown above.

{
  "type": "House",
  "address": "123 Main Street, City, Country",
  "size": 200,
  "bedrooms": 4,
  "price": 350000,
  "latitude": 40.7128,
  "longitude": -74.0060
}

Search Properties by Zone:
Method: GET
URL: http://127.0.0.1:8000/search-properties-by-zone?latitude=40.7128&longitude=-74.0060&radius=10

Search Properties:
Method: GET
URL: http://127.0.0.1:8000/Properties?address=Paris&type=House"# Back-application-Internship-Junior-Level-DANUBIO" 
