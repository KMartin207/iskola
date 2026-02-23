'''
for teglalap in range(3):
    for sor in range(4):
        for oszlop in range(5):
            print("o", end="")
        print("")
    print("")



szam1 = 0

for szam in range(1):
    for sor in range(4):
        szam1 += 1
        for oszlop in range(szam1):
            print("o", end="")
        print("")
    print("")


autók = ['Trabant', 'T-Modell', 'Rolls-Royce']
while len(autók) > 0:
    print('Kölcsönözhető:', ', '.join(autók))
    mit = input('Melyik autót kölcsönzi ki? ')
    if mit in autók:
        autók.remove(mit)
    else:
        print('Ilyen autóval nem szolgálhatunk.')
    
    
    
    
import random

dobások = []
for _ in range(10000000):
    dobás = random.randint(1,6)
    dobások.append(dobás)
    
ennyi_hatos = 0
for dobás in dobások:
    if dobás == 6:
        ennyi_hatos += 1
        
print('Összesen', ennyi_hatos, 'hatost dobtunk.')
        
       
        
fővárosok = ['Párizs', 'Bécs', 'Róma', 'Prága']
for index, főváros in enumerate(fővárosok):
    print(index, főváros)
    
  
    
import random

feldobások = []
for _ in range(10):
    feldobás = random.choice(['f', 'í'])
    feldobások.append(feldobás)
    
print('A feldobások:', ', '.join(feldobások))

fej_után_fej = 0
for index, feldobás in enumerate(feldobások):
    if index > 0 and \
    feldobás == 'f' and feldobások[index-1] == 'f':
        fej_után_fej += 1
        
print('Ennyiszer volt fej után fej: ', fej_után_fej)
'''


import random

mered = []


for _ in range(30):
    random = random.randint(0,9)
    mered.append(random)














