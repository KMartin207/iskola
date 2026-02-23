'''
varos = ['Gárdony', 'Zágráb', 'Nagyhuta', 'Dublin']

def hany_fovaros(varosok):
    fovaros = ['Párizs', 'Riga', 'Budapest', ]
    fovarosok_szama = 0
    for varosok in varos:
        if varos in fovarosok:
            fovarosok_szama += 1
    print(fovarosok_szama, "főváros van a listában.")
    
szam = 0

while szam <= 100:
    user_varos = input("Írj be egy fővárost")
    hany_fovaros(varosok)
print(fovarosok_szama)


def akoba_valt(liter):
    print(liter / 58.6)
    
print("999 liter az ", end="")
akoba_valt(999)
'''

def betűkkel(szam):
    számok_nevei = ['nulla', 'egy', 'kettő', 'három', 'négy']
    return számok_nevei[szam]

for szam in range(10):
    print(szam, betűkkel(szam))
