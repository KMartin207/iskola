import random
random = random.randint(1,100)
print("Kitalálom hogy mennyire ílletek össze.")
ename = input("Mi az első név? ")
mname = input("Mi a második név? ")

print("Ennyire ílletek össze: ", random, "%", sep="")
if random < 25 or random < 0:
    print("Sajnos nem ílletek össze. :(")
elif random > 26 or random < 50:
    print("Kicsit ílletek össze.")
elif random > 51 or random < 75:
    print("Össze ílletek.")
elif random > 76 or random < 100:
    print("Nagyon össze ílletek. :)")
