import random

class Teglalap:
    def __init__(self, a, b):
        self.a = a
        self.b = b
    
    def kerulet(self):
        kerulet = 2 * (self.a + self.b)
        return kerulet
    
    def terulet(self):
        return self.a + self.b
    

teglalap01 = Teglalap(5, 8)
print(teglalap01.kerulet())
print(teglalap01.terulet())


negyzet_szam = int(input('Hány négyzetet generáljak le: '))

for _ in range(negyzet_szam):
    a = random.randint(1, 10)
    b = random.randint(1, 10)

    teglalap_gen = Teglalap(a, b))
    print('K', teglalap_gen.kerulet())
    print('T', teglalap_gen.terulet())
