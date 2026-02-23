import random

e_szam = random.randint(1,10)
k_szam = random.randint(1,10)

helyes = 0

def osszeadas(jel):
    valasz = int(input(e_szam, jel, k_szam, '= '))
    ossz = e_szam + k_szam
    if ossz == valasz:
        helyes_valasz += 1
        return 'Helyes a válasz'

    else:
        return 'Helytelen a válasz'

def kivonas(jel):
    valasz = int(input(e_szam, jel, k_szam))
    ossz = e_szam - k_szam
    if ossz == valasz:
        helyes_valasz += 1
        return 'Helyes a válasz'

    else:
        return 'Helytelen a válasz'

def szorzas():
    valasz = int(input(e_szam, '*', k_szam, '= '))
    ossz = e_szam + k_szam
    if ossz == valasz:
        helyes_valasz += 1
        return 'Helyes a válasz'

    else:
        return 'Helytelen a válasz'

def osztas():
    valasz = int(input(e_szam, '÷', k_szam, '= '))
    ossz = e_szam + k_szam
    if ossz == valasz:
        helyes_valasz += 1
        return 'Helyes a válasz'

    else:
        return 'Helytelen a válasz'


jel = input('Írj be egy műveleti jelet: (+/-/*/÷) ')

while helyes != 5:
    if jel == '+':
        print(osszeadas(jel))

    elif jel == '-':
        print(kivonas(jel))

    elif jel == '*':
        print(szorzas())

    elif jel == '÷':
        print(osztas())
