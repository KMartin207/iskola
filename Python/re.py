# Define a database of users and their passwords
users = {}

def register():
    # Prompt the user to enter a new username and password
    new_username = input("Enter a new username: ")
    new_password = input("Enter a new password: ")

    # Add the new username and password to the database
    users[new_username] = new_password
    print("Successfully registered!")

def login():
    # Get the user's input for their username and password
    username = input("Enter your username: ")
    password = input("Enter your password: ")

    # Check if the entered username and password match a set in the database
    if (username in users) and (password == users[username]):
        print("Access granted.")
    else:
        print("Access denied. Incorrect username or password.")

def main():
    while True:
        choice = input("Enter 1 to register, 2 to login, or 3 to quit: ")
        if choice == "1":
            register()
        elif choice == "2":
            login()
        elif choice == "3":
            break
        else:
            print("Invalid choice.")

# Run the main function
if __name__ == "__main__":
    main()
