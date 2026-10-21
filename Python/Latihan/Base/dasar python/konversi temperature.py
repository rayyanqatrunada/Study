#konversi satuan temperature

print("\nKonversi Temperature\n")
#celcius
celcius = float(input("Masukan suhu dalam celcius : "))
print("Suhu = ", celcius, "celcius")

#reamur (4/5)
reamur = (4/5) * celcius
print("Suhu = ", reamur, "reamur")

#fahreheit (9/5+32)
fahrenheit = ((9/5) * celcius) + 32
print("Suhu = ", fahrenheit, "fahrenheit")

#kelvin (+273)
kelvin = celcius + 273
print("Suhu = ", kelvin, "kelvin")

#ubah farenheheit ke kelvin
print("Fahrenheit ke kelvin")
fahrenheit = float(input("Masukan Suhu Fahrenheit : "))
celcius    = (5/9) * (fahrenheit - 32)
kelvin     = (celcius + 273)
print("Suhu dalam Kelvin : ", kelvin)

#ubah kelvin ke farenheit
print("kelvin ke fahrenheit")
kelvin     = float(input("Masukan Suhu Dalam kelvin : "))
celcius    = kelvin - 273
fahrenheit = ((9/5) * celcius) + 32
print("suhu dalam fahrenheit : ", fahrenheit)