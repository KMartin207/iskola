import random

class Szoba:
    def __init__(self, szelesseg, hosszusag, magassag):
        self.szelesseg = szelesseg
        self.hosszusag = hosszusag
        self.magassag = magassag
    


    def parkettazas(self):
        padlo_terulet = self.szelesseg * self.hosszusag
        self.padlo_terulet = padlo_terulet
        return padlo_terulet


    def festes(self): 
        a_fal_terulet = self.szelesseg * self.magassag
        b_fal_terulet = self.hosszusag * self.magassag
        falak_plafon = 2 * (a_fal_terulet + b_fal_terulet) + self.padlo_terulet
        return falak_plafon


    
    def lec(self):
        return 2 * (self.szelesseg + self.hosszusag)


szoba01 = Szoba(400, 300, 200)
print('\nEkkora felületet kell leparkettázni: ', szoba01.parkettazas(), 'cm.', sep='')
print('Ekkora felületet kell lefesteni: ', szoba01.festes(), 'cm.', sep='')
print('Ennyi cm szegélyléc kell: ', szoba01.lec(), 'cm.\n', sep='')

for szamlalo in range(3):
    szelesseg = random.randint(50, 400)
    hosszusag = random.randint(200, 250)
    magassag = random.randint(120, 300)

    gen_szoba = Szoba(szelesseg, hosszusag, magassag)
    print(szamlalo+1, '.\nEkkora felületet kell leparkettázni: ', gen_szoba.parkettazas(), 'cm.', sep='')
    print('Ekkora felületet kell lefesteni: ', gen_szoba.festes(), 'cm.', sep='')
    print('Ennyi cm szegélyléc kell: ', gen_szoba.lec(), 'cm.\n', sep='')