import random

bejelentkezve = False
siker = False
kulcs = "admin"


def menu():
  global bejelentkezve
  if bejelentkezve == True:
    while True:
      print("\n_________ Állatmenhely Management _________\n")
      print("\t#1 Kijelentkezés")
      print("\t#2 állatok listája")
      print("\t#3 Új állat hozzáadása")
      print("\t#4 Örökbefogadás végrehajtása")
      print("\t#0 Kilépés")
      print("_________________________________________\n")

      valasztas = input("#")

      if valasztas == "1":
        bejelentkezve = False
        return menu()
      elif valasztas == "2":
        allatok()
        print("Állatok listája")
      elif valasztas == "3":
        print("Új állat hozzáadása")
        allatok_hozzaad()
      elif valasztas == "4":
        print("Örökbefogadás végrehajtása")
      elif valasztas == "0":
        quit()

  while True:
    print("\n_________ Állatmenhely _________\n")
    print("\t#1 Dolgozói bejelentkezés")
    print("\t#2 Új dolgozó regisztrálása")
    print("\t#3 állatok listája")
    print("\t#0 Kilépés")
    print("_________________________________________\n")

    valasztas = input("#")

    if valasztas == "1":
      bejelentkezes()
    elif valasztas == "2":
      regisztralas()
    elif valasztas == "3":
        print("Állatok listája")
        allatok()
    elif valasztas == "0":
      quit()
    else:
      print("Nincs ilyen lehetőség!")


def bejelentkezes():
    global siker
    global bejelentkezve
    probak = 0
    while True:
        felh_nev = input("\nFelhasználónév: ")
        jelszo = input("Jelszó: ")

        with open('adatok.txt', 'r', encoding='utf=8') as felhasznalok:
            for felhasznalo in felhasznalok:
                felhasznalo = felhasznalo.strip()
                felhasznalo = felhasznalo.split()

                if felh_nev == felhasznalo[0] and jelszo == felhasznalo[1]:
                  siker = True
                  bejelentkezve = True

                elif probak == 2:
                  while True:
                    vissza_menube = input("\nVisszalépsz a menübe? (i/n): ")
                    if vissza_menube == "i":
                      return menu()
                    elif vissza_menube == "n":
                      probak = probak - 3
                      break
                    else:
                      print("\nHibás válasz!")

            
            probak += 1

        if siker == True:
            print("\nSikeres bejelentkezés!\n")
            return menu()


def regisztralas():
    felhasznalo = input("Felhasználónév: ")
    uj_jelszo = input("Jelszó: ")
    jelszo_megero = input("Kulcs: ")
    if jelszo_megero == kulcs:
        with open('adatok.txt', 'a', encoding='utf-8') as fiokok:
            print(felhasznalo, uj_jelszo, "\n", file=fiokok)
            print("\nRegisztráció sikeres!")
    else:
        print("\nHibás kulcs!")

def allatok():
    with open('allatok.txt', 'r', encoding='utf-8') as allatok:
        for allat in allatok:
            allat = allat.strip()
            allat = allat.split()
            
            print("Száma:", allat[0], " Név: ", allat[1], " Csipszám: ", allat[2], " Ivar: ", allat[3], "Kor: ", allat[4], "Karantén: ", allat[5], "\n")

def allatok_hozzaad():
    print("Állat hozzadása\n")
    nev = input("Név: ")
    csipszam = input("Csipszám: ")
    ivar = input("Ivar: ")
    kor = input("Kor: ")
    szam = 0
    
    with open('allatok.txt', 'r') as allatok:
        for allat in allatok:
            allat = allat.strip()
            allat = allat.split()
            szam = allat[0]
            szam = int(szam) + 1
    
    
    with open('allatok.txt', 'a', encoding='utf-8') as allatok:
        print(szam, nev, csipszam, ivar, kor, 14, file=allatok)
        print("Állat sikeresen hozzáadva a listához")
    
menu()