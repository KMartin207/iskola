import random

print('1. Feladat')


eldont = int(input('Bejelentkezni vagy regisztrálni szeretnél? (1/2) '))

if eldont == 1:
    with open('accounts.txt', 'r', encoding='utf=8') as forras:
        felhasznalo = input('Felhasználónév: ')
        jelszo = input('Jelszó: ')
        for account in forras:
            account = account.strip()
            account = account.split()
            if account[0] == felhasznalo:
                if account[1] == jelszo:
                    print('Sikeres bejelentkezés')
                else:
                    print('Helytelen felhasználónév/jelszó')
            else:
                print('Helytelen felhasználónév/jelszó')
            

elif eldont == 2:
    with open('accounts.txt', 'w', encoding='utf=8') as adat:
        uj_felhasz = input('Mi legyen a felhasználónév? ')
        uj_jelszo = input('Mi legyen a jelszó? ')
        print(uj_felhasz, uj_jelszo, '\n', file=adat)
''' 
print('2. feladat')

szotar = {'kenyér' : 'bread'}

eldont = input('Magyar - Angol vagy Angol - Magyar? (1/2) ')
if eldont == 1:
    


print('3. feladat')

mondat = input('Írj be egy mondatot: ')
mondat = mondat.replace(' ', '')
print(len(mondat), 'db szó van ebben a mondatban', sep='')




print('4. feladat')

szam_1 = int(input('Írj be egy számot: '))
szam_2 = int(input('Írj be még egy számot: '))

szamlalo = 0
tipp = None

gen_szam = random.randint(szam_1, szam_2)

while tipp != gen_szam:
    tipp = int(input('Tippelj egy számot: '))
    szamlalo += 1
    if tipp == gen_szam:
        print('Gratulálok, sikeresen etaláltad a ', szamlalo, '. próbálkozásra.', sep='')
    elif tipp > gen_szam:
        print('A tipp nagyobb mint a generált szám.')
    else:
        print('A tipp kisebb mint a generált szám.')

'''



    