print(10 + 3)
print("10" + "3")
print("Ej" + "nye!")
print(10 * 3)
print(10 * "3")
print(10 * "Abc")



idei_ev = 2022
felhasznalo_kora = input("Hány éves vagy? ")
print("Te most", felhasznalo_kora, "éves vagy!")
felhasznalo_kora =  int(felhasznalo_kora) #az éltkort egész számmá alakítjuk
szuletesi_ev = idei_ev - felhasznalo_kora
print("Ebben az évben születtél: ", szuletesi_ev, ".", sep="")
input("Milyen " + str(felhasznalo_kora) + " évesnek lenni? ") #input esetében vessző helyett plusszjelet használunk