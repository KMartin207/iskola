import random

class Haromszog:
    def __init__(self, a, b, c):
        self.a = a
        self.b = b
        self.c = c
        

    def kerulet(self):
        kerulet = sum(self.a + self.b + self.c)
        return kerulet
    
    def terulet():
        s = sum(self.a + self.b + self.c) / 2
        #heron = 
        
        

haromszog01 = Haromszog(2, 4, 8)
print()
haromszog02 = Haromszog(6, 4, 2)
haromszog03 = Haromszog(4, 2, 6)
#kerulet = Haromszog()


szam = int(input('Írj be egy számot: '))

haromszogek = []
haromszog = []

for _ in range(szam):
    for _ in range(3):
        oldal = random.randint(1, 20)
        haromszog.append(oldal)
    haromszogek.insert(1, (haromszog))
    
    
    
    
    