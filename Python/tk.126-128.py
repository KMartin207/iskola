'''
#126/1
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

#126.o
fővárosok = ['Párizs', 'Bécs', 'Róma', 'Prága']
for index in range(len(fővárosok)):
    print(index, fővárosok[index])
 
fővárosok = ['Párizs', 'Bécs', 'Róma', 'Prága']
for index, főváros in enumerate(fővárosok):
    print(index, főváros)
 
#127/4
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