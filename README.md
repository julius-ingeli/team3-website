# team3-website

# PROJECT DEFINITION

Website is a page for a jazz festival. The webpage features a home page, events/panels/etc.
tickets, merch sales, about section and so on.

The target audience should be the attendees to the festival/artists that would like to perform there.

Competitors: <insert here>
(!https://i.imgur.com/2AgZNzk.png)[]

Color palette: Coffee brown, Cream, Beige, 

Teamwork practices: Hybrid, sometimes online, sometimes on campus.

---

# FEATURES
- [ ] Feature 1 (Filip Danko): Ticket purchase page
- [ ] Feature 2 (Mohammed Bin Semaidaa): Countdown until first day of festival
- [ ] Feature 3 (Julius Ingeli): User Profile
- [ ] Feature 4 (Oskar Elias): Login and Signup pages

### FEATURE 1
The ticket purchase page requires the user to log into an existing account. It includes a form for submitting user's mailing and billing information and a way to add multiple tickets to the shopping cart. For project purposes, checkout doesn't include banking processes and instead immediately writes to database.

### FEATURE 2
The countdown is a dynamic countdown timer which counts down until a specified time - the first day of the festival, according to schedule. 

### FEATURE 3
The user profile reads all information from the database that had been submitted by the user upon signup/creation of their user profile. This information includes: full legal name, date of birth, e-mail address, billing address...

### FEATURE 4
The sign-up and log-in pages include forms for users to submit their personal information to be written into the database. Full legal name, date of birth, and e-mail address are mandatory fields. Everything else can be filled out at a later date or during ticket purchase.
The log-in page requires a valid e-mail and password combination to log into given user's account. The user is able to view their purchase history of tickets and change some provided information. 

---

## DATABASE TABLES

### USERS
- Cols: fname, lname, dob, email, password

### TICKETS
- Extends users
- Cols: order number, total price