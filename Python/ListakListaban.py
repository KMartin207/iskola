'''
ív = [[1, 1, 1, 1, 1],
      [1, 1, 1, 1, 0],
      [1, 1, 0, 0, 0],
      [0, 1, 1, 1, 1]]

for vonós in ív:
    print(vonós)


ív = [[1, 1, 1, 1, 1],
      [1, 1, 1, 1, 0],
      [1, 1, 0, 0, 0],
      [0, 1, 1, 1, 1]]

for vonós in ív:
    for nap in vonós:
        if nap == 1:
            print('itt ', '', sep='', end='')
        else:
            print("otthon ", "", sep='', end='')
    print()


ív = [[1, 1, 1, 1, 1],
      [1, 1, 1, 1, 0],
      [1, 1, 0, 0, 0],
      [0, 1, 1, 1, 1]]

adagok = 0
for vonós in ív:
    for nap in vonós:
        if nap == 1:
            adagok += 1
print("Összesen", adagok, "adagot kell fizetni pénteken.")

ív = [[1, 1, 1, 1, 1],
      [1, 1, 1, 1, 0],
      [1, 1, 0, 0, 0],
      [0, 1, 1, 1, 1]]

adagok = 0
for vonós in ív:
    adagok += sum(vonós)
print("Összesen", adagok, "adagot kell fizetni pénteken.")


ív = [[1, 1, 1, 1, 1],
      [1, 1, 1, 1, 0],
      [1, 1, 0, 0, 0],
      [0, 1, 1, 1, 1]]

adagok = 0
for vonós in ív:
    adagok += vonós.count(1)
print("Összesen", adagok, "adagot kell fizetn pénteken.")


ív = [[1, 1, 1, 1, 1],
      [1, 1, 1, 1, 0],
      [1, 1, 0, 0, 0],
      [0, 1, 1, 1, 1]]

sorszám = None
legnagyobb = 0

for index in range(len(ív)):
    vonós_jelenléte = sum(ív[index])
    if vonós_jelenléte > legnagyobb:
        legnagyobb = vonós_jelenléte
        sorszám = index
print("A(z) ", sorszám+1, ". vonós volt a legtöbbet jelen.", sep="")

ív = [[1, 1, 1, 1, 1],
      [1, 1, 1, 1, 0],
      [1, 1, 0, 0, 0],
      [0, 1, 1, 1, 1]]

vonósok_jelenlétei = []

for vonós in ív:
    vonós_jelenléte = sum(vonós)
    vonósok_jelenlétei.append(vonós_jelenléte)
    
sorszám = vonósok_jelenlétei.index(max(vonósok_jelenlétei))

print("A(z) ", sorszám+1, ". vonós volt a legtöbbet jelen.", sep="")


ív = [[1, 1, 1, 1, 1],
      [1, 1, 1, 1, 0],
      [1, 1, 0, 0, 0],
      [0, 1, 1, 1, 1]]

for nap_indexe in range(5):
    e_napon_ennyien_voltak = 0
    for vonós in ív:
        e_napon_ennyien_voltak += vonós[nap_indexe]
    if e_napon_ennyien_voltak == 4:
        print("A(z) ", nap_indexe+1, ". napon mindenki jelen volt.", sep="")

osztály = {'Noémi': {'nem': 'l', 'kor': 15},
           'Dezső': {'nem': 'f', 'kor': 17},
           'Gizella': {'nem': 'l', 'kor': 16},
           'Edömér': {'nem': 'f', 'kor': 16}}

print(osztály['Dezső']['kor'])

összeg = 0

for tag in osztály:
    összeg += osztály[tag]['kor']
print('Az osztály átlagéletkora', összeg/len(osztály), 'év.')

lányok = 0 
for tag in osztály: 
    if osztály[tag]['nem'] == 'l':
    lányok += 1


ív = {'egyik hegedűs': [1, 1, 1, 1, 1],
      'másik hegedűs': [1, 1, 1, 1, 0],
      'brácsás': [1, 1, 0, 0, 0],
      'csellós': [0, 1, 1, 1, 1]}
'''
#89.o/1
bevételek = [[130,156,231,112,96,311,231],
             [29,15,210,11,191,14,302],
             [143,222,98,101,184,201,87],
             [133,132,182,121,148,199,187]]
'''
legnagyobb = 0

for bolt in range(len(bevételek)):
    for bevétel in bevételek:
        bolt += 1
        bevétel = sum(bevétel)
        if bevétel > legnagyobb:
            legnagyobb = bevétel
            max_bolt = bolt
        
        
print('A(z)', max_bolt, '. boltnak volt a legtöbb bevétele:', legnagyobb)
    

#89.o/2
legnagyobb = 0

for nap in range(len(bevételek)):
    for bevétel in bevételek:
        bevétel = bevétel[-1]
        nap += 1
        if bevétel > legnagyobb:
            legnagyobb = bevétel
            bolt = nap
        
print('A', bolt, '. boltnak volt a legtöbb bevétele tegnap.')  


########
legnagyobb = 0
legjobb = 0
legrosszabb = 0

for nap in range(len(bevételek)):
    for bevétel in bevételek:
        bevétel = sum(bevétel)
        if bevétel > legnagyobb:
            legnagyobb = bevétel
        elif bevétel < legrosszabb:
            legrosszabb = bevétel
#########


#########
ossz = 0

for bolt in bevételek:
    bevétel = bolt[-1]
    ossz += bevétel
print(ossz)
#########

#89.o
bevételek = [[130,156,231,112,96,311,231],
             [29,15,210,11,191,14,302],
             [143,222,98,101,184,201,87],
             [133,132,182,121,148,199,187]]

legnagyobb_különbség = 0
legnagyobb_különbség_helye = None
for index in range(len(bevételek)):
    különbség = max(bevételek[index]) - min(bevételek[index])
    if különbség > legnagyobb_különbség:
        legnagyobb_különbség = különbség
        legnagyobb_különbséghelye = index

print('A legynagyobb különbség:', legnagyobb_különbség, 'ami ebben a boltban volt:', legnagyobb_különbség_helye+1)
'''

#90.o/

országok = {'Franciaország': [5000, 6500, 15000, 58805],
            'Németország': [3000, 3500, 12000, 82029],
            'Olaszország': [7000, 5000, 10500, 57592],
            'Nagy-Britannia': [800, 2000, 3942, 59237]}


legnagyobb = 0


for orszag, nepesseg in országok.items():
    nepesseg = nepesseg[0]
    if nepesseg > legnagyobb:
        legnagyobb = nepesseg
        leg_orszag = orszag
   
   
   
print('A legtöbb népességgel rendelkező ország az időszámításunk kezdetekor ', leg_orszag, "volt")







