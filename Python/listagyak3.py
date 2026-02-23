import random

film = ["Eredet", "Vissza a jövőbe", "Szellemírtók", "Stranger Things", "Squid Game"]
szerep = ["Leonardo DiCaprio", "Michael J. Fox", "Bill Murray", "Millie Bobby Brown", "Szong Ghiun"]

veletlen = random.randint(0,4)


kitalalt = True
print("Film címek:", ", ".join(film))


while not kitalalt == False:
    kerd = str(input("Melyik film főszereplője " + szerep[veletlen] + ": "))
    if szerep[veletlen] == "Leonardo DiCaprio" and kerd == "Eredet": 
        print("Helyes a megoldás")
        kitalalt = False
        
    elif szerep[veletlen] == "Michael J. Fox" and kerd == "Vissza a jövőbe":
        print("Helyes a megoldás")
        kitalalt = False
        
    elif szerep[veletlen] == "Bill Murray" and kerd == "Szellemírtók":
        print("Helyes a megoldás")
        kitalalt = False
        
    elif szerep[veletlen] == "Millie Bobby Brown" and kerd == "Stranger Things":
        print("Helyes a megoldás")
        kitalalt = False
        
    elif szerep[veletlen] == "Szong Ghiun" and kerd == "Squid Game":
        print("Helyes a megoldás")
        kitalalt = False
        
    else:
        print("Sajnos nem talált")


