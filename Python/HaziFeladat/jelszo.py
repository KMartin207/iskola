jelszo = 1234

while True:
    user_input = input("Írd be a jelszót: ")
    user_input = int(user_input)
    if user_input == jelszo:
        print("Helyes a jelszó")
        break
    else:
        print("Hozzáférés megtagadva")
        pass_change = input("Szeretnél jelszót váltani?")
        if pass_change == "igen":
            jelszo = input("Mi legyen az új jelszó?")
            jelszo = int(jelszo)
            print("Jelszó megváltoztatva")
        elif pass_change == "nem":
            print("Szia")
            quit()
        else:
            print("Nem értettem")
            quit()
            
menu = input("")