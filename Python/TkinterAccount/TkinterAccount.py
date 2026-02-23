from tkinter import *

def bejelentkezes():
    felhasz = bemenet1.get()
    jelszo = bemenet2.get()
    text1['state'] = NORMAL
    text1.delete(1.0, END)
    with open('BankAccount.txt', 'r', encoding='utf=8') as adat:
        for fiok in adat:
            fiok = fiok.sptrip()
            fiok = fiok.split()
            if fiok[0] == felhasz:
                print('o')
            else:
                print('n')



win = Tk()
win.title('Login')
win.geometry('400x300')

Label(win, text='Login', font='Hervetica 20 bold').grid(row=0, column=0)

Label(win, text='Felhasználónév', font='Hervetica 12 bold').grid(row=1, column=1)
bemenet1 = Entry(win, width=25).grid(row=1, column=0)


Label(win, text='Jelszó', font='Hervetica 12 bold').grid(row=2, column=1)
bemenet2 = Entry(win, width=25).grid(row=2, column=0)

Button(win, command=bejelentkezes, text='Bejelentkezés').grid(row=3, column=0)

text1 = Text(win, width=25, height=1, state=DISABLED). grid(row=4, column=0)

win.mainloop()