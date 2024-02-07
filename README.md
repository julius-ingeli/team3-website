# PROJECT DEFINITION
Website is a page for a jazz festival. The webpage features a home page, events/panels/etc.
tickets, merch sales, about section and so on.

The target audience should be the attendees to the festival/artists that would like to perform there.

Color palette: Coffee brown, Cream, Beige, 

Teamwork practices: Hybrid, sometimes online, sometimes on campus.

---

## FEATURES
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
- Table 1 (Julius Ingeli): Users Table (fname, lname, dob, email, password)
- Table 2 (Filip Danko): Sales Table (order number, total price)

## CREATED FORMS 
- Form 1 (Julius Ingeli): Data Update Form | github link | shell link
Allows users to update information on their user profile.
- Form 2 (Filip Danko): Billing Information Form | github link | shell link
Users submit billing information during ticket purchase (card information, address, ...).
- Form 3 (Oskar Elias): User Sign-Up Form | github link | shell link
Users submit essential information required for creating their user profile (full name, date of birth, e-mail, password).

## CREATED TABLES
- Table 1 (Filip Danko): Purchase History Table | github link | shell link
Shows up on user profile, carrying information about recent purchases (tickets, merchandise).