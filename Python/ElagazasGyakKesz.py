#1. BETŰ?
adat = input("Írj be valamit! ")
if False == adat.isalpha():
    print("Csak betűket tartalmaz")
elif True == adat.isalpha():
    print("Más karaktert is tartalmaz")

#2. KÖSZÖNJEK?

adat = str(input("Köszönjek el? "))
if adat == "igen":
    print("Viszontlátásra!")

#3. SZÓKÖZ

adat = input("Írj be egy szöveget! ")
print(" " in adat)
hossz = len(adat)
if " " in adat and len(adat):
    print("A szöveg tartalmaz szóközt és ", hossz, "szóbol áll")
   
#4. OSZTHATÓSÁG

adat = int(input("Írj be egy egész számot: "))
if (adat % 3) == 0:
    print("A szám 3-mal osztható")
elif (adat % 4) == 0:
    print("A szám 4-gyel osztható")
elif (adat % 9) == 0:
    print("A szám 9-cel osztható")
 
 
#5. MIT CSINÁL?
szám = int(input("Írj be egy számot: "))
if szám % 2 == 0:
    print("A szám páros")
else:
    print("A szám páratlan")

#6. MELYIK SZÁM A NAGYOBB?    
    
szam1 = int(input("Írj be egy számot: "))
szam2 = int(input("Írj be még egy számot: "))
if szam1 < szam2:
    print("A ", szam2, "a nagyobb")
elif szam1 > szam2:
    print("A ", szam1, "a nagyobb")
elif szam1 == szam2:
    print("Egyenlő mind a kettő szám")


#7. KISKORÚ…
adat = int(input("Hány éves vagy? "))
if adat < 18:
    print("Sajnos nem nézheted meg a filmet")
elif adat > 18:
    print("Megnézheted a filmet")
   

#8. ELŐJEL
adat = int(input("Írj be egy számot: "))
if adat < 0:
    print("A szám negatív (-)")
elif adat >= 0:
    print("A szám pozitív (+)")

  
#9. NAGYOBB VAGY EGYENLŐ  
    
adat = int(input("Írj be egy számot: "))
if adat >= 50:
    print("50-nél nem kisebb")
elif adat < 50:
    print("50-nél kisebb")

adat = int(input("Írj be egy számot: "))
if adat >= 50 and adat <= 0:
    print("50-nél nem kisebb")
elif adat < 50:
    print("50-nél kisebb")
    
#10. KÖZÖTT
adat = int(input("Írj be egy számot: "))
if adat >= -50 and adat <= 50:
    print("A szám -50 és +50 között van")
else:
    print("A szám nem esik -50 és +50 közé")

    
#11. CSELEKVŐKÉPES
adat = int(input("Hány éves vagy? "))
if adat < 14:
    print("Cselekvőképtelen vagy! Nem adhatsz érvényes jognyilatkozatot.")
elif adat >= 14 and adat < 18:
    print("Korlátozottan cselekvőképes vagy! A szüleid belegyezésével adhatsz csak érvényes jognyilatkozatot.")
elif adat >= 18:
    print("Nagykorú vagy! Adhatsz érvényes jognyilatkozatot.")


#12. KISEBB-NAGYOBB-EGYENLŐ

adat = int(input("Kérek egy számot: "))
adat2 = int(input("Kérek még egy számot: "))
if adat > adat2:
    print(adat2, "kisebb, mint", adat)
elif adat2 > adat:
    print(adat, "kisebb, mint", adat2)
  
#13. VÍZ HALMAZÁLLAPOTA
adat = float(input("Írj be egy hőmérsékletet: "))
if adat >= 100:
    print("A víz ezen a hőmérsékleten gőzölög")
elif adat <= 0:
    print("A víz ezen a hőmérsékleten fagy")
elif adat > 0 and adat < 100:
    print("A víz folyékony")
  
#14. POZITÍV-NEGATÍV-NULLA
adat = float(input("Írj be egy törtszámot: "))
if adat < 0:
    print("A szám negatív")
else:
    print("A szám pozitív")
    
    
#15. BALATON VÍZMÉLYSÉGE

adat = float(input("Írd meg a balaton vízmélységét: "))
if adat < 1 and adat >= 0:
    print("Pancsolunk a vízben")
elif adat >= 1 and adat <= 2:
    print("Úszunk a vízben")
elif adat > 2:
    print("Nem megyünk bele a vízbe")


#16. HÁNY JEGYŰ?
adat = int(input("Írj be egy nagy számot: "))
if adat >= 0 and adat <= 9:
    print("A szám egyjegyű")
elif adat >= 10 and adat <= 99:
    print("A szám kétjegyű")
elif adat >= 100 and adat <= 999:
    print("A szám háromjegyű")
elif adat >= 1000 and adat <= 9999:
    print("A szám négyjegyű")
elif adat >= 10000 and adat <= 99999:
    print("A szám ötjegyű")
elif adat >= 100000:
    print("A szám hatjegyű vagy több")



#17. ÉVSZAKOK

adat = int(input("Írj be egy hónap sorszámát: "))
if adat > 3 and adat <= 6:
    print("Tavasz van")
elif adat > 6 and adat <= 9:
    print("Nyár van")
elif adat > 9 and adat <= 12:
    print("Ősz van")
elif adat > 1 and adat <= 3:
    print("Tél van")


#18. MENÜS CELSIUS  KELVIN ÁTVÁLTÓ

adat = float(input("Adj meg egy hőmérséklet értéket! "))
ask = int(input("Válassz opciót!: (1) Celsius --> Kelvin\n                 1(2) Kelvin --> Celsius : "))
if ask == 1:
    ossz = 273 + adat  
    print(adat, " Celsius = ", ossz, "Kelvin")
elif ask == 2:
    ossz = -273 + adat
    print(adat, " Kelvin = ", ossz, "Celsius")

#19. MARADÉK 3-MAL OSZTVA

adat = int(input("Írj be egy számot: "))
maradek = adat % 3
if adat % 3:
    print("Maradék: ", maradek)
else:
    print("Nincs maradék")



    






