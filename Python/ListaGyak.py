'''
kacatok = ['csat', 'gombolyag', 'vonatjegy']
print(kacatok)

kacatok.append('kulcskarika')
kacatok.append('egérfogó')
print(kacatok)
kacatok_felsorolva = ', '.join(kacatok)
print('A kacatjaim: ', kacatok_felsorolva, '.', sep=' ')

kacatok = []
kacat = 'bármi'
while kacat != 'elfogyott':
    kacat = input('Kérek egy kacatot! ')
    if kacat != 'elfogyott':
        kacatok.append(kacat)
kacatok_felsorolva = ', '.join(kacatok)
print('A kacatjaim: ', kacatok_felsorolva, '.', sep='')


folyók = ['Duna', 'Tisza', 'Kőrös', 'Maros', 'Ipoly', 'Dráva', 'Rába']
for folyó in folyók:
    print('A', folyó, 'hosszú és vizes.')

versenyzők = []

versenyző = None
while versenyző != '':
    print('A versenyzők jelenleg:', ', '.join(versenyzők))
    versenyző = input('Kérek egy versenyzőt! ')
    if versenyző != '':
        versenyzők.append(versenyző)
print('Az első helyezett: ', versenyzők[0])
print('Az második helyezett: ', versenyzők[1])
print('A harmadik helyezett: ', versenyzők[2])
print('A sereghajtó: ', versenyzők[-1])
'''


els












