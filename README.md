# ShambaMax - Farm Machinery Sharing Platform

ShambaMax is a web platform designed to facilitate the sharing of farm machinery and equipment among smallholder farmers in Kenya. With a significant portion of the country's GDP coming from agriculture and many farmers unable to afford essential machinery, ShambaMax aims to bridge this gap by connecting owners of machinery with those in need of their services.

## Features

- **User Authentication**: Secure user authentication system to ensure only registered users can access the platform.
- **Machine Listings**: Owners can create listings for the machinery and equipment they own, including details such as type, availability, and pricing.
- **Search and Filters**: Users can easily search for specific machinery or filter listings based on their requirements.
- **Booking System**: Seamless booking system allowing farmers to reserve machinery for specific dates and times.
- **Messaging**: Built-in messaging functionality for communication between machine owners and renters.
- **Payment Integration**: Secure payment processing to facilitate transactions between users.
- **Ratings and Reviews**: Users can leave feedback and ratings based on their experience with a particular machine owner.

## Technologies Used

- **Laravel 11**: A powerful PHP framework for building web applications.
- **Tailwind CSS**: A utility-first CSS framework for building custom designs with ease.
- **MySQL**: A popular open-source relational database management system for storing application data.
- **JavaScript**: Used for client-side interactivity and functionality.
- **Bootstrap**: Additional styling and components for enhanced user experience.

## Getting Started

1. Clone the repository: `git clone https://github.com/titustum/shambamax.git`
2. Install dependencies: `composer install && npm install`
3. Configure environment variables:  `cp .env.example .env`
4. Generate application key: `php artisan key:generate`
5. Migrate the database: `php artisan migrate`
6. Seed the database (optional): `php artisan db:seed`
7. Run the development server: `php artisan serve`

## Contributing

We welcome contributions from the community to enhance ShambaMax further. Here's how you can contribute:

1. Fork the repository.
2. Create your feature branch: `git checkout -b feature-name`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin feature-name`
5. Submit a pull request.

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT) - see the [LICENSE](LICENSE) file for details.

## About

ShambaMax was developed as a project for the TVET Science and Robotics Fair, aiming to address the challenges faced by smallholder farmers in Kenya. It is an initiative to promote the sharing economy and improve access to essential farm machinery and equipment.

For any inquiries or support, please contact [tituskiptanuitum@gmail.com].
