
import random

mer = []
ossz = 0
ossz_vissz = 0
szam1 = -1
szam2 = 0

for _ in range(9):
    random1 = random.randint(1,9)
    mer.append(random1)
    
print("A magasságok: ", mer, sep="")


for _ in range(8):
    szam1 += 1
    szam2 += 1
    if mer[szam2] - mer[szam1] >= 2:
        ossz += 1
    elif mer[szam2] - mer[szam1] <= -2:
        ossz_vissz += 1
        
print(ossz, " meredek szakasza van az útnak.", sep="")
print(ossz_vissz, " meredek szakasza van visszafele az útnak", sep="")
   








