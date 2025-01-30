# NerdLuv.com - Online Dating for Geeks

NerdLuv.com is a geek-focused online dating platform that helps single nerds find their perfect match. The platform allows users to sign up, search for compatible matches, and interact with others based on shared interests.

## Features

- **User Registration**: Users can sign up and create a profile.
- **Matchmaking System**: Finds compatible matches based on user interests.
- **Profile Management**: Users can view and edit their profiles.
- **Simple UI**: A clean and intuitive design for easy navigation.
- **Data Storage**: User information is stored in a text-based database.

## Technologies Used

- **Frontend**: HTML, CSS (style.css)
- **Backend**: PHP
- **Data Storage**: Text file (`singles.txt`)

## Installation and Setup

### Prerequisites

- A web server with PHP support (e.g., Apache, XAMPP, or MAMP)
- PHP installed on the system

### Steps to Run Locally

1. **Clone or Download the Repository**:

   ```bash
   git clone https://github.com/patelcodes26/nerdluv.git
   ```

2. **Move Files to Server Directory**:

   - If using XAMPP, move the project files to `htdocs/NerdLuv/`
   - If using a standard Apache server, move files to the `www` or `public_html` directory

3. **Start the Server**:

   - For XAMPP, start Apache from the control panel.
   - For a standalone PHP server, navigate to the project folder and run:
     
     ```bash
     php -S localhost:8000
     ```

4. **Access the Application**:
   Open a web browser and go to:

   ```
   http://localhost/NerdLuv/
   ```

## File Structure

```
NerdLuv/
│── index.php          # Homepage
│── signup.php         # User registration page
│── signup-submit.php  # Handles sign-up requests
│── matches.php        # Displays user matches
│── matches-submit.php # Handles match search requests
│── common.php         # Shared PHP functions
│── style.css          # Stylesheet for the UI
│── singles.txt        # Text-based user database
│── logo.png           # Site logo
│── user.png           # Default profile image
```

## How It Works

1. **User Registration**: Users sign up using `signup.php`, and their details are saved in `singles.txt`.
2. **Finding Matches**: `matches.php` retrieves and displays compatible matches based on stored data.
3. **Interaction**: Users can browse profiles and find potential connections.

## Contribution

Feel free to contribute by forking the repository and submitting a pull request.

1. **Fork the repository**
2. **Create a new branch**
   
   ```bash
   git checkout -b feature/new-feature
   ```
4. **Make changes and commit**
   
   ```bash
   git commit -m "Add new feature"
   ```
5. **Push changes**
   
   ```bash
   git push origin feature/new-feature
   ```
6. **Submit a pull request**

## Acknowledgments

- Developed as part of a learning-based internship.
