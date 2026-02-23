'''
#52.o
import random
tömegek = []
for _ in range(20):
    tömegek.append(random.randint(1000,10000))
# kész a listánk
print(tömegek) #csak hogy könnyű legyen ellenőrizni

volt_nehéz = False
nehezek_száma = 0
össztömeg = 0
nehezek_össztömege = 0
for tömeg in tömegek:
    össztömeg = össztömeg + tömeg
    if tömeg > 9300:
        volt_nehéz = True
        nehezek_száma += 1
        nehezek_össztömege += tömeg
if volt_nehéz:
   print('Volt 9300 kilónál nehezebb jármű.')
   
print(nehezek_száma, '9300 kilónál nehezebb jármű volt.')
print('Ma', össztömeg, 'kilónyi járművet vitt át a komp.')
print('Ebből nehéznek összesen', nehezek_össztömege, 'kilónyi számít.')


mondat = input("Írj be egy mondatot: ")
if mondat[-1] != "!" and mondat[-1] != "?" and mondat[-1] != ".":
    print("Hát ejnye!")
else:
    print("Igazán gyönyörű mondat!")

mondat = None
while mondat != '':
    mondat = input('Írj ide egy mondatot! ')
    if len(mondat) > 0:
        if mondat[-1] != '!' and mondat[-1] != '?' and mondat[-1] != '.':
            print('Hát ejnye!')
        else:
            print('Igazán gyönyörű mondat!')

def aláhúzás():
    for _ in range(10):
        print('-', end='')
    print('')
print('Ez egy fontos figyelmeztetés!')
aláhúzás()
print('Minden sora nagyon fontos!')
aláhúzás()
print('Komolyan!')
aláhúzás()


def aláhúzás(jel):
    for _ in range(10):
        print(jel, end='')
    print('')


def pluszkettő(szám):
    print(szám+2)
print('5+2= ', end='')
pluszkettő(5)
print('4+2= ', end='')
pluszkettő(4)

def pluszkettő(szám):
    return (szám+2)
print('5+2= ', pluszkettő(5))
print('4+2= ', pluszkettő(4))


def megítél(mondat):
    if len(mondat) > 0:
        if mondat[-1] != '!' and mondat[-1] != '?' and mondat[-1] != '.':
            print('Hát ejnye!')
        else:
            print('Igazán gyönyörű mondat!')
mondat = None
while mondat != '':
    mondat = input('Írj ide egy mondatot! ')
    megítél(mondat)
'''







    

