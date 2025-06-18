# Appointment Booking System

A professional appointment booking system built with Laravel. This system is designed to help professionals like astrologers, doctors, consultants,  and more manage their appointments efficiently.

## 📞 Contact Information
- **GitHub:** [Addy2323](https://github.com/Addy2323)
- **Phone:** +255 768 828247

---

## 🚀 Features

A versatile and customizable appointment booking system designed for astrologers, doctors, consultants, Salons, Spas, Lawyers, Tutors, Career Coaches, Personal Trainers, Nutritionists, Home services, Plumbers, Electricians, Automotive and other professionals. Features include automated email notifications, multi-user roles, calendar-based scheduling, availability management, and holiday settings.

#### Features:

✅ Multi-role support (Admin,  Employee/Professional , Moderator, Subscriber)

✅ Automated Email Notifications for bookings & reminders

✅ Interactive Calendar View for easy scheduling

✅ Multi-Slot Availability (Multiple time slots per day e.g., 9 AM–12 PM + 3 PM–6 PM).

✅ Mark Holidays & Unavailable Dates

✅ Easy Rescheduling & Cancellation for professionals & clients

✅ Responsive Design (Works on desktop & mobile)

## 🛠️ Installation

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js & NPM
- MySQL 5.7+ or MariaDB 10.3+

### Setup Instructions

1. Clone the repository:

```php
git clone https://github.com/Addy2323/appointment-booking-system.git
```
```php
cd appointment-booking-system
```
Install Dependencies:
```php
composer install
```
Setting Up Environment File
##### Rename .env.example to .env in the main directory. This file holds your app’s environment settings like database and API keys.

Generate Key for project
```php
php artisan key:generate
```

2. Set up the database:
 - Create a MySQL database.
 - Update .env file with your database credentials:
 ```php
DB_DATABASE=your_database_name
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password
 ```

3. Configure SMTP for email notifications:
Add your email service (e.g., Mailtrap, Gmail) details in .env:
 ```php
MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=your_smtp_port
MAIL_USERNAME=your_email_username
MAIL_PASSWORD=your_email_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your@email.com
 ```

4. Run migrations & seed dummy data:
 ```php
php artisan migrate
php artisan db:seed
 ```

5. Start the queue for email processing:
```php
php artisan queue:listen
```

5. Start the development server:
```php
php artisan serve
```

Now, open http://localhost:8000 in your browser to access the system.

## Admin login credentials:
link: http://localhost:8000/login

user: admin@example.com

pass: admin123


## 📅 Usage Guide

### For Professionals
1. Log in to your account
2. Set your availability and working hours
3. Manage appointments from the dashboard
4. Receive email notifications for new bookings

### For Clients
1. Browse available professionals
2. Book appointments based on available slots
3. Receive confirmation emails
4. Reschedule or cancel appointments as needed

## 🔧 Support
For any issues or questions, please contact:
- **GitHub:** [Addy2323](https://github.com/Addy2323)
- **Phone:** +255 768 828247

---

## 📝 License
This project is open-source and available under the MIT License.
Create Account For Professionals (Doctors, Astrologers, or etc.)

✅ Set Availability: Define working hours & multiple slots per day.

✅ Block Holidays: Mark days as unavailable - only available while editing profile of professional.

✅ Manage Appointments: Approve, Confirmed, or cancel bookings.



## ✨ Key Features
### 🔐 Role-Based Access
##### Admin: Full system control (users, appointments, settings).

##### Moderator: Manage all appointments + employee-level access.

##### Employee/Professional:
✅ Set availability (multiple slots/day).

✅ Mark holidays/unavailable dates.

✅ View/manage their own appointments.


##### Subscriber (Client):
✅ Guest checkout is available. However, bookings can only be viewed after logging in with an account created at the time of booking.

## Support & Customization Services
For installation assistance, premium support, or custom feature development:

#### Contact Our Team:
📱 WhatsApp: https://wa.me/+255768828247

✉ Email: myambaado@gmail.com


Paid support packages available for enterprise implementations and custom integrations.

## Support This Project

If you find this package useful, please consider showing your support by:

⭐ Giving the repository a star on GitHub  
📣 Sharing it with your developer community  
🐛 Reporting any issues you encounter  

Your support helps maintain and improve this project for everyone.

#### For any help or customization, visit email us myambaado@gmail.com
