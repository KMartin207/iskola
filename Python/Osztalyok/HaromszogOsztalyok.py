class Teglalap:
    def __init__(self, a, b):
        self.a = a
        self.b = b
    
    def kerulet(self):
        return 2 * (self.a, self.b)
    
    def terulet(self):
        return self.a + self.b
    

teglalap01 = Teglalap(5, 8)
print(teglalap01.kerulet())
print(teglalap01.terulet())
    
    
    