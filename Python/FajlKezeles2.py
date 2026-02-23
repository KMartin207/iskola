
#1. ÖTÖSLOTTÓ

#1/1
'''
lotto_52_szamok = []

for _ in range(5):
    szam = int(input('Írd be az 52. heti lottó számokat: '))
    szam = lotto_52_szamok.append(szam)


szamok = sorted(lotto_52_szamok)
'''

lotto_szamok = []


with open('lottoszamok.csv', 'r') as adat:
    for sor in adat:
        sor = sor.strip().split()
        heti_szamok = []
        for szam in sor:
            szam = int(szam)
            heti_szamok.append(szam)
            
        lotto_szamok.append(heti_szamok)
        

egyeni_adat = int(input('Írj be egy számot 1-51 között: '))

print(lotto_szamok[egyeni_adat-1])

