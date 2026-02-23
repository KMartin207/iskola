import random

class Haromszog:
    def __init__(self, a, b, c, szog):
        self.a = a
        self.b = b
        self.c = c
        self.szog = szog

    def kerulet(self):
        return self.a + self.b + self.c
    
    def hszog(self):
        if self.szog == 90:
            return 'derékszögű'
        elif self.szog < 90:
            return 'hegyesszögű'
        else:
            return 'tompaszögű'

haromszog01 = Haromszog(3, 7, 5, 90)
print('K:', haromszog01.kerulet())
print('Szöge:', haromszog01.hszog())

haromszog02 = Haromszog(8, 2, 4, 56)
print('K:', haromszog02.kerulet())
print('Szöge:', haromszog02.hszog())

haromszog03 = Haromszog(3, 7, 5, 145)
print('K:', haromszog03.kerulet())
print('Szöge:', haromszog03.hszog())


haromszog_szam = int(input('Hány háromszöget generáljon a program? '))

for szamlalo in range(haromszog_szam):
    a = random.randint(1, 10)
    b = random.randint(1, 10)
    c = random.randint(1, 10)
    szog = random.randint(1, 179)

    haromszog_gen = Haromszog(a, b, c, szog)
    print('\n', szamlalo+1, '. háromszög.', sep='')
    print('\nK:', haromszog_gen.kerulet())
    print('Szöge:', haromszog_gen.hszog(), '\n')
