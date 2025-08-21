# Edward & Liam Construction Company

<img width="1854" height="958" alt="image" src="https://github.com/user-attachments/assets/ee056f01-b68d-4e92-94e8-8a8dcd787eb7" />

This repository contains the landing page for Edward & Liam Construction Company, a business focused on leasing construction machines and offering high-quality construction services.

# About Us

At Edward & Liam Construction Company, we believe construction is more than just bricks and mortar — it’s about building communities, enhancing lifestyles, and providing the right tools for every project.

With years of experience in the industry, we now provide construction machine leasing services in addition to our building projects. Whether you’re an individual contractor or a large firm, our reliable equipment helps you complete projects on time and within budget.

# Services

Machine Leasing (excavators, bulldozers, trucks, and more)

Residential Construction

Commercial Construction

Sustainable and Safe Building Practices

Equipment Maintenance and Support

# Project Structure

This repository currently holds a simple Laravel Blade front-end for the company’s landing page.

.
├── public/
│   └── images/        # Project images (excavator, construction, house, etc.)
├── resources/
│   └── views/
│       └── welcome.blade.php   # Main landing page
├── public/css/
│   └── style.css      # Custom styling
└── README.md

# Installation & Setup

Clone the repository:

git clone https://github.com/MuchiriKinyua/Construction-Company.git
cd Construction-Company


# Install dependencies:

composer install
npm install && npm run dev


# Configure environment:

Copy .env.example to .env and update your app settings.

php artisan key:generate


Serve the application:

php artisan serve

# Future Plans

Expand machine catalog (online booking and payment system)

Add contact and inquiry forms

Implement an admin dashboard for machine management

Improve front-end with a responsive design
