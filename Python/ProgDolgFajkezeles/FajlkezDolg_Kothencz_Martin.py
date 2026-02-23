
print('3/a')
print('Hány kockadobást tárolunk a fájlban?')

ossz = 0

with open('kockadobasok.csv', 'r', encoding='utf=8') as dobasok:
    for dobas in dobasok:
        ossz += 1 
print(ossz)
a = (ossz, 'db, kockadobást tárolunk a fájlban.')


print('3/b')
print('Mennyi hatos volt?')

ossz = 0

with open('kockadobasok.csv', 'r', encoding='utf=8') as dobasok:
    for dobas in dobasok:
        dobas = dobas.strip()
        if dobas == '6':
            ossz += 1
print(ossz)
b = (ossz, 'db, hatos volt.') 
'''
###
print('3/c')
print('A dobások hány százaléka volt egyes? (Az eredmény 2 tizedesjegyre kerekítve jelenjen meg.)
')

ossz = 0

with open('kockadobasok.csv', 'r', encoding='utf=8') as dobasok:
    for dobas in dobasok:
        dobas = dobas.strip()
        ossz += dobas
        if dobas == '1':
            ossz += 1
print(ossz)
###
'''
print('3/d')
print('Hányszor fordult elő, hogy két hatos következett egymás után?')

ossz = 0

with open('kockadobasok.csv', 'r', encoding='utf=8') as dobasok:
    for dobas in dobasok:
        dobas = dobas.strip()
        if dobas == '6' and utso == '6':
            ossz += 1
        elif dobas == '6':
            utso = '6'
        elif dobas <= '5':
            utso = None
            
print(ossz)
d = (ossz, '-szer fordult elő, hogy két hatos következett egymás után.') 


print('3/e')
print('Hányszor fordult elő „6-5-4” sorozat?')

ossz = 0
utso = None
utso_elotti = None

with open('kockadobasok.csv', 'r', encoding='utf=8') as dobasok:
    for dobas in dobasok:
        dobas = dobas.strip()
        if dobas == '4' and utso == '5' and utso_elotti == '6':
            ossz += 1
        elif dobas == '5' and utso == '6':
            utso = '5'
            utso_elotti = '6'
        elif dobas == '6':
            utso = '6'
        elif dobas <= '5':
            utso = None
            
print(ossz)
e = (ossz ,'-szer fordult elő „6-5-4” sorozat volt.')

print('3/f')

with open('kockadobasok_eredmenye.csv', 'w', encoding='utf=8') as dobasok:
    print(a, '\n', b, '\n', d, '\n', e, file=dobasok, sep='')


print('4. feladat')
import random

adat = int(input('Mennyi kockadobást generáljon? '))

with open('kockadobasok_generalt.csv', 'w', encoding='utf=8') as dobasok:
    for _ in range(adat):
        dobas = random.randint(1,6)
        print(dobas, file=dobasok, sep='')

ossz = 0
with open('kockadobasok.csv', 'r') as dobasok:
    for dobas in dobasok:
        dobas = int(dobas)
        if dobas == 1:
            ossz += dobas
print(ossz)
        


